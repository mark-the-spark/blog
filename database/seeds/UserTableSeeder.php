<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \App\User::create([
            'name' => 'Mark Hughes',
            'email' => 'mark@example.com',
            'password' => Hash::make('password'),
            ]);

        factory('App\User', 50)->create();
    }
}
