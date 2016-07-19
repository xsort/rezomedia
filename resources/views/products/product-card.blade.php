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
                                <a class="current" href="#">Shopping Cart</a>
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
                                <h1>Shopping Cart  (2,000.00kg)</h1>
                            </div>
                            <div class="cart-form table-responsive ma">
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
        <section class="shop-collaps-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="like">
                            <h2>What would you like to do next?</h2>
                            <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="faq-accordion ced-fag">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default active">
                                    <div class="panel-heading active" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Use Coupon Code <i class="fa fa-caret-down"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <label class="col-sm-2 control-label ta">Enter your coupon here</label>
                                            <div class="input-group">
                                                <input class="form-control" type="text" placeholder="Enter your coupon here">
                                                <span class="input-group-btn">
                                                    <input class="btn btn-primary pet" type="button"  value="Apply Coupon">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Use Gift Voucher <i class="fa fa-caret-down"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <label class="col-sm-2 control-label ta">Enter your coupon here</label>
                                            <div class="input-group">
                                                <input class="form-control" type="text" placeholder="Enter your gift voucher code here">
                                                <span class="input-group-btn">
                                                    <input class="btn btn-primary pet" type="button"  value="Apply Voucher">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Estimate Shipping & Taxes <i class="fa fa-caret-down"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                                        <div class="panel-body">
                                            <p>Enter your destination to get a shipping estimate.</p>
                                            <div class="form-horizontal">
                                                <div class="form-group required">
                                                    <label class="col-sm-2 control-label ta7">Country</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control" >
                                                            <option value=""> --- Please Select --- </option>
                                                            <option value="244">Aaland Islands</option>
                                                            <option value="1">Afghanistan</option>
                                                            <option value="2">Albania</option>
                                                            <option value="3">Algeria</option>
                                                            <option value="4">American Samoa</option>
                                                            <option value="5">Andorra</option>
                                                            <option value="6">Angola</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <label class="col-sm-2 control-label ta7">Region / State</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control">
                                                            <option value=""> --- Please Select --- </option>
                                                            <option value="3513">Aberdeen</option>
                                                            <option value="3514">Aberdeenshire</option>
                                                            <option value="3515">Anglesey</option>
                                                            <option value="3516">Angus</option>
                                                            <option value="3517">Argyll and Bute</option>
                                                            <option value="3518">Bedfordshire</option>
                                                            <option value="3519">Berkshire</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <label class="col-sm-2 control-label ta7">Post Code</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" placeholder="Post Code" value="" name="postcode">
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary pet ta9" type="button">Get Quotes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12  col-xs-12">
                        <table class="table table-bordered">
                            <tr>
                                <td class="text-center">
                                    <strong>Sub-Total:</strong>
                                </td>
                                <td class="text-center">$290.00</td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <strong>Total:</strong>
                                </td>
                                <td class="text-center">$290.00</td>
                            </tr>
                        </table>
                        <div class="buttons">
                            <div class="pull-left">
                                <button class="button bn7">
                                    <span>
                                        <span>Continue Shopping</span>
                                    </span>
                                </button>
                            </div>
                            <div class="pull-right no9">
                                <button class="button bn7">
                                    <span>
                                        <span>Checkout</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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