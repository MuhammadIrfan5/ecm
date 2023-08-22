<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AshAllenDesign\ShortURL\Facades\ShortURL;
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
        $noti = array("message" => "Welcome to Dashboard!", "alert-type" => "success");
        return redirect()->route('dashboard.v1')->with($noti);
    }
}
