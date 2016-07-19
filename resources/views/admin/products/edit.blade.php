@extends('admin.body')
@section('title', 'Объекты')


@section('centerbox')
    <div class="page-header">
        <h1> <a href="{{ URL::to('admin/products') }}">Объекты</a> <small><i class="ace-icon fa fa-angle-double-right"></i> Клубы, салоны, фотографы и пр. </small> </h1>
    </div>

    @include('admin.partials.errors')

    @if(!isset($data))
    {{ Form::open(['url' => 'admin/products', 'class' => 'form-horizontal']) }}
    @else
    {{ Form::open(['url' => 'admin/products/' . $data->id, 'method' => 'put', 'class' => 'form-horizontal']) }}
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
                {{ Form::label('name', 'Заголовок', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name[ru]', (isset($data->name) ? $data->name : old('name')), array('class' => 'col-sm-11 col-xs-12 name_ru')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('name', 'Заголовок рум', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name[ro]', (isset($data->name_ro) ? $data->name_ro : old('name_ro')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('name', 'Заголовок англ', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                    {{ Form::text('name[en]', (isset($data->name_en) ? $data->name_en : old('name_en')), array('class' => 'col-sm-11 col-xs-12')) }}
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
                    {{ Form::label('map', 'Координаты:', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                    <div class="col-sm-9">
                        <input type="text" class="col-sm-5" placeholder="X">
                        <input type="text" class="col-sm-5 col-sm-offset-1" placeholder="Y">
                    </div>
            </div>
            
        </div><!-- /.col-sm-6 -->
        
    </div><!-- /.row -->

    <hr>

   <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                {{ Form::label('parent', 'родитель', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                
                <div class="col-sm-9">
                    @if(isset($categories))
                    @if(isset($parents))
                    
                    {{ Form::select('parent[]', array("null" => "Нет родителя") + $categories, $parents, ['multiple'=>'multiple','id'=>'chosencat','class'=>'tag-input-style col-sm-11 control-label no-padding-right']) }}
                    @else
                    {{ Form::select('parent[]', $categories, '', ['multiple'=>'multiple','id'=>'chosencat','class'=>'tag-input-style col-sm-11 control-label no-padding-right']) }}
                    @endif
                    @endif

                </div>
            </div>
        </div><!-- /.col-sm-6 -->

        <div class="col-sm-6">
            <div class="form-group">
                {{ Form::label('video', 'Видео', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                <div class="col-sm-9">
                     {{ Form::text('video', (isset($data->video) ? $data->slug : old('video')), array('class' => 'col-sm-11 col-xs-12')) }}
                </div>
            </div>
        </div><!-- /.col-sm-6 -->
    </div><!-- row -->

    <hr>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="tabbable">
                        <ul id="myTab1" class="nav nav-tabs padding-12 tab-color-blue background-blue">
                            <li class="active">
                                <a href="#photos"  data-toggle="tab">Лого</a>
                            </li>
                            <!-- <li>
                                <a href="#img-slide"  data-toggle="tab">Слайдшоу</a>
                            </li> -->
                           

                            <div class="center"> <span class="label label-xlg label-purple">Логотип заведения / Слайдшоу</span></div>
                        </ul>
                    
                        <div class="tab-content">
                            @include('admin.partials.photos', ['table' => 'products', 'class' => 'active', 'table_id' => isset($data->id) ? $data->id : 0] )
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
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

                            <li class="">
                                <a href="#short_en" data-toggle="tab" aria-expanded="false">Англ. яз.</a>
                            </li>

                            <div class="center"> <span class="label label-xlg label-purple">Краткое описание</span></div>
                        </ul>
                    
                        <div class="tab-content">
                            <div class="tab-pane in active" id="short_ru">
                             {{ Form::textarea('description_short[ru]', (isset($data->description_short) ? $data->description_short : old('description_short')), array('style'=>'width:100%', 'rows'=>'3')) }}
                           </div>
                           <div class="tab-pane" id="short_ro">
                             {{ Form::textarea('description_short[ro]', (isset($data->description_short_ro) ? $data->description_short_ro : old('description_short_ro')), array('style'=>'width:100%', 'rows'=>'3')) }}
                           </div>
                           <div class="tab-pane" id="short_en">
                             {{ Form::textarea('description_short[en]', (isset($data->description_short_en) ? $data->description_short_en : old('description_short_en')), array('style'=>'width:100%', 'rows'=>'3')) }}
                           </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
<hr>
    <div class="space"></div>
    <div class="tabbable">
        <ul id="myTab4" class="nav nav-tabs padding-12 tab-color-blue background-blue">
            <li class="active">
                <a href="#ru" data-toggle="tab">Описание</a>
            </li>

            <li>
                <a href="#plan" data-toggle="tab">План зала</a>
            </li>
            <li>
                <a href="#photo-galleries" data-toggle="tab">Фотоотчет</a>
            </li>
            <li>
                <a href="#videor" data-toggle="tab">Видеоотчет</a>
            </li>
            
            <li>
                <a href="#meta" data-toggle="tab">META</a>
            </li>
        </ul>

       
    </div>

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

            <div class="tab-pane" id="photo-galleries">
                 <a href="javascript:AddPhotoGallery();" id="uploadifive-undefined" class="uploadifive-button btn btn-yellow">Добавить галлерею</a>
            </div>


            @include('admin.partials.photos', ['table' => 'hall_plan', 'div_id' => 'plan', 'table_id' => isset($data->id) ? $data->id : 0] )

            <div class="tab-pane" id="videor">

                 <a href="javascript:AddVideoGallery();" id="uploadifive-undefined" class="uploadifive-button btn btn-yellow">Добавить видео</a>
            </div>


            @include('admin.partials.meta')
            
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

    {!! HTML::script('ace/assets/js/date-time/bootstrap-datepicker.js') !!}
    <script type="text/javascript">
        jQuery(function($) {
            var mydate = $('#mydate')[0];
            if(mydate.type !== 'date') {    //if browser doesn't support "date" input
                $(mydate).datepicker({
                    weekStart: 1,
                    autoclose:true,
                    language: 'ru'
                })
            }
        })
    </script>

    {!! HTML::script('ace/assets/js/chosen.jquery.min.js') !!}
    <script>
        $("#chosencat").chosen();

        var modalCallbackFunction = function(){
            toastr.success("TEST");
        }

    </script>   

                         <!--! popup tag insert -->
    <div aria-hidden="true" aria-labelledby="mySmallModalLabel" role="dialog" tabindex="-1" data-show="true" data-backdrop="true" data-keyboard="true" class="modal fade" id="add-photo-gallery" >
         <div class="modal-dialog modal-lg">
             <div class="modal-content">
                 <div class="modal-body">
                        @if(!isset($data))
                        {{ Form::open(['url' => 'admin/products', 'class' => 'form-horizontal']) }}
                        @else
                        {{ Form::open(['url' => 'admin/products/' . $data->id, 'method' => 'put', 'class' => 'form-horizontal']) }}
                        @endif
                    <div class="row">
                     <div class="form-actions margin-t-m-15">
                        <div class="row center">
                            <div class="col-sm-3">
                                <button id="submit_button1" type="submit" class="btn  btn-success btn-block btn-responsive" ><i class="ace-icon fa fa-floppy-o  bigger-120"></i> Сохранить </button>
                            </div>
                            <!--
                            <div class="col-sm-2">
                                <button id="submit_button1" type="submit" class="btn  btn-yellow btn-block btn-responsive" ><i class="ace-icon fa fa-floppy-o  bigger-120"></i> Сохранить и закрыть</button>
                            </div>-->
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
                     </div>
                    
                        <div class="row">
                            <div class="col-sm-7">
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
                                <div class="form-group">
                                    {{ Form::label('name', 'Заголовок ENG', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                                    <div class="col-sm-9">
                                        {{ Form::text('name[en]', (isset($data->name_en) ? $data->name_en : old('name_en')), array('class' => 'col-sm-11 col-xs-12')) }}
                                    </div>
                                </div>

                                
                            </div><!-- /.col-sm-6 -->

                            <div class="col-sm-5">
                            
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
                                            <input type="date" name="date" id="mydate" class="form-control date-picker"
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
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="tabbable">
                                    <ul id="myTab1" class="nav nav-tabs padding-12 tab-color-blue background-blue">

                                        <li class="active">
                                            <a href="#photo-ru" data-toggle="tab">Описание</a>
                                        </li>
                                        <li>
                                            <a href="#photo-galleries-modal" data-toggle="tab">Галлерея</a>
                                        </li>  
                                        <li>
                                            <a href="#photo-galleries-meta"  data-toggle="tab">Мета</a>
                                        </li>                                    

                                        <div class="center"> <span class="label label-xlg label-purple">Логотип категории / Галлерея</span></div>

                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="photo-ru">
                                            <div class="tabbable  tabs-left">
                                                <ul id="myTab" class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#photodescRu" data-toggle="tab">Описание на русском</a>
                                                    </li>
                                                    <li>
                                                        <a href="#photodescRo" data-toggle="tab">Описание на румынском</a>
                                                    </li>
                                                    <li>
                                                        <a href="#photodescEn" data-toggle="tab">Описание на английском</a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content">
                                                    <div class="tab-pane in active" id="photodescRu">
                                                             {{ Form::textarea('description[ru]', (isset($data->description) ? $data->description : old('description')), array('class' => 'ckeditor', 'id' => 'editor')) }}
                                                    </div>
                                                    <div class="tab-pane" id="photodescRo">
                                                             {{ Form::textarea('description[ro]', (isset($data->description_ro) ? $data->description_ro : old('description_ro')), array('class' => 'ckeditor', 'id' => 'editor')) }}
                                                    </div>
                                                    <div class="tab-pane" id="photodescEn">
                                                             {{ Form::textarea('description[en]', (isset($data->description_en) ? $data->description_en : old('description_en')), array('class' => 'ckeditor', 'id' => 'editor')) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="photo-galleries-modal">
                                            <a href="javascript:AddTag();" id="uploadifive-undefined" class="uploadifive-button btn btn-yellow">Добавить файлы</a>
                                        </div>

                                        <div class="tab-pane" id="photo-galleries-meta">
                                            @include('admin.partials.meta')
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-actions margin-b-m-15">
                        {{ Form::submit('Сохранить', array('class' => 'btn btn-success')) }}
                    </div>
                </div>
                {{ Form::close() }}
            </div>
             </div>
         </div>
     </div><!-- /popup tag insert-->

    
 <!--! popup tag insert -->
    <div aria-hidden="true" aria-labelledby="mySmallModalLabel" role="dialog" tabindex="-1" data-show="true" data-backdrop="true" data-keyboard="true" class="modal fade" id="add-video-gallery" >
         <div class="modal-dialog modal-lg">
             <div class="modal-content">
                 <div class="modal-body">
                    @if(!isset($data))
                    {{ Form::open(['url' => 'admin/products', 'class' => 'form-horizontal']) }}
                    @else
                    {{ Form::open(['url' => 'admin/products/' . $data->id, 'method' => 'put', 'class' => 'form-horizontal']) }}
                    @endif
                    <div class="row">
                     <div class="form-actions margin-t-m-15">
                        <div class="row center">
                            <div class="col-sm-3">
                                <button id="submit_button1" type="submit" class="btn  btn-success btn-block btn-responsive" ><i class="ace-icon fa fa-floppy-o  bigger-120"></i> Сохранить </button>
                            </div>
                            <!--
                            <div class="col-sm-2">
                                <button id="submit_button1" type="submit" class="btn  btn-yellow btn-block btn-responsive" ><i class="ace-icon fa fa-floppy-o  bigger-120"></i> Сохранить и закрыть</button>
                            </div>-->
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
                     </div>
                    
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {{ Form::label('name', 'Заголовок', ['class'=>'col-sm-4 control-label no-padding-right']) }}
                                    <div class="col-sm-8">
                                        {{ Form::text('name[ru]', (isset($data->name) ? $data->name : old('name')), array('class' => 'col-sm-11 col-xs-12 name_ru')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('name', 'Заголовок RO', ['class'=>'col-sm-4 control-label no-padding-right']) }}
                                    <div class="col-sm-8">
                                        {{ Form::text('name[ro]', (isset($data->name_ro) ? $data->name_ro : old('name_ro')), array('class' => 'col-sm-11 col-xs-12')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('name', 'Заголовок ENG', ['class'=>'col-sm-4 control-label no-padding-right']) }}
                                    <div class="col-sm-8">
                                        {{ Form::text('name[en]', (isset($data->name_en) ? $data->name_en : old('name_en')), array('class' => 'col-sm-11 col-xs-12')) }}
                                    </div>
                                </div>

                                
                            </div><!-- /.col-sm-6 -->

                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    {{ Form::label('name', 'Описание', ['class'=>'col-sm-3 control-label no-padding-right']) }}
                                                    <div class="col-sm-9">
                                                        {{ Form::textarea('description_short[ru]', (isset($data->description_short) ? $data->description_short : old('description_short')), array('style'=>'width:100%; height:78px', 'rows'=>'3')) }}
                                                    </div>
                                                </div>
                                                <div class="form-group" id="video">
                                                    <!-- {foreach from=$videoList item=v} -->
                                                    <div class="col-sm-12 col-xs-12">
                                                        <input type="hidden" name="video_id[]" {if isset($product.products_id)}value="{$v.video_id}"{/if}>
                                                        <div class="form-group">
                                                            <label for="cname" class="col-sm-3 control-label no-padding-right"> Видео <small><!-- {counter} --></small></label>
                                                            <div class="col-sm-9 col-xs-12">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" name='video[]' value='' />
                                                                    <span class="input-group-addon">
                                                                        <div class=" action-buttons">
                                                                            <a href="javascript:void(0);" class="red delete_features">
                                                                                <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                                                            </a>
                                                                        </div>
                                                                    </span>   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- {/foreach}  --> 
                                                </div><!-- /#video -->

                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <a href="javascript:AddVideo();" class="btn btn-pink pull-right" type="submit" id="submit_button1"><i class="ace-icon fa fa-youtube  bigger-120"></i> Добавить Видео </a>
                                                    </div>
                                                </div>
<!-- 
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
                                </div> -->
                            </div><!-- /.col-sm-6 -->
                        </div><!-- /.row -->
                <hr>

                <div class="row">
                    <div class="form-actions margin-b-m-15">
                        {{ Form::submit('Сохранить', array('class' => 'btn btn-success')) }}
                    </div>
                </div>
                {{ Form::close() }}
            </div>
             </div>
         </div>
     </div><!-- /popup tag insert-->
    <script>
         function AddPhotoGallery(){
             var modal = $('#add-photo-gallery');
             modal.modal();
         }
    </script>
    
    <script>
         function AddVideoGallery(){
             var modal = $('#add-video-gallery');
             modal.modal();
         }
    </script>

    <script>

$(document).ready(function(){
 InitDeleteVideo();
// $("#chosencat").chosen();
// $("#recommended").chosen();
 
 $( ".gallery-type" ).change(function() {
   if (this.value == 1) {
    $(".video-block").hide();
    $(".photo-block").show();
   } else {
    $(".video-block").show();
    $(".photo-block").hide();
   }
  });
 
});

function AddVideo(){
 videos = '<div class="col-sm-12"><input type="hidden" name="video_id[]" /><div class="form-group"><label for="cname" class="col-sm-3 control-label no-padding-right"> Видео <small></small></label> <div class="col-sm-9"> <div class="input-group"> <input type="text" class="form-control" name="video[]" /> <span class="input-group-addon"> <div class=" action-buttons"> <a href="javascript:void(0);" class="red delete_features"> <i class="ace-icon fa fa-trash-o bigger-130"></i> </a> </div> </span> </div> </div> </div> </div>';
 $("#video").append(videos);
 InitDeleteVideo();

}

function InitDeleteVideo(){
 $(".delete_features").unbind('click').bind('click',function(){
  if (confirm("Удалить?")){
   var vid = $(this).parent().parent().parent().parent().parent().parent().find("input[type='hidden']").val();
   if (vid!=""){
    $.get(
     "index.php?action=admin_products",
     {a:"deletevideo",
     id:vid},
     function (result) {
      if (result!="OK!"){
       return false;
      }
     }
    );
   }
   $(this).parent().parent().parent().parent().parent().parent().remove();
  }
 });
}

</script>

@endsection



