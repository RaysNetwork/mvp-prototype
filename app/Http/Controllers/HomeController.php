<?php

namespace App\Http\Controllers;

use App\Ledger;
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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [
            'deposites' => Ledger::where('target_key', Auth::user()->public_key)
                ->where('type', 'deposit')
                ->latest()
                ->limit(4)
                ->get(),

            'withdrawals' => Ledger::where('user_id', Auth::user()->id)
                ->where('type', 'withdraw')
                ->latest()
                ->limit(3)
                ->get()
        ];

        return view('home', $data);
    }
}
