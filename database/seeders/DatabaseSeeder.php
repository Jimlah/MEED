<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    // \App\Models\User::factory(10)->create();
    $faker = Factory::create();

    User::create([
      'org_id' => 1,
      'firstname' => 'Abdullahi',
      'lastname' => 'Jimoh',
      'email' => "abdullahij951@gmail.com",
      'role' => User::USER_SUPER_ADMIN,
      'email_verified_at' => now(),
      'password' => Hash::make("password"), // password
      'remember_token' => Str::random(10),
    ]);
  }
}
