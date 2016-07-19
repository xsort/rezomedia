<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Административная панель</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    {{ HTML::style('ace/assets/css/bootstrap.css') }}

    <!-- text fonts -->
    {{ HTML::style('ace/assets/css/ace-fonts.css') }}

    <!-- ace styles -->
    {{ HTML::style('ace/assets/css/ace.css') }}

    <!--[if lte IE 9]>
    {{ HTML::style('ace/assets/css/ace-part2.css') }}
    <![endif]-->

    {{ HTML::style('ace/assets/css/ace-rtl.css') }}

    <!--[if lte IE 9]>
    {{ HTML::style('ace/assets/css/ace-ie.css') }}
    <![endif]-->

</head>

<body class="login-layout">
<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center">
                        <h1>
                            <i class="ace-icon fa fa-leaf green"></i>
                            <span class="red">Admin</span>
                            <span class="white" id="id-text2">panel</span>
                        </h1>
                        <h4 class="blue" id="id-company-text">&copy; Xsort Web Studio</h4>
                    </div>

                    <div class="space-6"></div>

                    <div class="position-relative">
                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header blue lighter bigger">
                                        <i class="ace-icon fa fa-coffee green"></i>
                                        Введите email и пароль
                                    </h4>
                                    <div class="space-6"></div>

                                    <form method="POST" action="{{ url('/admin/login') }}">
                                        {!! csrf_field() !!}
                                        <fieldset>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}"/>
															<i class="ace-icon fa fa-user"></i>
														</span>
                                            </label>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password" class="form-control" placeholder="Пароль" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
                                            </label>

                                            <div class="space"></div>

                                            <div class="clearfix">
                                                <!--
                                                <label class="inline">
                                                    <input type="checkbox" class="ace" name="remember" />
                                                    <span class="lbl"> Запомнить меня</span>
                                                </label>
                                                -->
                                                <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                    <i class="ace-icon fa fa-key"></i>
                                                    <span class="bigger-110">Login</span>
                                                </button>
                                            </div>

                                            <div class="space-4"></div>
                                        </fieldset>
                                    </form>
                                    @include('admin.partials.errors')
                                </div><!-- /.widget-main -->
                            </div><!-- /.widget-body -->
                        </div><!-- /.login-box -->

                            </div><!-- /.widget-body -->
                        </div><!-- /.signup-box -->
                    </div><!-- /.position-relative -->
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.main-content -->
</div><!-- /.main-container -->

</body>
</html>
