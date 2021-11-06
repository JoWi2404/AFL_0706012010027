<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;


    protected $table = 'players';

    protected $fillable = ['code', 'player_name', 'player_age', 'player_type'];


    public function team(){
        return $this -> belongsTo(Team::class,'code', 'team_code' );
    }
}
