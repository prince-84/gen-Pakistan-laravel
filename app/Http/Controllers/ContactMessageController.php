<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::latest()->paginate(20);

        return response()
            ->view('admin.contact.messages.index', compact('messages'))
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0')
            ->header('Pragma', 'no-cache');
    }

    public function show(ContactMessage $message)
    {
        if ($message->status === 'unread') {
            $message->update([
                'status' => 'read',
            ]);
        }

        return view('admin.contact.messages.show', compact('message'));
    }
    public function toggleRead(ContactMessage $message)
    {
        $message->update([
            'status' => $message->status === 'unread'
                ? 'read'
                : 'unread',
        ]);

        return redirect('/admin/contact/messages');
    }
}