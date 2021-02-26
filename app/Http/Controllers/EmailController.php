<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function create()
    {
        return view('admin.email.email');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'name' => 'required',
            'contents' => 'required',
        ]);

        $data = [
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'contents' => $request->contents
        ];

        Mail::send('admin.email.email-template', $data, function($message) use ($data) {
            $message->to($data['email'])
                ->subject($data['subject']);
        });

        return back()->with(['message' => 'Email successfully sent!']);
    }
}
