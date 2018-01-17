<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendXMRBalance;
use Illuminate\Support\Facades\Mail;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleindex(Request $request)
    {
        $data = $request->all();
        $apiurl = 'https://api.coinhive.com/user/withdraw';
        $user = \Auth::user();
        $username = $user->username;
        $secretkey = env('COINHIVE_SECRET_KEY');

        $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', $apiurl, [
            'form_params' => [
                'name' => $username,
                'secret' => $secretkey,
                'amount' => $data['amount']
            ]
        ]);

        $output = json_decode($response->getBody(), 1);

        if($output['success'] == true)
        {
            $data = http_build_query(['name' => $username, 'secret' => $secretkey]);

            $output = file_get_contents('https://api.coin-hive.com/user/balance?'.http_build_query(['name' => $username, 'secret' => $secretkey]));

            if(!empty($output))
            {
                $output = json_decode($output, 1);
                $xmrbalance = number_format((0.00000000006039 * $output['balance']), 8);

                $user->update(['xmr_balance' => $xmrbalance]);
            }

            Mail::to('Hello@rhinomint.co')->send(new SendXMRBalance($user, $data['amount']));

            return redirect()->route('home')->with('success', 'Withdrawl is successful.');
        }
        else
        {
            return redirect()->route('home')->with('error', 'Withdrawl is successful.');
        }
    }
}
