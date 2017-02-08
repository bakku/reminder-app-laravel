<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Reminder;
use Carbon\Carbon;

class ReminderTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateReminder()
    {
        $reminder = new Reminder;
        $reminder->user_id = 1;
        $reminder->message = 'Hello!';
        $reminder->reminder_date = Carbon::now();
        $reminder->save();

        $this->seeInDatabase('reminders', [
            'message' => 'Hello!'
        ]);
    }
}
