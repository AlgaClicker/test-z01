<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'orders';


    public function getGoods() {
        return Goods::find($this->goods_id);
    }

    public function sum() {
        return $this->amount * $this->getGoods()->price;
    }
    
}
