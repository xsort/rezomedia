<footer class="footer-area">            <div class="container">                <div class="row">                    <div class="col-md-3 col-sm-4 col-xs-12">                        <div class="footer-title-up">                            <div class="footer-title">                                <h3>{{ trans('common.about') }}</h3>                            </div>                            <div class="about-us">                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s</p>                            </div>                            <div class="footer-static-content h2-cont">                                <a class="add" href="" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i>    </a>                                   <a href="" class="wishlist" data-toggle="tooltip" title="Rss"><i class="fa fa-rss"></i></a>                               <a href="" class="wishlist" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>                                <a href="" class="search2" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a>                                <a href="" class="wishlist" data-toggle="tooltip" title="Google"><i class="fa fa-google-plus"></i></a>                            </div>                        </div>                    </div>                    <div class="col-md-3 col-sm-4 col-xs-12 res-free">                        <div class="footer-title-up">                            <div class="footer-title">                                <h3>{{ trans('common.equipment') }}</h3>                            </div>                            <div class="footer-content">                                <ul class="toggle-footer">                                    <li>                                        <a href="{{route('get_slug', 'kassovye-apparaty')}}">{{ trans('common.cash-regist') }}</a>                                    </li>                                    <li>                                        <a href="{{route('get_slug', 'kupyuroschetnye-mashinki')}}">{{ trans('common.count-machines') }}</a>                                    </li>                                    <li>                                        <a href="{{route('get_slug', 'detektory-valyut')}}">{{ trans('common.valut-detect') }}</a>                                    </li>                                    <li>                                        <a href="{{route('get_slug', 'denezhnye-yashhiki')}}">{{ trans('common.money-boxes') }}</a>                                    </li>                                    <li>                                        <a href="{{route('get_slug', 'chekovaya-lenta')}}">{{ trans('common.receipt-tape') }}</a>                                    </li>                                </ul>                            </div>                        </div>                    </div>                    <div class="col-md-3 hidden-sm col-xs-12 res-free">                        <div class="footer-title-up">                            <div class="footer-title">                                <h3>{{ trans('common.services') }}</h3>                            </div>                            <div class="footer-content">                                <ul class="toggle-footer">                                    <li>                                        <a href="{{ route('get_slug','registration') }}">{{ trans('common.registration') }}</a>                                    </li>                                    <li>                                        <a href="{{ route('get_slug','remove') }}">{{ trans('common.remove') }}</a>                                    </li>                                    <li>                                        <a href="{{ route('get_slug','tech-support') }}">{{ trans('common.tech-support') }}</a>                                    </li>                                    <li>                                        <a href="{{ route('get_slug','repair') }}">{{ trans('common.repair') }}</a>                                    </li>                                </ul>                            </div>                        </div>                    </div>                    <div class="col-md-3 col-sm-4 col-xs-12 res-free">                        <div class="footer-title-up">                            <div class="footer-title">                                <h3>{{ trans('common.contacts') }}</h3>                            </div>                            <div class="toggle-footer footer-content">                                <span class="address icon">{{ trans('common.main-adres') }}</span>                                <span class="phone icon">{{ trans('common.main-phone') }}</span>                                <span class="email icon">{{ trans('common.main-email') }}</span>                            </div>                        </div>                    </div>                </div>            </div>            <div class="last-footer">                <div class="container">                    <div class="row">                        <div class="col-md-12 text-center">                            <div class="footer-address footer2">                                <address>                                    {{ trans('common.develop') }} -                                     <a target="_blank" href="http://xsort.md/">Xsort Web Studio</a>                                </address>                            </div>                        </div>                    </div>                </div>            </div>        </footer>