<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HowWork extends Model
{
    use SoftDeletes;

    protected $table = 'how_works';

    protected $fillable = ['name', 'body'];

}
