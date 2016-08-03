@extends('admin.common.list',
    [
        'title'       =>  'Категории ',
        'desc'        =>  'Список категорий',
        'model'       =>  'categories',
        'fields'      =>  ['name' => 'Наименование'],
        'data'        =>  $data
    ]
)
