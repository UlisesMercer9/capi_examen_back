<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserAddress;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(100)->create();

        foreach($users as $user) {
            UserAddress::factory(1)->create([
                'user_id' => $user->id
            ]);
        }
    }
}
