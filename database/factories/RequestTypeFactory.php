<?php

namespace Database\Factories;

use App\Models\RequestType;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequestTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RequestType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      $faker = FakerFactory::create();
        return [
          'name' => $faker->word()
        ];
    }
}
