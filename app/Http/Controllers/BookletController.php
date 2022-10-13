<?php

namespace App\Http\Controllers;
//require '../pdfdom/autoload.php';

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;

class BookletController extends Controller{
    public function index(Request $req){
        $insert = DB::insert(
            'insert into booklets(uniq_id,user_id,topic,language,keywords) values(?,?,?,?,?)',
            [
                uniqid(),
                $req->session()->get('unid'),
                $req->topic,
                $req->language,
                $req->keywords,
            ]
        );
        if ($insert) {
            return redirect('home');
        }
    }
    public function editview($id){
        $booklet = DB::select('select * from booklets where uniq_id=?', [$id]);
        return view('booklet/editbook', ['booklet' => $booklet[0]]);
    }
    public function bookview($id){
        $booklet = DB::select('select * from booklets where uniq_id=?', [$id]);
        return view('booklet/viewbook', ['booklet' => $booklet[0]]);
    }
    public function pdf(Request $req){
        $dompdf = new Dompdf();
        $dompdf->loadHtml($req->html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream();
    }
    public function savebook(Request $req){
        //$saved = DB::update('update booklets set content=? where uniq_id=?',[$req->html,$req->id]);
        $saved = DB::table('booklets')
            ->where('uniq_id', $req->input('id'))
            ->update(['content' => $req->input('html')]);
            //var_dump($req->all());
        echo $saved;
    }
   
}
