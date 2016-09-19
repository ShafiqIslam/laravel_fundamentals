<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

use App\Models\User;

class Article extends Model
{
    protected $fillable = [
        'title', 'body', 'published_at',
    ];

    protected $dates = ['published_at'];

    public function scopePublished($query) {
    	$query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnpublished($query) {
    	$query->where('published_at', '>', Carbon::now());
    }

    public function setPublishedAtAttribute($date) {
    	//$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    	$this->attributes['published_at'] = Carbon::parse($date);
    }

    public function getPublishedAtAttribute($date) {
        return (new Carbon($date))->format('Y-m-d');
    }

    public function user() {
        return $this->belongsTo('\App\Models\User');
    }

    public function tags() {
        return $this->belongsToMany('\App\Models\Tag')->withTimestamps();
    }

    public function getTagListAttribute() {
        return $this->tags->lists('id')->toArray();
    }

    public function getTagList() {
        return array_slice($this->tags->lists('id')->toArray(), 0, -1);
    }
}
