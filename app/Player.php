<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    public function team()
    {
        return $this->belongsTo('App\Team');
    }

    public function position()
    {
        return $this->belongsTo('App\Position');
    }

    public function getProfileImageUrlAttribute()
    {
        $profileImage = "";

        if (! is_null($this->profileImage)){
            $profileImagePath = public_path("/images/player/" . $this->profileImage);
            if (file_exists($profileImagePath)) $profileImage = asset("images/player/" . $this->profileImage);
        }

        return $profileImage;
    }

    public function getPitchImageUrlAttribute()
    {
        $pitchImage = "";

        if (! is_null($this->pitchImage)){
            $pitchImagePath = public_path("/images/player/pitch/" . $this->pitchImage);
            if (file_exists($pitchImagePath)) $pitchImage = asset("images/player/pitch/" . $this->pitchImage);
        }

        return $pitchImage;
    }
}
