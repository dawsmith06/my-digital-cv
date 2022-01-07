<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Me extends Model
{
    protected $table = "me";
    protected $appends = ["full_name"];

    public function getFullNameAttribute()
    {
        return $this->names . " " . $this->last_names;
    }
}