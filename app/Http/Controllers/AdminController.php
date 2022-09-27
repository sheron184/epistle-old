<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller{
    public function index(){
        $subjects = DB::select("select *from subjects");

        return view('admin.main',['subjects'=>$subjects]);
    }
    public function add_subject(Request $request){
        $insert = DB::insert("insert into subjects(uniq_id,name,language) values(?,?,?)",[uniqid(),$request->name,$request->language]);
        if($insert){
            return redirect('admin');
        }
    }
    public function update_roadmap(Request $request){
        $update = DB::update("update subjects set roadmap=? where uniq_id=?",[$request->roadmap,$request->id]);
        if($update){
            return redirect('admin');
        }
    }
}