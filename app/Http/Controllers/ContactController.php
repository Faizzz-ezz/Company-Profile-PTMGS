<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageMail;
use App\Mail\NewsletterSubscriptionMail;
use App\Models\ContactMessage;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contactMessage = ContactMessage::create($validated);

        Mail::to('muhammadfaizulumam4@gmail.com')->send(new ContactMessageMail($contactMessage));

        return back()->with('success', 'Pesan Anda berhasil dikirim. Kami akan menghubungi Anda segera.');
    }

    public function subscribe(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255|unique:newsletter_subscribers,email',
        ]);

        $subscriber = NewsletterSubscriber::create($validated);

        Mail::to('muhammadfaizulumam4@gmail.com')->send(new NewsletterSubscriptionMail($subscriber));

        return back()->with('success', 'Terima kasih! Anda telah berlangganan newsletter kami.');
    }
}
