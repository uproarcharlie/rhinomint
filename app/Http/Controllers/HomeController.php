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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apiurl = 'https://api.coin-hive.com/user/balance';

        $username = \Auth::user()->username;
        $secretkey = env('COINHIVE_SECRET_KEY');

        $data = http_build_query(['name' => $username, 'secret' => $secretkey]);

        $output = file_get_contents($apiurl.'?'.$data);

        if(!empty($output))
        {
            $output = json_decode($output, 1);
        }

        return view('home', ['output' => $output]);
    }
}
