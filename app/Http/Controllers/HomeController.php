<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Notification;
use App\Notifications\SendEmailNotification;

class HomeController extends Controller
{
    public function sendnotification(Request $request)
    {
        $user = User::all();

        $details = [
            'greeting' => $request->greeting,
            'title' => $request->title,
            'body' => $request->body,
            'lastline' => $request->lastline,
        ];

        Notification::send($user, new SendEmailNotification($details));
        dd('Email Sent!');
    }
}
