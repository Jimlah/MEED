<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Request;
use App\Models\RequestType;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequestFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Request::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    $faker = FakerFactory::create();
    $user = User::where('role', "=", User::USER_CLIENT)
      ->inRandomOrder()
      ->first();
    return [
      'client_id' => $user->id,
      'org_id' => $user->org_id,
      'request_type_id' => RequestType::inRandomOrder()->first()->id,
      'description' => $faker->sentence(),
      'status' => $faker->randomElement([
          Request::STATUS_PENDING,
          Request::STATUS_OPEN,
          Request::STATUS_PROCESSING,
          Request::STATUS_CLOSE,
        ]),
      'priority' => $faker->randomElement([
        Request::PRIORITY_LOW,
        Request::PRIORITY_MEDIUM,
        Request::PRIORITY_HIGH,
      ]),
      'period' => $faker->randomDigitNotNull(),
    ];
  }
}
