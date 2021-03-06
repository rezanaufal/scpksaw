<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;
use Carbon\Carbon;

class userSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        $admin = User::create([
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('admin'),
        ]);
        $admin->role()->attach(['1','2']);

    }
}
