<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customer;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = Customer::count();
        $customers = Customer::all();
        return view('home',compact('count','customers'));
    }
}
