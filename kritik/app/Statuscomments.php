<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Statuscomments extends Model
{
    public $timestamps = true;
    protected $table = 'status_comments';
    protected $guarded = ['id'];

    protected $fillable = [

    	'comment_text','user_id','article_id'


    ];


    public function status()
    {
    	return $this->hasOne(Article::class);
    }
}
