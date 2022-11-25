<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'description',
        'price',
        'quantity',
        'is_active',
    ];

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    public function primaryImage()
    {
        return $this->hasOne(ProductImage::class, 'product_id', 'id')->where('status',ProductImage::STATUS['PRIMARY']);
    }

    public function allActive()
    {
        return $this->where('is_active', 1)->get();
    }

    public function allActiveLimit()
    {
        return $this->where('is_active', 1)->limit(5)->get();
    }

    public function filter($data)
    {
        $products = $this->where('is_active',1);

        if (isset($data['category_id']) && $data['category_id'] !=0){
            $products = $products->where('category_id',$data['category_id']);
        }

        if (isset($data['min_price']) && $data['min_price'] > 0){
            $products = $products->where('price', '>=' , $data['min_price']);
        }

        if (isset($data['max_price']) && $data['max_price'] > 0){
            $products = $products->where('price', '<=' , $data['max_price']);
        }

        if (isset($data['search']) && $data['search'] !=0){
            $products = $products->where('name', 'Like ', '%' , $data['search']. '%');
        }

        return $products->pagination(4);
    }
}
