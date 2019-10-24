<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Admin;
use App\Books;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // factory(User::class,20)->create();
        // factory(Admin::class,10)->create();
        factory(Books::class,10)->create();
    }
}
