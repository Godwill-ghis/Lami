<?php

namespace App\Listeners;

use App\Events\UserLoggedIn;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserLoggedIn as UserLoggedInMail;
use Throwable;

class UserLoggedInNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserLoggedIn $event): void
    {
        // Send the email
        Mail::to($event->user->email)
            ->send(new UserLoggedInMail($event->user));
    }

    /**
     * Handle a job failure.
     */

     public function failed(UserLoggedIn $event, Throwable $exception)
     {
         // Send user notification of failure, etc...
         
     }
}
