<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $this->call(LaratrustSeeder::class);
         User::factory(1)->create()->each(function ($user) {
            $user->attachRole('super_admin');
        });


    }
}
