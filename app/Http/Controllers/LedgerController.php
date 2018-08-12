<?php

namespace App\Http\Controllers;

use App\Ledger;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LedgerController extends Controller
{
    public function transmitRays(Request $request){

        $this->validate($request, [
            'receiver_address' => 'required|valid_public_key',
            'amount' => 'required|numeric',
            'digital_id' => 'required|numeric'
        ]);

        $ledger = new Ledger;
        $ledger->user_id = Auth::user()->id;
        $ledger->amount = $request->amount;
        $ledger->target_key = $request->receiver_address;
        $ledger->type = 'deposit';

        if($request->amount > Auth::user()->balance){
            die("Shit balance none");
        }

        $ledger->save();

    }
}
