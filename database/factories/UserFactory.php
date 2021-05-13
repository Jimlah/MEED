<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = User::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    $faker = FakerFactory::create();
    return [
      'org_id' => User::where('role', "=", User::USER_ADMIN)
                        ->orWhere('role', "=", User::USER_SUPER_ADMIN)
                        ->inRandomOrder()
                        ->first()->id,
      'firstname' => $faker->firstName(),
      'lastname' => $faker->lastName(),
      'email' => $faker->unique()->safeEmail(),
      'role' => $faker->randomElement([
        User::USER_ADMIN,
        User::USER_MEMBER,
        User::USER_CLIENT,
      ]),
      'email_verified_at' => now(),
      'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
      'remember_token' => Str::random(10),
    ];
  }

  /**
   * Indicate that the model's email address should be unverified.
   *
   * @return \Illuminate\Database\Eloquent\Factories\Factory
   */
  public function unverified()
  {
    return $this->state(function (array $attributes) {
      return [
        'email_verified_at' => null,
      ];
    });
  }
}
