<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProjectController extends Controller{
   public function index(Request $req){
        return view('project/editproject');
   }
   public function viewproject(Request $req){
        return view('project/viewproject');
   }
}
