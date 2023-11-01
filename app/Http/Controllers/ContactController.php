<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendMailJob;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);

        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        SendMailJob::dispatch($name, $email, $message);
        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
}
