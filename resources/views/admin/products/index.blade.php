@extends('admin.common.list',
    [
        'title'       =>  'Товары ',
        'desc'        =>  '',
        'model'       =>  'products',
        'fields'      =>  ['name' => 'Наименование', 'created_at' => 'Создан'],
        'data'        =>  $data
    ]
)
