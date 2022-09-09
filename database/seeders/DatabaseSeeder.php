<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(1)->create();
        $user = new User;
        $user->name = "Admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt('12345678'); 
        $user->hak_akses= "0";
        $user->save();
    }
    
}
