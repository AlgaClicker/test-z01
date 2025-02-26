@extends('layout')

@section('content')
    <div class="card" >
        <div class="card-body">
            <h5 class="card-title">Добавление товара</h5>
            
            <form action="{{ URL::to('/goods/'.$goods->id.'/edit') }}" method="POST"> 
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Наименование</span>
                <input type="text" name="name" value="{{$goods->name}}" class="form-control @error('title') is-invalid @enderror" placeholder="наименование товара" aria-label="наименование товара" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Цена</span>
                <input type="text" name="price" value="{{$goods->price}}" class="form-control @error('title') is-invalid @enderror" placeholder="цена" aria-label="цена" aria-describedby="basic-addon3">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Описание</span>
                <input type="text" name="description" value="{{$goods->description}}" class="form-control @error('title') is-invalid @enderror" placeholder="описание товара" aria-label="описание товара" aria-describedby="basic-addon3">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Категория</span>
                <!-- GoodsCategories -->
                <select name="category_id" id="category_id" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $goods->goods_category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>


            <input type="hidden" name="id" value="{{$goods->id}}" />
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <button type="submit" class="btn btn-danger">Сохранить</button>
            <a type="submit" class="btn mx-5 btn-info">Отменить</a>
            </form>
            
        </div>
    </div>
    @include('error')
@endsection    