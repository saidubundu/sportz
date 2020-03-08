<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //

    public function players()
    {
        return $this->hasMany('App\Player');
    }

    public function fixture()
    {
        return $this->belongsTo('App\Fixture');
    }

    public function getTeamLogoUrlAttribute()
    {
        $teamLogo = "";
        if (! is_null($this->teamLogo)){
            $teamLogoPath = public_path("/images/club-logo/" . $this->teamLogo);
            if (file_exists($teamLogoPath)) $teamLogo = asset("images/club-logo/" . $this->teamLogo);
        }

        return $teamLogo;
    }

    public function getSquadPhotoUrlAttribute()
    {
        $squadPhoto = "";
        if (! is_null($this->squadPhoto)){
            $squadPhotoPath = public_path("/images/squad/" . $this->squadPhoto);
            if (file_exists($squadPhotoPath)) $squadPhoto = asset("images/squad/" . $this->squadPhoto);
        }

        return $squadPhoto;
    }


}
