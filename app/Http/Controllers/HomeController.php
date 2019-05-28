<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // return view('admin/users');
        if(Auth::check()){
            if(Auth::user()->isAdmin()){
                return redirect('admin/users');
            }
            // else{
            //     $client = Client::all();
            //     return view('home', compact('client'));
            // }
        }
    }
}
