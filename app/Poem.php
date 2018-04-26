<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poem extends Model
{
    Protected $fillable = ['title', 'body'];
}
