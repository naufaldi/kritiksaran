<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
class Article extends Model
{
    use SoftDeletes;
    protected $fillable = [

    	'user_id','content','live','post_on'


    ];

    protected $dates = ['deleted_at'];
    protected $primaryKey = 'article_id';

    public $timestamps = true;
    protected $table = 'articles';
    // protected $guarded = ['article_id'];

    public function comments()
    {
        return $this->hasMany(Statuscomments::class);
    }

    public function setLiveAttribute($value)
    {
    	$this->attributes['live'] = (boolean) ($value);
    }

    public function getShortContentAttribute()
    {
    	 return substr($this->content,0,random_int(60,150)).'...';
    }

    // public function setPostOnAttribute($value)
    // {
    //     $this->attributes['post_on'] = Carbon::parse($value);
    // }
}

