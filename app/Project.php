<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'titel', 'year', 'url', 'smalldescr', 'descr', 'company', 'technologies'
    ];
}
