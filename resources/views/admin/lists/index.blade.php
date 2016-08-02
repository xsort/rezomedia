@extends('admin.common.list',
    [
        'title'       =>  'Справочники',
        'desc'        =>  'Список справочников',
        'model'       =>  'lists',
        'fields'      =>  ['name' => 'Наименование', 'slug' => 'Ссылка', 'created_at' => 'Создан'],
        'data'        =>  $data
    ]
)
