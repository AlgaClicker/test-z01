<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Goods;
use Itstructure\GridView\DataProviders\EloquentDataProvider;
use App\Models\GoodsCategories;
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
        $categories = GoodsCategories::orderBy('name', 'asc')->get();
        return view('goods.new',['categories'=>$categories]);
    }

    public function createWrite(Request $request) 
    {
        $validated = $request->validate([
            'name' => 'required|unique:goods|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string|min:1',
            'category_id' =>'required|exists:goods_categories,id'
        ]);
        
        $goods = new Goods();
        $goods->name = $request->name;
        $goods->price = $request->price;
        $request->description ?  $goods->description = $request->description : "";
        $goods->goods_category_id = $request->category_id;
        $goods->save();

        return redirect('/goods');
    }

    public function  showCard($id): View 
    {
        $goods = Goods::find($id);
        return view('goods.show',['goods'=>$goods]);
    }

    public function  editCard($id): View 
    {
        $categories = GoodsCategories::orderBy('name', 'asc')->get();
        $goods = Goods::find($id);
        return view('goods.edit',['goods'=>$goods,'categories'=>$categories]);
    }
    
    public function editWrite($id,Request $request) {
        
        $validated = $request->validate([
            'id' =>'required|exists:goods,id',
            'name' => 'required|string|min:1|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string|min:1',
            'category_id' =>'required|exists:goods_categories,id'
        ]);

        $goods = Goods::find($id);
        $goods->name = $request->name;
        $goods->price = $request->price;
        $request->description ?  $goods->description = $request->description : "";
        $goods->goods_category_id = $request->category_id;
        $goods->save();
        return redirect('/goods');
    }
    
    public function deleteGoods($id) {
        $goods = Goods::find($id);
        $goods->delete();
        return redirect('/goods');

    }
}
