<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'p_id';
      public $timestamps = false;

    use HasFactory;
      protected $fillable = ['p_name',
        'p_category_id',
        'p_short_description',
        'p_long_description',
        'p_price',
        'p_old_price',
        'p_visibility_status',
        'p_stock',
        'p_type',
        'p_created_at',
        'p_updated_at',];




     public function colors()
    {
        return $this->hasMany(Color::class, 'color_product_id', 'p_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'p_category_id','c_id');
    }

}




