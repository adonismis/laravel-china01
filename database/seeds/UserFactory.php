<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UserFactory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factory->define(App\Models\User::class, function (Faker $faker) {
            $date_time = $faker->date . ' ' . $faker->time;
            return [
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => '$2y$10$o47Mrsxc7tYbRbVu4.3GcuhExvZ9jypoiBw5UvVpZD1ULhBo4dUwC', // secret
                'remember_token' => str_random(10),
                'created_at' => $date_time,
                'updated_at' => $date_time,
            ];
        });
    }
}
