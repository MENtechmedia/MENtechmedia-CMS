<?php

use Illuminate\Database\Seeder;
use App\Entity;


class EntitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\Entity::truncate();
        App\NavGroup::truncate();
        
        App\NavGroup::create([
            'name' => 'Admin',
        ]);
        
        App\NavGroup::create([
            'name' => 'Website',
        ]);

        Entity::create([
            'name' => 'User',
            'nav_group_id' => '1',
            'title' => 'Gebruikers',
            'description' => 'Beheer hier de accounts',
            'icon' => 'group',
        ]);    

        Entity::create([
            'name' => 'Ticket', 
            'nav_group_id' => '2',
            'title' => 'Tickets',
            'description' => 'Beheer hier de tickets',
            'icon' => 'group',
        ]);

        Entity::create([
            'name' => 'Musician',
            'nav_group_id' => '2',
            'title' => 'Muzikanten',
            'description' => 'Beheer hier de muzikanten',
            'icon' => 'group',
        ]);

        Entity::create([
            'name' => 'Project',
            'nav_group_id' => '2',
            'title' => 'Projecten',
            'description' => 'Beheer hier de projecten',
            'icon' => 'group',
        ]);

    }
}
