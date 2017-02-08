<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reminder;

class RemindersController extends Controller
{
    public function index(Request $request, $user_id)
    {
        $reminders = Reminder::where('user_id', '=', "{$user_id}")->get();

        return $reminders;
    }

    public function show(Reminder $reminder)
    {
        return $reminder; 
    }
}
