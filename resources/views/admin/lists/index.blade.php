@extends('admin.common.list',
    [
        'title'       =>  'Справочники',
        'desc'        =>  'Список справочников',
        'model'       =>  'lists',
        'fields'      =>  ['name' => 'Наименование', 'slug' => 'Ссылка', 'created_at' => 'Создан'],
        'data'        =>  $data
    ]
)

@section('listbuttons')

    {{ Form::select('parent_id', array("0" => "Не выбрано") + $parents, $id, ['class'=>'category-select']) }}

@stop


