@extends('admin.common.list',
    [
        'title'       =>  'Новости',
        'desc'        =>  'Список новостей сайта',
        'model'       =>  'news',
        'fields'      =>  ['name' => 'Наименование', 'created_at' => 'Создан'],
        'data'        =>  $data
    ]
)
