<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function color() {
        return $this->belongsTo(Color::class);
    }

    public function status() {
        return $this->belongsTo(Status::class);
    }

    public function year() {
        return $this->belongsTo(Year::class);
    }
}
