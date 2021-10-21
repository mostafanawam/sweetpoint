<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    public function scopeSearch($query,$val){
        return $query
        ->where('prod_id','like','%'.$val.'%')
        ->orwhere('name','like','%'.$val.'%')
        ->orwhere('description','like','%'.$val.'%')
        ->orwhere('price','like','%'.$val.'%')
        ->orwhere('rank','like','%'.$val.'%')
        ->orwhere('cat_name','like','%'.$val.'%')
        ->orwhere('quantity','like','%'.$val.'%')
        ;
    }
}
