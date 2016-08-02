@extends('admin.body')
@section('title', 'Категория')


@section('centerbox')
    <div class="page-header">
        <h1> <a href="{{ URL::to('admin/categories') }}">Категории</a> <small><i class="ace-icon fa fa-angle-double-right"></i> Редактирование категории </small> </h1>
    </div>
    


    

    @include('admin.partials.errors')

    @if(!isset($data))
    {{ Form::open(['url' => 'admin/categories', 'class' => 'form-horizontal']) }}
    @else
    {{ Form::open(['url' => 'admin/categories/' . $data->id, 'method' => 'put', 'class' => 'form-horizontal']) }}
    @endif
    
    <div class="form-actions">
        <div class="row center">
            <div class="col-sm-2">
                <button id="submit_button1" type="submit" class="btn  btn-success btn-block btn-responsive" ><i class="ace-icon fa fa-floppy-o  bigger-120"></i> Сохранить </button>
            </div>
            <!--
            <div class="col-sm-2">
                <button id="submit_button1" type="submit" class="btn  btn-yellow btn-block btn-responsive" ><i class="ace-icon fa fa-floppy-o  bigger-120"></i> Сохранить и закрыть</button>
            </div>-->
            <div class="col-sm-2 ">
                <label>
                	{{ Form::checkbox('top',  1, (isset($data) && $data->top == 1 ? true : false), ['class' => 'ace']) }}
                    <span class="lbl"> На главную </span>
                </label>
            </div>
            <div class="col-sm-4">
                <div class="profile-contact-info">
                    <div class="profile-links align-left">
                        
                        @if (isset($data))
                        <div class="btn btn-link">
                            <i class="ace-icon fa fa- bigger-120 green"></i>
                            ID: {{ $data->id }}
                        </div>
                        
                        <div class="btn btn-link">
                            <i class="ace-icon fa fa-calendar bigger-120 green"></i>
                             Изменен: {{ $data->updated_at }}
                        </div>
                        @endif
                    </div>
                </div>
            </div>

        </div><!-- /.row -->
    </div><!-- /.form-actions -->

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                {{ Form::label('name[ru]', 'Заголовок', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name[ru]', (isset($data->name) ? $data->name : old('name')), array('class' => 'col-sm-11 col-xs-12 name_ru')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('name[ro]', 'Заголовок рум', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name[ro]', (isset($data->name_ro) ? $data->name_ro : old('name_ro')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('name[en]', 'Заголовок англ', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name[en]', (isset($data->name_en) ? $data->name_en : old('name_en')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
            
            
				
			
            
        </div><!-- /.col-sm-6 -->

        <div class="col-sm-6">
            <div class="form-group">
                <label for="mydate" class="col-sm-3 control-label no-padding-right"> Дата:</label>
                <div class="col-sm-5">
                    <div class="input-group">
                        <input type="date" name="date" id="mydate" class="form-control date-picker"
                               data-date-format="yyyy-mm-dd"
                               value="{{ (isset($data->created_at) ? date('Y-m-d', strtotime($data->created_at)) : old('date', Date::now()->format('Y-m-d'))) }}" />
                        <span class="input-group-addon">
                            <i class="fa fa-calendar bigger-110"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('slug', 'URL', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('slug', (isset($data->slug) ? $data->slug : old('slug')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
            
            <div class="form-group">
                {{ Form::label('parent', 'родитель', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                
                <div class="col-sm-9">
                    @if(isset($parents))
                    {{ Form::select('parent[]', array("null" => "Нет родителя") + $categories, $parents, ['multiple'=>'multiple','id'=>'chosencat','class'=>'tag-input-style col-sm-11 control-label no-padding-right']) }}
	                @else
	                {{ Form::select('parent[]', $categories, '', ['multiple'=>'multiple','id'=>'chosencat','class'=>'tag-input-style col-sm-11 control-label no-padding-right']) }}
	                @endif
                </div>
            </div>
        </div><!-- /.col-sm-6 -->
    </div><!-- /.row -->
    <hr>
    <div class="space"></div>
    <div class="tabbable">
        <ul id="myTab4" class="nav nav-tabs padding-12 tab-color-blue background-blue">
            <li class="active">
                <a href="#ru" data-toggle="tab">Описание</a>
            </li>
            <li>
                <a href="#photos" data-toggle="tab">Фото</a>
            </li>
            <li>
                <a href="#meta" data-toggle="tab">META</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="ru">

                <div class="tabbable  tabs-left">

                 <ul id="myTab" class="nav nav-tabs">
                   <li class="active">
                      <a href="#descRu" data-toggle="tab">Описание на русском</a>
                   </li>
                   <li>
                      <a href="#descRo" data-toggle="tab">Описание на румынском</a>
                   </li>
                   <li>
                      <a href="#descEn" data-toggle="tab">Описание на английском</a>
                   </li>
                 </ul>

                 <div class="tab-content">
                   <div class="tab-pane in active" id="descRu">
                     {{ Form::textarea('description[ru]', (isset($data->description) ? $data->description : old('description')), array('class' => 'ckeditor', 'id' => 'editor')) }}
                   </div>
                   <div class="tab-pane" id="descRo">
                     {{ Form::textarea('description[ro]', (isset($data->description_ro) ? $data->description_ro : old('description_ro')), array('class' => 'ckeditor', 'id' => 'editor')) }}
                   </div>
                   <div class="tab-pane" id="descEn">
                     {{ Form::textarea('description[en]', (isset($data->description_en) ? $data->description_en : old('description_en')), array('class' => 'ckeditor', 'id' => 'editor')) }}
                   </div>

                 </div>

                </div>
             </div>

            @include('admin.partials.meta')
            @include('admin.partials.photos', ['table' => 'categories', 'table_id' => isset($data->id) ? $data->id : 0])
        </div>

</div>

<div class="form-actions">
{{ Form::submit('Сохранить', array('class' => 'btn btn-success')) }}
</div>

{{ Form::close() }}
@endsection

@section('styles')
{!! HTML::style('ace/assets/css/datepicker.css') !!}
{!! HTML::style('ace/assets/css/chosen.css') !!}
@endsection

@section('scripts')

@include('admin.partials.ckeditor')

@include('admin.partials.slug',['input_name'=>'name[ru]'])

@include('admin.partials.datepicker')

<script>
if($(window).width() < 640){
    $('.tabbable').removeClass('tabs-left');
}
</script>


{!! HTML::script('ace/assets/js/chosen.jquery.min.js') !!}
<script>
$("#chosencat").chosen();
</script>



@endsection