<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userId = Auth::id();
        dd($userId);
        $role = DB::table('users')
            ->select('role')
            ->where('id_user', '=', $userId)
            ->get();

        dd($role[0]->role);

        return view('admin_home')->with('role', $role[0]->role);
    }
}
