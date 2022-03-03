<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oderdetail extends Model
{
    public function products()
    {
        return $this->belongsToMany(\App\Product::class)->withTimestamps();
    }
    public function oder()
    {
        return $this->belongsTo(\App\Oder::class);
    }
}
