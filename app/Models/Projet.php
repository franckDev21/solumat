<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'online',
        'image',
        'duree'
    ];

    public function scopeFilter($query,$filters){
        if($filters['search'] ?? false){
            $query
                ->where('name','like','%'.strtolower($filters['search']).'%');
        }
    }

}
