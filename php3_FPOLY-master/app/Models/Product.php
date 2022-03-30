<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'name',
        'cate_id',
        'image',
        'price',
        'quantity',
        'sale',
        'status',
        'description'
    ];
    //quan hệ n-1 từ bảng con đến bảng cha
    public function category(){
        return $this->belongsTo(Category::class, 'cate_id');
    }
}
