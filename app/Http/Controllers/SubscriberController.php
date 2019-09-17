<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Subscriber;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers|max:255',
        ]);

        $sub = new Subscriber;
        $sub->email = $request->email;
        $sub->save();

        return back()->with('success', true);
    }
}
