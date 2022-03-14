<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oders extends Model
{
    protected $fillable = ['user_id', 'size', 'delivery_address', 'total'];
    public function user( )
    {
        return $this->belongsTo(\App\User::class);
    }
    public function oderdetail()
    {
        return $this->hasOne(\App\Oderdetail::class);
    }
}
