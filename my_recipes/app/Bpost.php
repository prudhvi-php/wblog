<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bpost extends Model
{
    protected $fillable = ['title', 'category', 'description', 'image'];
}
