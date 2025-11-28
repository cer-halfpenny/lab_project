<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Axolotl extends Model
{
    //

    public function stories()
    {
        return $this->hasMany(\App\Models\Story::class);
    }

}
