
@php
use Carbon\Carbon;
@endphp
@extends('layout')

@section('content')
    <div class="card" >
        <div class="card-body">
            <h5 class="card-title">Заказ для '{{$order->name}}' от {{Carbon::parse($order->order_at)->format('d.m.Y')}}</h5>
            
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">ФИО Покупателя</span>
                <span class="form-control"  aria-describedby="basic-addon1">{{$order->name}}</span>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Дата заказа</span>
                <span class="form-control"  aria-describedby="basic-addon2">{{Carbon::parse($order->order_at)->format('d.m.Y')}}</span>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Дата создания</span>
                <span class="form-control"  aria-describedby="basic-addon3">{{Carbon::parse($order->created_at)->format('d.m.Y')}}</span>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon_sum">Товар</span>
                <span class="form-control"  aria-describedby="basic-addon_sum">{{$order->getGoods()->name}} ({{$order->getGoods()->categoryName()}}) | цена: {{$order->getGoods()->price}}</span>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon-amount">Колличество товара</span>
                <span class="form-control"  aria-describedby="basic-addon-amount">{{$order->amount}}</span>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon_sum">Сумма заказа</span>
                <span class="form-control"  aria-describedby="basic-addon_sum">{{$order->sum()}}</span>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">Коментарий покупателя</span>
                <span class="form-control"  aria-describedby="basic-addon3">{{$order->description}}</span>
            </div>


            <a herf="{{ URL::to('orders/')}}"  role="button" class="btn btn-success"> назад </a>
        </div>
    </div>
    @include('error')
@endsection    