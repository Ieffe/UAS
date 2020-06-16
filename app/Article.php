<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $incrementing = false;
    protected $table = "articles";

    protected $fillable = ['title','body','tag'];
}
