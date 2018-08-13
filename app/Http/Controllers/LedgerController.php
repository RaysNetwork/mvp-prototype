<?php

namespace App\Http\Controllers;

use App\Ledger;
use App\Transaction;
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

        $toUser = User::where('public_key', $request->receiver_address)->first();

        $ledger = new Transaction;
        $ledger->to_address = $request->receiver_address;
        $ledger->amount = $request->amount;
        $ledger->from_address = Auth::user()->public_key;
        $ledger->from_balance = Auth::user()->balance - $request->amount;
        $ledger->to_balance = $toUser->balance + $request->amount;

        if($request->amount > Auth::user()->balance){
            die("Oops no balance");
        }

        $ledger->save();
        Auth::user()->balance = $ledger->from_balance;
        Auth::user()->save();
        $toUser->balance = $ledger->to_balance;
        $toUser->save();

        return redirect()->to('/home');
    }
}
