<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    //
    public function homeTeam()
    {
        return $this->belongsTo('App\Team', 'home_team_id');
    }

    public function awayTeam()
    {
        return $this->belongsTo('App\Team', 'away_team_id');
    }
}
