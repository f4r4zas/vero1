<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */



    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function passwordReset(Request $request){
        $user = User::where('email', $request->email)->first();
        if(!is_null($user)){
            $token = app('auth.password.broker')->createToken($user);

            $reset = DB::table('password_resets')->insert([
                'email' => "irfan@nextgeni.com",
                'token' => $token,
                'created_at' => Carbon::now(),
            ]);
            $url = env("APP_URL", "http://localhost/") . "/password/reset/" . $token; 
            $this->sendPaswordResetEmail($user, $url);
            return redirect()->back();
        }
        dd("No user found");
    }

    private function sendPaswordResetEmail($user, $url){
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP(); // tell to use smtp
            $mail->CharSet = "utf-8"; // set charset to utf8
            $mail->SMTPAuth = true;  // use smpt auth
            $mail->SMTPSecure = "tls"; // or ssl
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587; // most likely something different for you. This is the mailtrap.io port i use for testing. 
            $mail->Username = env("MAIL_USERNAME", "irfan@nextgeni.com");
            $mail->Password = env("MAIL_PASSWORD", "ubekjdyngmimnwxr");
            $mail->setFrom(env("MAIL_USERNAME", "irfan@nextgeni.com"));
            $mail->Subject = "Password Reset Link";
            $mail->MsgHTML("Your password reset link is <a href='".$url."'>".$url."<a/>");
            $mail->addAddress($user->email, "Recipient Name");
            $mail->send();
        } catch (phpmailerException $e) {
            dd($e);
        } catch (Exception $e) {
            dd($e);
        }
    }
}
