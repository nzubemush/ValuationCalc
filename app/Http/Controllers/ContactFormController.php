<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to('nzubechukwu.okoye@gmail.com')->send(new ContactFormMail($data));

        return redirect('contact-us')->with('message', 'Your message has been sent. We read all incoming emails and respond as soon as possible.');

    }
}
