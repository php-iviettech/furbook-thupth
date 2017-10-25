<?php

namespace Furbook\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Furbook\User;
class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Furbook\Events\Event' => [
            'Furbook\Listeners\EventListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        User::observe(UserObserver::class);
//        User::creating(function ($user){
//           // dd($user) ;
//            $user->password=bcrypt($user->password);
//        });
        //
    }
}
