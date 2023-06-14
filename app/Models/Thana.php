<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thana extends Model
{
    use HasFactory;
    public function upazila()
    {
        return $this->belongsTo(Upazila::class);
    }

    public function unions()
    {
        return $this->hasMany(Union::class);
    }
}
