<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller{
    public function explorer(Request $req){
        return view('user/explorer');
    }
}
