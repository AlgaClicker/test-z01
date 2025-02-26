<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodsCategories extends Model
{
    use HasFactory;
    protected $table = 'goods_categories';
    
    public function goods()
    {
        return $this->hasMany(Goods::class);
    }
}

