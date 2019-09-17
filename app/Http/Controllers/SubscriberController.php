<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $sub = new Subscriber;
        $sub->email = $request->email;
        $sub->save();

    }
}
