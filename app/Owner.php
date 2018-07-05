<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $guarded= ['id'];

    public function patients() {
        return $this->hasMany(Patient::class);
    }
}
