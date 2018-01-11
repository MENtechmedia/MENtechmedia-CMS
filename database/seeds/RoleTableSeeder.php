<?php
use Illuminate\Database\Seeder;

use App\Ticket;
use App\Musician;
use App\Projec;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        // allow
        Bouncer::allow('admin')->to('users_manage');
        Bouncer::allow('ticket-user')->toManage(Ticket::class);
        Bouncer::allow('musician-user')->toManage(Musician::class);
        Bouncer::allow('project-user')->toManage(Project::class);
        
    }
}