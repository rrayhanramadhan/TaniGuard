<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class AssignDefaultRole implements ShouldQueue
{
    /**
     * Create the event listener.
     * @param Registered $event
     * @return void
     */
    public function __construct()
    {
        //
    }


    /**
     * Handle the event.
     */
    public function handle(Registered $event)
    {
        $user = $event->user;
        $penggunaRole = Role::findByName('Pengguna');
        // $user->assignRole ($penggunaRole);
    }
}
