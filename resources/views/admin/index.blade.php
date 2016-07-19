@extends('admin.body')
@section('title',       'Главная')

@section('centerbox')
<div class="page-header">
    <h1> Главная </h1>
</div>

<div class="alert alert-success">
    <button class="close" data-dismiss="alert"><i class="ace-icon fa fa-times"></i></button>
    Здравствуйте, {{ Auth::user()->name }}! Управление сайтом в панели слева.
</div>

<div class="row main-page">
    <div class="col-xs-12">
        <h3 class="header smaller lighter green"></h3>

        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 center">
                <a href="index.php?action=admin_products&a=products" class="btn btn-primary btn-app radius-4">
                    <i class="ace-icon fa fa-film bigger-230"></i>
                    Фильмы
                </a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 center">
                <a href="index.php?action=admin_comments&a=spam" class="btn btn-pink btn-app radius-4">
                    <i class="ace-icon fa fa-bug bigger-230"></i>
                    СПАМ
                    {if $num_spam > 0}<span class="badge badge-warning">+{$num_spam}</span>{/if}
                </a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 center">
                <a href="index.php?action=admin_news" class="btn btn-success btn-app radius-4">
                    <i class="ace-icon fa fa-newspaper-o bigger-230"></i>
                    Новости
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12 center">
                <a href="index.php?action=admin_comments&a=new" class="btn btn-warning btn-app radius-4">
                    <i class="ace-icon fa fa-file-o bigger-230"></i>
                    Новые рецензии
                    <span class="badge badge-pink">+4</span>
                </a>
            </div>
        </div><!-- /.row -->
        <div class="space"></div>
    </div><!-- /.col-xs-12 -->
</div>
@stop
