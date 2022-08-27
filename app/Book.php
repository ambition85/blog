<?php

namespace App;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

// use Illuminate\Database\Eloquent\Model;

class Book extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'books';

    protected $fillable =[
        'name', 'detail'
    ];
}
