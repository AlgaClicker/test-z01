@extends('layout')

@section('content')
    <div class="card" >
        <div class="card-body">
            <h5 class="card-title">Добавление товара</h5>
            
            <form action="{{ URL::to('/googs/new') }}" method="POST"> 
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Наименование</span>
                <input type="text" name="name" class="form-control @error('title') is-invalid @enderror" placeholder="наименование товара" aria-label="наименование товара" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Цена</span>
                <input type="text" name="price" class="form-control @error('title') is-invalid @enderror" placeholder="цена" aria-label="цена" aria-describedby="basic-addon3">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Описание</span>
                <input type="text" name="description" class="form-control @error('title') is-invalid @enderror" placeholder="описание товара" aria-label="описание товара" aria-describedby="basic-addon3">
            </div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
            
        </div>
    </div>
    @include('error')
@endsection    