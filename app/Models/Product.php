<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'in_stock',
        'price',
        'description',
        'online',
        'image',
        'quantite'
    ];

    public function scopeFilter($query,$filters){
        if($filters['search'] ?? false){
            $query
                ->where('name','like','%'.strtolower($filters['search']).'%');
        }
    }

}
