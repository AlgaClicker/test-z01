@php
use App\Models\GoodsCategories;
@endphp

@extends('layout')

@section('content')
{!! grid_view([
    'title' => 'Товары', 
    'dataProvider' => $dataProvider,
    
    'useFilters' => false,
    'columnFields' => [
        [
            'label' => 'Идентификатор', // Column label.
            'attribute' => 'id', // Attribute, by which the row column data will be taken from a model.
        ],
        [
            'label' => 'Наименование', // Column label.
            'attribute' => 'name', // Attribute, by which the row column data will be taken from a model.
            'htmlAttributes' => [
                'width' => 'auto' // Width of table column.
            ]
        ],
        [
            'label' => 'Цена', // Column label.
            'attribute' => 'price', // Attribute, by which the row column data will be taken from a model.
            'htmlAttributes' => [
                'width' => 'auto' // Width of table column.
            ]
        ],
        [
            'label' => 'Категория', // Column label.
            'attribute' => 'goods_category_id', // Attribute, by which the row column data will be taken from a model.
            'value' => function ($row) {
                //return $row->goods_category_id;
                return GoodsCategories::find($row->goods_category_id)->name;
            },
            'htmlAttributes' => [
                'width' => 'auto' // Width of table column.
            ]
        ],

        [ // Set Action Buttons.
            'label' => 'Действия',
            'class' => Itstructure\GridView\Columns\ActionColumn::class, // REQUIRED.
            'actionTypes' => [ // REQUIRED.
                [
                    'class' => Itstructure\GridView\Actions\View::class,
                    'url' => function ($data) {
                        return 'goods/' . $data->id . '/show';
                    },
                    'htmlAttributes' => [
                        'style' => 'color: yellow; font-size: 10px;',
                    ],
                ],
                [
                    
                    'class' => Itstructure\GridView\Actions\Edit::class,
                    'url' => function ($data) {
                        return '/goods/' . $data->id . '/edit';
                    },
                    'htmlAttributes' => [
                        'style' => 'font-size: 10px;',
                    ],
                ],  
                [
                    'class' => Itstructure\GridView\Actions\Delete::class, // REQUIRED
                    'url' => function ($data) {
                        return '/goods/' . $data->id . '/delete';
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
    ]
]) !!}



@endsection