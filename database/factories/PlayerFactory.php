<?php

namespace Database\Factories;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Player::class;
    public function definition()
    {
        return [
            //
            'code' => function(){
                $team = Team::inRandomOrder()->first();
                return $team->team_code;
            },
            'player_name'  => $this ->faker->name(),
            'player_age' =>$this ->faker->randomNumber(2, true),
            'player_type' =>$this ->faker->randomElement(['Single','Double'])
        ];
    }
}
