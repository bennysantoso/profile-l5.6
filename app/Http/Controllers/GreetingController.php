<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function showGreeting()
    {
        return view('word');
    }

    public function sayHello(Request $request)
    {
        $words = $request->input('words');

        $data = [
          'mywords' => $words
        ];

        return view('word', $data);
    }
}
