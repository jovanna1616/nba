<?php

namespace App;
use App\Team;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    
	static function getAllPlayers() {

		return self::all();
	}

    public function team() {

    	return $this->belongsTo(Team::class);
    }
}
