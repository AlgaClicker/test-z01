@extends('layout')

@section('content')
    <div class="card" >
        <div class="card-body">
            <h5 class="card-title">Добавление категории</h5>
            
            <form action="{{ URL::to('/categories/new') }}" method="POST"> 
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Наименование</span>
                <input type="text" name="name" class="form-control @error('title') is-invalid @enderror" placeholder="Новая категория" aria-label="Новая категория" aria-describedby="basic-addon1">
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
            
        </div>
    </div>
    @include('error')
@endsection    