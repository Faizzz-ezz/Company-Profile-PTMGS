<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::to('muhammadfaizulumam4@gmail.com')->send(new ContactMessageMail($data));

        return back()->with('success', 'Pesan Anda berhasil dikirim. Kami akan menghubungi Anda segera.');
    }
}
