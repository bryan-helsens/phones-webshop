<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'description',
        'stock',
        'category',
        'brand',
        'image',
        'price',
    ];

    protected $hidden = [
        "created_at",
        "updated_at",
    ];

    public function phoneInformation()
    {
        return $this->hasOne(phoneInformation::class);
    }

    public function color(){
        return $this->belongsToMany(Color::class);
    }

    public function images(){
        return $this->hasMany(Images::class);
    }

    public function orders(){
        return $this->belongsToMany(Orders::class);
    }

}

