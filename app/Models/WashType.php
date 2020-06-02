<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WashType extends Model
{
    protected $guarded = [];
    public function turno()
    {
        return $this->hasMany(Turno::class);
    }
}
