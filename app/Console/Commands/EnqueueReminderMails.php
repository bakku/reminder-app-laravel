<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use \App\Reminder;
use Carbon\Carbon;

class EnqueueReminderMails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'schedule:reminders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enqueue all reminders that are due';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $reminders = Reminder::where('reminder_date', '<=', Carbon::now())->get();

        foreach ($reminders as $reminder) {
            $this->info("scheduled reminder with ID: {$reminder->id}");
        }
    }
}
