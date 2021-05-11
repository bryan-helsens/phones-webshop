<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected $hidden = [
        "pivot",
        "product_id",
        "id",
        "created_at",
        "updated_at",
    ];

    protected $fillable = [
        'image'
    ];

    public function product(){
        return $this->belongsTo(Products::class);
    }
}
