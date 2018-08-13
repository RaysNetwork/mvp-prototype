<?php

namespace App\Http\Controllers;

use App\Ledger;
use App\Transaction;
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
            'deposites' => Transaction::where('to_address', Auth::user()->public_key)
                ->latest()
                ->limit(4)
                ->get(),

            'withdrawals' => Transaction::where('from_address', Auth::user()->public_key)
                ->latest()
                ->limit(3)
                ->get()
        ];

        return view('home', $data);
    }
}
