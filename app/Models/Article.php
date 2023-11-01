<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;  

class Article extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'articles';
    protected $fillable = [
        'name', 'detail'
    ];
}
