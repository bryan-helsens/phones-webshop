<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $hidden = [
        "updated_at",
    ];

    public function product(){
        return $this->belongsToMany(Products::class)->withPivot("color", "size", "qty", "price", "total_price");
    }



}
