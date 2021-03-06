<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        
        //disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(UsersTableSeeder::class);
        $this->call(EntitiesTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(RoleTableSeeder::class);



        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        
        Eloquent::reguard();

    }
}
