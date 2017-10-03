<?php

namespace App;
use App\Player;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    protected $guarded = ['id'];

    protected $fillable = 
    
    [
        'name', 'email', 'address', 'city'
    ];



    static function getAllTeams() {

    	return self::all();

    }

    public function players() {

	    return $this->hasMany(Player::class, 'team_id');

    }

}
