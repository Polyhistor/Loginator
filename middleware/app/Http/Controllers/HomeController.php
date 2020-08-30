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
    public function index(Request $request)
    {

        // $request->session()->put(['poopoo'=>'teacher']);

        // return $request->session()->all();

        // return view('home');

        // $request->session()->forget('poopoo');

        // return $request->session()->all();

        $request->session()->flash('message', 'post has been created');
        return $request->session()->get('message');

    }
}
