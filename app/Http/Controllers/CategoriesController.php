<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Models\GoodsCategories;
use Itstructure\GridView\DataProviders\EloquentDataProvider;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //

    public function index(): View
    {
        $dataProvider = new EloquentDataProvider(GoodsCategories::query());
        return view('categories.index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function createCard(): View 
    {
        return view('categories.new');
    }

    public function createWrite(Request $request) 
    {
        $validated = $request->validate([
            'name' => 'required|unique:goods_categories|max:255',
            
        ]);
        
        $category = new GoodsCategories;
        $category->name = $request->name;
        $category->save();

        return redirect('/categories');
    }
}
