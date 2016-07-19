@extends('admin.common.list',
    [
        'title'       =>  'Контент',
        'desc'        =>  'Список страниц сайта',
        'model'       =>  'content',
        'fields'      =>  ['name' => 'Наименование', 'slug' => 'Ссылка', 'created_at' => 'Создан'],
        'data'        =>  $data
    ]
)
