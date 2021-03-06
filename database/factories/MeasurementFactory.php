<?php

namespace Database\Factories;

use App\Models\Measurement;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class MeasurementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Measurement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $index = 0;
        $today = Carbon::today();

        return [
            'monitor_mac' => 'C8:2B:96:1E:11:2B',
            'temperature' => $this->faker->numberBetween(20, 30),
            'air_pressure' => $this->faker->numberBetween(990, 1020),
            'humidity' => $this->faker->numberBetween(20, 80),
            'luminosity' => $this->faker->numberBetween(5, 70),
            'movement' => $this->faker->numberBetween(0, 70),
            'heat_index' => $this->faker->numberBetween(20, 30),
            'created_at' => $this->faker->date($today->copy()->startOfDay()->addMinutes(15 * $index++))
        ];
    }
}
