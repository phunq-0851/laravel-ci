<?php

namespace App\Listeners;

use App\Events\DiscountEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\User;
use App\Mail\HaveDiscount;
use Mail;

class SendEmailDiscountEvent
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  DiscountEvent  $event
     * @return void
     */
    public function handle(DiscountEvent $event)
    {
        $user = User::find(1);
        Mail::to($user->email)->send(new HaveDiscount($event->discount));
    }
}
