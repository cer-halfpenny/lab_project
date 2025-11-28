<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    //

    public function axolotl()
    {
        return $this->belongsTo(\App\Models\Axolotl::class);
    }
}
