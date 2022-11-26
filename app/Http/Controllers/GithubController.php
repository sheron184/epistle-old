<?php
namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use GrahamCampbell\GitHub\Facades\GitHub;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Socialite;

class GithubController extends Controller{
    public function index(Request $req){
        GitHub::me()->organizations();
        var_dump(GitHub::repo()->show('sheron184', 'epistle'));
    }

     /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider(){
        return Socialite::driver('github')->redirect();
    }
 
    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback(Request $req){
        $user = Socialite::driver('github')->user();
        $userId = $req->session()->get('unid');
        $gitUsername = $user->user["login"];
        $gitId = $user->user["id"];

        DB::table("geeks")->where('uniq_id',$userId)->update(['github_username'=>$gitUsername,'git_id'=>$gitId]);
        return redirect("profile")->with('success','Successfully conncected to github');
    }
}
