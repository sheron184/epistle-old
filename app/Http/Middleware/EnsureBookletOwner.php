<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EnsureBookletOwner{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next){
        $bookid = $request->route()->parameters()['id'];
        $owner = DB::table('booklets')
                ->where('user_id','=',$request->session()->get('unid'))
                ->where('uniq_id','=',$bookid)->exists();
        if($owner){
            return $next($request);
        }else{
            return redirect('home');
        }
    }
}
