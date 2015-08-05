<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    
    protected $toTruncate = ['articles'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        
        DB::table('articles')->truncate();
        DB::table('users')->truncate();
        DB::table('roles')->truncate();
        DB::table('role_user')->truncate();


        
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        $this->call(UserTableSeeder::class);
        $this->call(ArticleTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(RoleTableSeeder::class);

        
        Model::reguard();
    }
}
