@php
use Carbon\Carbon;
@endphp

@extends('layout')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Категории</li>
        </ol>
    </nav>



{!! grid_view([
    'title' => 'Заказы', 
    'dataProvider' => $dataProvider,
    
    'useFilters' => false,
    'columnFields' => [
        [
            'label' => 'Идентификатор', // Column label.
            'attribute' => 'id', // Attribute, by which the row column data will be taken from a model.
        ],
        [
            'label' => 'ФИО Покупателя', // Column label.
            'attribute' => 'name', // Attribute, by which the row column data will be taken from a model.

            'htmlAttributes' => [
                'width' => 'auto' // Width of table column.
            ]
        ],
        [
            'label' => 'Дата заказа', // Column label.
            'attribute' => 'order_at', // Attribute, by which the row column data will be taken from a model.
            'value' => function ($model) {
                return Carbon::parse($model->order_at)->format('d.m.Y');
            },
            'htmlAttributes' => [
                'width' => 'auto' // Width of table column.
            ]
        ],
        [
            'label' => 'Дата создания', // Column label.
            'attribute' => 'created_at', // Attribute, by which the row column data will be taken from a model.
            'value' => function ($model) {
                return Carbon::parse($model->created_at)->format('d.m.Y');
            },
            'htmlAttributes' => [
                'width' => 'auto' // Width of table column.
            ]
        ],

        [
            'label' => 'Статус', // Column label.
            'attribute' => 'status', // Attribute, by which the row column data will be taken from a model.
            'htmlAttributes' => [
                'width' => 'auto' // Width of table column.
            ]
        ],
        [
            'label' => 'Сумма заказа', // Column label.
            'attribute' => 'name', // Attribute, by which the row column data will be taken from a model.
            'value' => function ($model) {
                return $model->sum();
            },
            'htmlAttributes' => [
                'width' => 'auto' // Width of table column.
            ]
        ],
        [
            'label' => 'Действия',
            'class' => Itstructure\GridView\Columns\ActionColumn::class, // REQUIRED.
            'actionTypes' => [
                [
                    'class' => Itstructure\GridView\Actions\View::class,
                    'url' => function ($data) {
                        return '/order/' . $data->id . '/show';
                    },
                    'htmlAttributes' => [
                        'style' => 'color: yellow; font-size: 10px;',
                    ],
                ],               
            ]

        ],
        /*
        [ // Set Action Buttons.
            'label' => 'Действия',
            'class' => Itstructure\GridView\Columns\ActionColumn::class, // REQUIRED.
            'actionTypes' => [ // REQUIRED.
                [
                    'class' => Itstructure\GridView\Actions\View::class,
                    'url' => function ($data) {
                        return '/admin/pages/' . $data->id . '/show';
                    },
                    'htmlAttributes' => [
                        'style' => 'color: yellow; font-size: 10px;',
                    ],
                ],
                [
                    
                    'class' => Itstructure\GridView\Actions\Edit::class,
                    'url' => function ($data) {
                        return '/admin/pages/' . $data->id . '/edit';
                    },
                    'htmlAttributes' => [
                        'style' => 'font-size: 10px;',
                    ],
                ],  
                [
                    'class' => Itstructure\GridView\Actions\Delete::class, // REQUIRED
                    'url' => function ($data) {
                        //return '/admin/pages/' . $data->id . '/delete';
                    },
                    'htmlAttributes' => [
                        //'target' => '_blank',
                        'style' => 'color: yellow; font-size: 10px;',
                        'onclick' => 'return window.confirm("Sure to delete?");',
                        'width' => '100'
                    ]
                ]
            ],
            'htmlAttributes' => [
                'width' => '200rem' // Width of table column.
            ]
        ], 
        */       
    ]
]) !!}



@endsection