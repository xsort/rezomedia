@extends('admin.body')
@section('title', 'Справочники')


@section('centerbox')
    <div class="page-header">
        <h1> <a href="{{ URL::to('admin/lists') }}">Справочники</a> <small><i class="ace-icon fa fa-angle-double-right"></i> Справочники, списки и т.п. </small> </h1>
    </div>

    @include('admin.partials.errors')

    @if(!isset($data))
        {{ Form::open(['url' => 'admin/lists', 'class' => 'form-horizontal']) }}
    @else
        {{ Form::open(['url' => 'admin/lists/' . $data->id, 'method' => 'put', 'class' => 'form-horizontal']) }}
    @endif

    <div class="form-actions">
        <div class="row center">
            <div class="col-sm-2">
                <button id="submit_button1" type="submit" class="btn  btn-success btn-block btn-responsive" ><i class="ace-icon fa fa-floppy-o  bigger-120"></i> Сохранить </button>
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
                {{ Form::label('name', 'Заголовок', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name[ru]', (isset($data->name) ? $data->name : old('name')), array('class' => 'col-sm-11 col-xs-12 name_ru')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('name', 'Заголовок RO', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name[ro]', (isset($data->name_ro) ? $data->name_ro : old('name_ro')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
            <!-- <div class="form-group">
                {{ Form::label('name', 'Заголовок англ', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name[en]', (isset($data->name_en) ? $data->name_en : old('name_en')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div> -->

            <div class="form-group">
                {{ Form::label('parent', 'Родитель', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    @if(isset($parents))
                        @if(isset($data->parent_id))
                            {{ Form::select('parent_id', array("0" => "Нет родителя") + $parents, $data->parent_id, ['class'=>'col-sm-11 col-xs-12']) }}
                        @else
                            {{ Form::select('parent_id', array("0" => "Нет родителя") + $parents, '', ['class'=>'col-sm-11 col-xs-12']) }}
                        @endif
                    @endif
                </div>
            </div>
        </div><!-- /.col-sm-6 -->

        <div class="col-sm-6">

            <div class="form-group">
                {{ Form::label('slug', 'URL', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('slug', (isset($data->slug) ? $data->slug : old('slug')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>

            <div class="form-group">
                <label for="mydate" class="col-sm-3 control-label no-padding-right"> Дата:</label>
                <div class="col-sm-5">
                    <div class="input-group">
                        <input type="date" name="date" class="form-control date-picker"
                               data-date-format="yyyy-mm-dd"
                               value="{{ (isset($data->created_at) ? date('Y-m-d', strtotime($data->created_at)) : old('date', Date::now()->format('Y-m-d'))) }}" />
                        <span class="input-group-addon">
                            <i class="fa fa-calendar bigger-110"></i>
                        </span>
                    </div>

                </div>
            </div>
        </div><!-- /.col-sm-6 -->
    </div><!-- /.row -->
<hr>
    <div class="row">
          
    <div class="col-xs-12">
        <div class="col-xs-6 col-xs-offset-6">
            
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="tabbable">
                        <ul id="myTab1" class="nav nav-tabs padding-12 tab-color-blue background-blue">
                            <li class="active">
                                <a href="#short_ru" data-toggle="tab" aria-expanded="true">Русс. яз.</a>
                            </li>

                            <li class="">
                                <a href="#short_ro" data-toggle="tab" aria-expanded="false">Рум. яз.</a>
                            </li>

                            <!-- <li class="">
                                <a href="#short_en" data-toggle="tab" aria-expanded="false">Англ. яз.</a>
                            </li> -->

                            <div class="center"> <span class="label label-xlg label-purple">Текстовое поле</span></div>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane in active" id="short_ru">
                                {{ Form::textarea('description_short[ru]', (isset($data->description_short) ? $data->description_short : old('description_short')), array('style'=>'width:100%', 'rows'=>'3')) }}
                            </div>
                            <div class="tab-pane" id="short_ro">
                                {{ Form::textarea('description_short[ro]', (isset($data->description_short_ro) ? $data->description_short_ro : old('description_short_ro')), array('style'=>'width:100%', 'rows'=>'3')) }}
                            </div>
                            <!-- <div class="tab-pane" id="short_en">
                                {{ Form::textarea('description_short[en]', (isset($data->description_short_en) ? $data->description_short_en : old('description_short_en')), array('style'=>'width:100%', 'rows'=>'3')) }}
                            </div> -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

<hr>
    <div class="tabbable">
        <ul id="myTab4" class="nav nav-tabs padding-12 tab-color-blue background-blue">
           <!--  <li class="active">
                <a href="#ru" data-toggle="tab">Описание</a>
            </li> -->

            <li class="active">
                <a href="#photos" data-toggle="tab">Фото</a>
            </li>

            <li>
                <a href="#meta" data-toggle="tab">META</a>
            </li>

        </ul>


    </div>

    <div class="tab-content">
  <!--       <div class="tab-pane active" id="ru">

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
                        {{ Form::textarea('description[ru]', (isset($data->description) ? $data->description : old('description')), array('class' => 'ckeditor', 'id' => 'description')) }}
                    </div>
                    <div class="tab-pane" id="descRo">
                        {{ Form::textarea('description[ro]', (isset($data->description_ro) ? $data->description_ro : old('description_ro')), array('class' => 'ckeditor', 'id' => 'description_ro')) }}
                    </div>
                    <<div class="tab-pane" id="descEn">
                        {{ Form::textarea('description[en]', (isset($data->description_en) ? $data->description_en : old('description_en')), array('class' => 'ckeditor', 'id' => 'description_en')) }}
                    </div> 

                </div>

            </div>
        </div> -->

        @include('admin.partials.photos', ['table' => 'lists', 'class' => 'active', 'table_id' => isset($data->id) ? $data->id : 0] )

        @include('admin.partials.meta')

    </div>

    <div class="form-actions">
        {{ Form::submit('Сохранить', array('class' => 'btn btn-success')) }}
    </div>

    {{ Form::close() }}
@endsection

@section('scripts')

    @include('admin.partials.ckeditor')

    @include('admin.partials.datepicker')

    @include('admin.partials.slug',['input_name'=>'name[ru]'])

@endsection


