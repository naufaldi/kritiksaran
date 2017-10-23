<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statuslikes extends Model
{
    public $timestamps = true;
    protected $table = 'user_status_likes';
    protected $guarded = ['id'];

    protected $fillable = [

    	'user_id','article_id'


    ];


    public function status()
    {
    	return $this->hasOne('App\Article','article_id','like_id');
    }
}
