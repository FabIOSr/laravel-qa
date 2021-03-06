<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title','body'];

    public function user()
    {
    	return $this->belongsTo(App\User::class);
    }

    public function setTitleAttribute($value)
    {
    	$this->attributes['title'] = $value;
    	$this->attributes['slug'] = str_slug($value);
    }
}
