<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function oderdetails()
    {
        return $this->belongsToMany(\App\Oderdetail::class);
    }
}
