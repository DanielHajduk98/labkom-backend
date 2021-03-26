<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function measurements() {
        return $this->hasMany(Measurement::class);
    }
}