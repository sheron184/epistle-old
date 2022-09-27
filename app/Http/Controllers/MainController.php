<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
//$passwordResetEmail="";
class MainController extends Controller{
    
    public function index(){
        return view('main');
    }
    public function check_credentails(Request $request){
        if($request->session()->get('logged_in')){
            return redirect('home');
        }else{
            return redirect('/');
        }
    }
    public function profile(Request $req){
        return view('user/profile');
    }
    public function signup(Request $request){
        $password = hash('md5',$request->password);
        $insert = DB::insert("insert into geeks (uniq_id,first_name,last_name,email,password) values(?,?,?,?,?)",[uniqid(),$request->first_name,$request->last_name,$request->email,$password]);
        if($insert){
            return redirect('check');
        }
    }
    public function login(Request $request){
        $user_exists = DB::table('geeks')
                ->where('email','=',$request->email)
                ->where('password','=',hash('md5',$request->password))->exists();
        if($user_exists){
            $user = DB::table('geeks')
            ->where('email','=',$request->email)
            ->where('password','=',hash('md5',$request->password))->get();
            //set session data
            $request->session()->put('unid',$user[0]->uniq_id);
            $request->session()->put('fname',$user[0]->first_name);
            $request->session()->put('lname',$user[0]->last_name);
            $request->session()->put('email',$user[0]->email);
            $request->session()->put('logged_in',true);

            return redirect('home');
        }else{
            return redirect('check');
        }
        //var_dump($user[0]->email);die();
    }
    public function regorlogin(Request $req){
        return view('user/reg');
    }
    public function home(Request $req){
        //var_dump($req->session()->get("logged_in"));die();
        if($req->session()->get("logged_in")){
            return view('user/home');
        }else{
            return redirect('check');
        }
    }
    public function getResetEmail(Request $req){
        return view('auth/forgot-password');
    }
    public function sendResetLink(Request $req){
        $tokenBuild = ''.$req->email.''.uniqid().'';
        $GLOBALS['email'] = $req->email;
        $token = md5($tokenBuild); 
        $email_exists = DB::table('geeks')->where('email','=',$req->email)->exists();
        //var_dump($email_exists);die();
        if($email_exists){
            DB::insert('insert into password_access_tokens(token,email) values(?,?)',[$token,$req->email]);

            $link = 'http://127.0.0.1:8000/token/'.$token.'';
            Mail::send(array('html'=>'mail.pswdreset'),array('link'=>$link),function ($message) {
                $message->from("sheronjude4@gmail.com", "sheron jude");
                $message->to($GLOBALS['email']);
            });
            echo "<h4>Please check your mail!</h4>";
        }else{
            return redirect('forgot-password');
        }
    }
    public function passwordResetTokenValidate($token){
        $token_exists = DB::table('password_access_tokens')->where('token','=',$token)->exists();
        if($token_exists){
            $tokenDetails = DB::select('select * from password_access_tokens where token=?',[$token]);
            return view('user/password_reset',['token'=>$token,'email'=>$tokenDetails[0]->email]);
        }else{
            echo "<h4>Invalid request</h4>";
        }
    }
    public function reset_pswd(Request $req){
        $password = hash('md5',$req->new_password);
        DB::update('update geeks set password=? where email=?',[$password,$req->email]);
        DB::delete('delete from password_access_tokens where email=?',[$req->email]);
        return redirect('userarea');
    }
    public function logout(Request $req){
        $req->session()->flush();
        return redirect('/');
    }
    public function gauth(Request $request){
        $email_exists = DB::table('geeks')->where("email","=",$request->gmail)->exists();
        if($email_exists){
            $user = DB::table('geeks')
            ->where('email','=',$request->gmail)
            ->get();
            //set session data
            $request->session()->put('unid',$user[0]->uniq_id);
            $request->session()->put('fname',$user[0]->first_name);
            $request->session()->put('lname',$user[0]->last_name);
            $request->session()->put('email',$user[0]->email);
            $request->session()->put('logged_in',true);

            return redirect('home');
        }else{
            $insert = DB::insert("insert into geeks (uniq_id,first_name,last_name,email,password) values(?,?,?,?,?)",[uniqid(),$request->first_name,$request->last_name,$request->gmail,""]);
            if($insert){
                return redirect('check');
            }
        }
    }
}