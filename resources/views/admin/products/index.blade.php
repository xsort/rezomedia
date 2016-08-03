@extends('admin.common.list',
    [
        'title'       =>  'Товары ',
        'desc'        =>  'Список продуктов',
        'model'       =>  'products',
        'fields'      =>  ['name' => 'Наименование', 'created_at' => 'Создан'],
        'data'        =>  $data
    ]
)
