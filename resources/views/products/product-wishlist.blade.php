@extends('body')
@section('centerbox')
     
 <!-- mobile-menu-area end -->
        <div class="top-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li class="p-none">
                                <a href="#">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li>
                                <a class="current" href="#">wishlist</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
         <!-- start shopping-cart-area
        ============================================ -->
        <div class="shopping-cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="s-cart-all">
                            <div class="page-title">
                                <h1>wishlist (1,000.00kg) </h1>
                            </div>
                            <div class="cart-form table-responsive">
                                <table id="shopping-cart-table" class="data-table cart-table">
                                    <tr>
                                        <th>Images</th>
                                        <th>Product Name</th>
                                        <th>Model</th>
                                        <th>Qty</th>
                                        <th>Unit Price</th>
                                        <th>Total</th>
                                        <th>column_remove</th>
                                    </tr>
                                    <tr>
                                        <td class="sop-cart">
                                            <a href="#"><img class="primary-image" alt="" src="img/product/3-150x150.jpg"></a>
                                        </td>
                                        <td class="sop-cart"><a href="#">adipiscing elit</a></td>
                                        <td class="sop-cart">Product 3</td>
                                        <td class="cen">
                                            <input class="input-text qty" type="text" name="qty" maxlength="12" value="1" title="Qty">
                                            <div class="tas ce-ta">
                                                <a class="add" title="" data-toggle="tooltip" href="" data-original-title="Update">
                                                    <i class="fa fa-times-circle"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="sop-cart">$200.00</td>
                                        <td class="sop-cart">$200.00</td>
                                        <td class="sop-icon">
                                            <div class="tas">
                                                <a class="add" title="" data-toggle="tooltip" href="" data-original-title="Remove">
                                                    <i class="fa fa-times-circle"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="sop-cart">
                                            <a href="#"><img class="primary-image" alt="" src="img/product/8-150x150.jpg"></a>
                                        </td>
                                        <td class="sop-cart"><a href="#">erat volutpat  erat volutpat Reward Points: 700</a></td>
                                        <td class="sop-cart"><a href="#">Product 8</a></td>
                                        <td class="cen">
                                            <input class="input-text qty" type="text" name="qty" maxlength="12" value="1" title="Qty">
                                            <div class="tas ce-ta">
                                                <a class="add" title="" data-toggle="tooltip" href="" data-original-title="Update">
                                                    <i class="fa fa-times-circle"></i>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="sop-cart">$110.00</td>
                                        <td class="sop-cart">$110.00</td>
                                        <td class="sop-icon">
                                            <div class="tas">
                                                <a class="add" title="" data-toggle="tooltip" href="" data-original-title="Remove">
                                                    <i class="fa fa-times-circle"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end shopping-cart-area
        ============================================ -->
        <div class="icon-slider-area">
            <div class="container">
                <div class="row">          
                    <div class="col-md-12">
                        <div class="item_all indicator-style3">
                            <a href="#"><img src="img/logo-slider/brand1-175x72.png" alt="" /></a>
                            <a href="#"><img src="img/logo-slider/brand2-175x72.png" alt="" /></a>
                            <a href="#"><img src="img/logo-slider/brand3-175x72.png" alt="" /></a>
                            <a href="#"><img src="img/logo-slider/brand4-175x72.png" alt="" /></a>
                            <a href="#"><img src="img/logo-slider/brand5-175x72.png" alt="" /></a>
                            <a href="#"><img src="img/logo-slider/brand1-175x72.png" alt="" /></a>
                            <a href="#"><img src="img/logo-slider/brand2-175x72.png" alt="" /></a>
                            <a href="#"><img src="img/logo-slider/brand3-175x72.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
@stop