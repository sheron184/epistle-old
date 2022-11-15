<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Project;

class ProjectController extends Controller{
   public function index(Request $req){
        return view('project/editproject');
   }
   public function viewproject($id){
        $project = DB::select('select * from projects where uniq_id=?', [$id]);
        return view('project/viewproject', ['project' => $project[0]]);
   }
   public function create(Request $request){
     $project = new Project;
     $project->uniq_id = uniqid();
     $project->user_id = $request->session()->get('unid');
     $project->description = $request->description;
     $project->technologies = $request->technologies;
     $project->topic = $request->topic;

     if($project->save()){
          return redirect('home')->withSuccess("Project successfully created");
     }else{
          return redirect('home')->withError("Error occured");
     }
   }
   public function editproject($id){
     $project = Project::where('uniq_id',$id)->first();
     //var_dump($project[0]);die();
     return view('project/editproject',["project"=>$project]);
   }
   public function saveproject(Request $req){
     //$saved = DB::update('update booklets set content=? where uniq_id=?',[$req->html,$req->id]);
     $saved = DB::table('projects')
         ->where('uniq_id', $req->input('id'))
         ->update(['content' => $req->input('html')]);
         //var_dump($req->all());
     echo $saved;
 }
}
