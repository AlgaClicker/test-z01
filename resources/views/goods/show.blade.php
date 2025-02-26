@php
use App\Models\GoodsCategories;
@endphp

@extends('layout')

@section('content')
    <div class="card" >
        <div class="card-body">
            <h5 class="card-title">Tовар '{{$goods->name}}'</h5>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Наименование</span>
                <span class="form-control"  aria-describedby="basic-addon1">{{$goods->name}}</span>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Цена</span>
                <span class="form-control"  aria-describedby="basic-addon2">{{$goods->price}}</span>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Описание</span>
                <span class="form-control"  aria-describedby="basic-addon3">{{$goods->description}}</span>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon4">Категория</span>
                <span class="form-control"  aria-describedby="basic-addon4">{{GoodsCategories::find($goods->goods_category_id)->name;}}</span>
            </div>


            <a herf="{{ URL::to('goods/')}}"  role="button" class="btn btn-success"> назад </a>
        </div>
    </div>
    @include('error')
@endsection    