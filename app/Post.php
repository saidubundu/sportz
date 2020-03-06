<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $dates = ['published_at'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function getDateAttribute()
    {
        return is_null($this->publihed_at) ? '' : $this->published_at->diffForHumans();
    }

    public function getImageUrlAttribute()
    {
        $imageUrl = '';
        if (! is_null($this->image)){
            $imagePath = public_path() . "/images/blog/" . $this->image;
            if (file_exists($imagePath)) $imageUrl = asset('images/blog/' . $this->image);
        }
        return $imageUrl;
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    public function scopePublished($query)
    {
        return $query->where("published_at", "<=", Carbon::now());
    }

    public function scopePopular($query)
    {
        return $query->orderBy('view_count', 'desc');
    }
}
