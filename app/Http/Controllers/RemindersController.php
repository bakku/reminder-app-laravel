<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reminder;

class RemindersController extends Controller
{
    public function index()
    {
        $reminders = Reminder::all();

        return $reminders;
    }

    public function show(Reminder $reminder)
    {
        return $reminder; 
    }
}
