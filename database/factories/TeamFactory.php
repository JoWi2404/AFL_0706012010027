<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Team;

class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Team::class;
    public function definition()
    {
        return [
            //
            'team_code' => $this -> faker->word(),
            'team_name' => $this -> faker->word(),
            'country' => $this ->faker->country(),
            'achievements' =>$this ->faker->word(),
            'coach' => $this->faker->name()
        ];
    }
}
