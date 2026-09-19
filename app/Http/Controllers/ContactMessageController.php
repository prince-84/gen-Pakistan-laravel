<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    public function index()
    {
        $filter = request('filter');

        $query = ContactMessage::latest();

        if ($filter === 'unread') {
            $query->where('status', 'unread');
        }

        if ($filter === 'starred') {
            $query->where('is_starred', true);
        }

        $messages = $query->paginate(20)->withQueryString();

        $totalCount = ContactMessage::count();
        $unreadCount = ContactMessage::where('status', 'unread')->count();
        $starredCount = ContactMessage::where('is_starred', true)->count();

        return response()
            ->view(
                'admin.contact.messages.index',
                compact(
                    'messages',
                    'filter',
                    'totalCount',
                    'unreadCount',
                    'starredCount'
                )
            )
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