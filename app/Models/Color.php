<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $hidden = [
        "pivot",
        "id",
        "created_at",
        "updated_at",
    ];

    protected $fillable = [
        'color'
    ];

    public function product(){
        return $this->belongsToMany(Products::class);
    }
}
