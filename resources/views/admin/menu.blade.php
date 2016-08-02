
<ul class="nav nav-list">
    <li class="">
        <a href="{{ URL::to('/admin') }}">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Главная </span>
        </a>

        <b class="arrow"></b>
    </li>
    <li class="">
        <a href="{{ URL::to('admin/lists') }}">
            <i class="menu-icon fa fa-list"></i>
            <span class="menu-text"> Справочники</span>
        </a>
        <b class="arrow"></b>
    </li>
    <li class="">
        <a href="admin/categories">
            <i class="menu-icon fa fa-book"></i>
            <span class="menu-text"> Категории</span>
        </a>
        <b class="arrow"></b>
    </li>
    <li class="">
        <a href="admin/products">
            <i class="menu-icon fa fa-gift"></i>
            <span class="menu-text"> Товары </span>
        </a>

        <b class="arrow"></b>
    </li>
    <li class="">
        <a href="{{URL::to('admin/content')}}">
            <i class="menu-icon fa fa-file-text-o"></i>
            <span class="menu-text"> Страницы </span>
        </a>

        <b class="arrow"></b>
    </li>

    <li class="hide">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-cogs"></i>
            <span class="menu-text"> Администр.</span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <b class="arrow"></b>
        <ul class="submenu">
            <li class="">
                <a href="index.php?action=admin_comments">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Комментарии
                </a>
                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="index.php?action=admin_constants">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Константы
                </a>
                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="index.php?action=admin_users">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Пользователи
                </a>
                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="index.php?action=admin_urls">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Ссылки (SEF)
                </a>
                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="index.php?action=admin_changepassword">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Сменить пароль
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>
</ul><!-- /.nav-list -->
