<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use App\Models\Event;
use App\Models\Attendee;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',

        
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // $this->registerPolicies();
        // Gate::define('update-event', function($user, Event $event){
        //     return $user->id === $event->user_id;
        // });

        // Gate::define('delete-attendee', function($user, Event $event, Attendee $attendee){
        //     return $user->id === $event->user_id || $event->user_id === $attendee->user_id;
        // });
    }
}
