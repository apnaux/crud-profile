<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfileList;
use Inertia\Inertia;

class AccountAccessController extends Controller
{
    public function login_page(){
        return Inertia::render('Home');
    }

    public function login_account(Request $request){
        \Log::info($request);

        $account = ProfileList::where('email', '=', $request->email)
        ->where('password', '=', $request->password)
        ->get();

        \Log::info($account);
        \Log::info($account[0]->first_name);

        return Inertia::render('UserProfile', [
            'first_name' => $account[0]->first_name,
            'last_name' => $account[0]->last_name
        ]);
    }
}
