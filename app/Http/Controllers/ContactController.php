<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function contactUs(Request $request)
    {
        $request->validate([
            'name' => 'string|required',
            'email' => 'string|required|email:dns',
            'phone' => 'string|required',
            'message' => 'string|required'
        ]);

        Contact::create($request->all());;

        return redirect('/')->with('success', 'Thanks for your message we\'ll get back to you soon!');
    }
}
