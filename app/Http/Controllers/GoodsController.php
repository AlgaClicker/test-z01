<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Goods;
use Itstructure\GridView\DataProviders\EloquentDataProvider;

class GoodsController extends Controller
{
    //
    public function index(): View
    {
        $dataProvider = new EloquentDataProvider(Goods::query());
        return view('goods.index', [
            'dataProvider' => $dataProvider
        ]);
    }
 
    public function createCard(): View 
    {
        return view('goods.new');
    }
}
