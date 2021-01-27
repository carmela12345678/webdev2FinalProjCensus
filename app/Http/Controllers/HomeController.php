<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function addRecAdmin()
    {
        return view('admin/AddRecAdmin');
    }

    public function users()
    {
        return view('admin/users');
    }

    public function viewCensusAdmin()
    {
        return view('admin/viewCensusAdmin');
    }

    public function unverifiedCensusAdmin()
    {
        return view('admin/unverifiedCensusAdmin');
    }

}
