<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';

    protected $fillable = ['team_code' ,'team_name', 'country', 'achievements', 'coach' ];

    protected $primaryKey = 'team_code';

    protected $keyType = 'string';

    public function players(){
        return $this -> hasMany(Player::class, 'code', 'team_code');
    }
}
