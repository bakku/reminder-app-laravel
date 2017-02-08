<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reminder;
use Carbon\Carbon;

class RemindersController extends Controller
{
    public function index(Request $request, $user_id)
    {
        $reminders = Reminder::where('user_id', '=', "{$user_id}")->get();

        return $reminders;
    }

    public function create(Request $request, $user_id)
    {
        $this->validate($request, [
            'message'       => 'required',
            'reminder_date' => 'required'
        ]);

        $reminder = new Reminder;
        $reminder->user_id = $user_id;
        $reminder->message = $request->input('message');
        $reminder->reminder_date = Carbon::parse($request->input('reminder_date'));
        $reminder->save();

        return response('', 201);
    }
}
