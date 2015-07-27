<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'body', 'slug', 'published_at', 'user_id'];

    
    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function getTitleAttribute($title)
    {
    	return strtolower($title);
    }

    public function getTagsListAttribute()
    {
        return $this->tags()->lists('id');
    }

}
