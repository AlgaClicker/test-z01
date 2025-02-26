@extends('layout')

@section('content')

    <div class="card" >
        <div class="card-body">
            <h5 class="card-title">Новый заказ</h5>
            
            <form action="{{ URL::to('/order/new') }}" method="POST"> 
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">ФИО покупателя</span>
                <input type="text" name="name" class="form-control @error('title') is-invalid @enderror" placeholder="введите данные покупателя" aria-label="введите данные покупателя" aria-describedby="basic-addon1">
            </div>

            <div class="input-group date mb-3">
                <span class="input-group-text" id="basic-addon1">Дата заказа</span>
                <input type="text" id="datepicker" name="order_at" class="datepicker form-control" placeholder="Выберите дату">
            </div>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Колличество</span>
                <input type="text" name="amount" value="1" class="form-control @error('title') is-invalid @enderror" placeholder="введите колличество товара" aria-label="введите колличество товара" aria-describedby="basic-addon3">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon-st">Статус</span>
                <input type="text" name="status" readonly value="Новый" class="form-control @error('title') is-invalid @enderror" placeholder="описание товара" aria-label="описание товара" aria-describedby="basic-addon-st">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Товар</span>
                <!-- GoodsCategories -->
                <select name="goods_id" id="goods_id" class="form-control">
                    @foreach($goods as $good)
                        <option value="{{ $good->id }}" >
                            {{ $good->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Комментарий покупателя</span>
                <input type="text" name="description" class="form-control @error('title') is-invalid @enderror" placeholder="описание товара" aria-label="описание товара" aria-describedby="basic-addon3">
            </div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
            
        </div>
    </div>
    
    @include('error')
    <script>
        

    </script>
@endsection    