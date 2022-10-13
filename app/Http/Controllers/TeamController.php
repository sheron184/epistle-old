<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller{
    public function teamview(Request $req){
        return view('team/teamview');
    }
}
