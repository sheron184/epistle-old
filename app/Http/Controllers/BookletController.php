<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookletController extends Controller{
  public function index(Request $req){
    $insert = DB::insert("insert into booklets(uniq_id,user_id,topic,language,keywords) values(?,?,?,?,?)",[uniqid(),$req->session()->get('unid'),$req->topic,$req->language,$req->keywords]);
    if($insert){
        return redirect('home');
    }

  }
}
