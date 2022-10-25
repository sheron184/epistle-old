<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Mail;
use Google_Client; 
use Google_Service_Oauth2;

class MainController extends Controller{
    public function index(){
        //client info
        $clientID = env('GOOGLE_CLIENT_ID');
        $clientSecret = env('GOOGLE_CLIENT_SECRET');
        $redirectUri = env('GOOGLE_REDIRECT');

        //new client object
        $client = new Google_Client();
        $client->setClientId($clientID);
        $client->setClientSecret($clientSecret);
        $client->setRedirectUri($redirectUri);
        $client->addScope("email");
        $client->addScope("profile");
        //google login url
        try {
            $loginUrl = $client->createAuthUrl();
        } catch (\Throwable $th) {
            echo $th;
        }
        

        return view('main',["google_url" => $loginUrl]);
    }
    public function custom_login($user,$request){
        //set session data
        $request->session()->put('unid',$user->uniq_id);
        $request->session()->put('fname',$user->first_name);
        $request->session()->put('lname',$user->last_name);
        $request->session()->put('email',$user->email);
        $request->session()->put('logged_in',true);
    }
    public function check_credentails(Request $request){
        if($request->session()->get('logged_in')){
            return redirect('home');
        }else{
            return redirect('/');
        }
    }
    public function profile(Request $req){
        $user = DB::table('geeks')->where("uniq_id","=",$req->session()->get('unid'))->get();
        $user_books = DB::table('booklets')->where("user_id","=",$req->session()->get('unid'))->get();
        return view('user/profile',["user" => $user[0],"booklets" => $user_books]);
    }
    public function signup(Request $request){
        $password = hash('md5',$request->password);
        $insert = DB::insert("insert into geeks (uniq_id,first_name,last_name,email,password) values(?,?,?,?,?)",[uniqid(),$request->first_name,$request->last_name,$request->email,$password]);
        if($insert){
            return redirect('/')->with('success','Please login to continue!');
        }else{
            return redirect('/')->with('error','Error occured!');
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
            $this->custom_login($user[0],$request);
            return redirect('home');
        }else{
            return redirect('/')->with('error','Invalid credentials!');
        }
        //var_dump($user[0]->email);die();
    }
    public function regorlogin(Request $req){
        return view('user/reg');
    }
    public function home(Request $req){
        //var_dump($req->session()->get("logged_in"));die();
        if($req->session()->get("logged_in")){
            $booklets = DB::select("select * from booklets");
            $subjects = DB::select("select * from subjects");
            return view('user/home',['booklets'=>$booklets,'subjects' => $subjects]);
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
        //client info
        $clientID = env('GOOGLE_CLIENT_ID');
        $clientSecret = env('GOOGLE_CLIENT_SECRET');
        $redirectUri = env('GOOGLE_REDIRECT');

        //new client object
        $client = new Google_Client();
        $client->setClientId($clientID);
        $client->setClientSecret($clientSecret);
        $client->setRedirectUri($redirectUri);
        $client->addScope("email");
        $client->addScope("profile");

        if(isset($_GET['code'])){
            $code = $_GET['code'];
            $accessToken = $client->fetchAccessTokenWithAuthCode($code);
            $client->setAccessToken($accessToken['access_token']);

            //get user info
            $google_oauth = new Google_Service_Oauth2($client);
            $google_account_info = $google_oauth->userinfo->get();
            $email =  $google_account_info->email;
            //$name =  $google_account_info->name;

            $first_name = $google_account_info->given_name;
            $last_name = $google_account_info->family_name;         
        }
        
        $email_exists = DB::table('geeks')->where("email","=",$email)->exists();
        if($email_exists){
            $user = DB::table('geeks')
                    ->where('email','=',$email)->get();
            $this->custom_login($user[0],$request);
            return redirect('home');
        }else{
            $insert_id = DB::insert("insert into geeks (uniq_id,first_name,last_name,email,password) values(?,?,?,?,?)",[uniqid(),$first_name,$last_name,$email,hash('md5',$email)])->lastInsertId();
            if(isset($insert_id)){
                $user = DB::table('geeks')
                    ->where('id','=',$insert_id)->get();
                $this->custom_login($user[0],$request);
                return redirect('home');
            }
        }
    }
}