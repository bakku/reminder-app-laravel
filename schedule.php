<?php
    while (true) {
        echo exec("php artisan schedule:reminders"), "\n";
        sleep(60);
    }
