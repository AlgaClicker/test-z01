<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    use HasFactory;
    protected $table = 'goods';

    function categoryName()  
    {
        return GoodsCategories::find($this->goods_category_id)->name;
    }
    



}
