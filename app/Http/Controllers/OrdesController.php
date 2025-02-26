<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Goods;
use App\Models\Orders;
use Itstructure\GridView\DataProviders\EloquentDataProvider;
use App\Models\GoodsCategories;


class OrdesController extends Controller
{
    //

    public function index(): View
    {
        $dataProvider = new EloquentDataProvider(Orders::query());
        return view('orders.index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function createCard(): View 
    {
        $goods = Goods::orderBy('name', 'asc')->get();

        return view('orders.new',['goods'=>$goods]);
    }

    public function createWrite(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:goods|max:255',
            'amount' => 'required|numeric|min:0',
            'order_at' => 'required|date',
            'description' => 'nullable|string|min:1',
            'goods_id' =>'required|exists:goods,id'
        ]);

        $order = new Orders();

        $order->name = $request->name;
        $order->status = $request->status;
        $order->amount = $request->amount;
        $order->order_at = $request->order_at;
        $order->description = $request->description;

        $order->goods_id = $request->goods_id;
        $order->save();

        return redirect('/orders');
    }

    public function showCard($id): View
    {
        $order = Orders::find($id);
        return view('orders.show', [
            'order' => $order
        ]);
        
    }

    //showCard
}
