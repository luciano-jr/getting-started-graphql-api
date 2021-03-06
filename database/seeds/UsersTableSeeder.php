<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1, 20) as $i) {
            $user = User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
            ]);
            $user->profile()->create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'avatar' => $faker->imageUrl()
            ]);
        }
    }
}
