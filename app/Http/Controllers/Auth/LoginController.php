<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function index()
    {
        //
        return view('auth.login');
    }

    public function login(Request $request){
        //return view('admin_home');
        $user = User::where('usename', $request->username)
            ->where('password', $request->password)
            ->first();

        if(!isset($user)){
            return false;
        }

        Auth::login($user);
        return view('admin_home');
    }

    protected function attemptLogin(Request $request)
    {
        $user = User::where('usename', $request->username)
            ->where('password', $request->password)
            ->first();

        if(!isset($user)){
            return false;
        }

        Auth::login($user);
        return true;
    }

    public function logout(Request $request)
    {
        //Auth::logout();
        return redirect('/welcome');
    }
}
