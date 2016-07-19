@extends('body')
@section('centerbox')
 
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
                                <a class="current" href="#">My Account</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header_area
        ============================================ -->
        <section class="collapse_area coll2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="check">
                            <h1>My Account </h1>
                        </div>
                        <div class="faq-accordion">
                            <div class="panel-group pas7" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a class="collapsed method" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Edit your account information <i class="fa fa-caret-down"></i></a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" >
                                        <div class="row">
                                            <div class="easy2">
                                                <h1>My Account Information</h1>
                                                <form class="form-horizontal" action="#">
                                                    <fieldset>
                                                        <legend>Your Personal Details</legend>
                                                        <div class="form-group required">
                                                            <label class="col-sm-2 control-label">First Name </label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group required">
                                                            <label class="col-sm-2 control-label">Last Name</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group required">
                                                            <label class="col-sm-2 control-label">E-Mail</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="email" placeholder="E-Mail">
                                                            </div>
                                                        </div>
                                                        <div class="form-group required">
                                                            <label class="col-sm-2 control-label">Telephone</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="tel" placeholder="Telephone">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-2 control-label">Fax</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="text" placeholder="Fax">
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="buttons clearfix">
                                                        <div class="pull-left">
                                                            <a class="btn btn-default ce5" href="#">Back</a>
                                                        </div>
                                                        <div class="pull-right">
                                                            <input class="btn btn-primary ce5" type="submit" value="Continue">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Change your password   <i class="fa fa-caret-down"></i></a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                                        <div class="row">
                                            <div class="easy2">
                                                <h1>Change Password</h1>
                                                <form class="form-horizontal" action="#">
                                                    <fieldset>
                                                        <legend>Your Password</legend>
                                                        <div class="form-group required">
                                                            <label class="col-sm-2 control-label">Password</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="password" placeholder="password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group required">
                                                            <label class="col-sm-2 control-label">Password Confirm</label>
                                                            <div class="col-sm-10">
                                                                <input class="form-control" type="password" placeholder="password confirm">
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="buttons clearfix">
                                                        <div class="pull-left">
                                                            <a class="btn btn-default ce5" href="#">Back</a>
                                                        </div>
                                                        <div class="pull-right">
                                                            <input class="btn btn-primary ce5" type="submit" value="Continue">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">Modify your address book entries   <i class="fa fa-caret-down"></i></a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                                        <div class="easy2">
                                            <h1>Address Book Entries</h1>
                                            <table class="table table-bordered table-hover">
                                                <tr>
                                                    <td class="text-left">
                                                        Farhana hayder (shuvo)
                                                        <br>
                                                        hastech
                                                        <br>
                                                        Road#1 , Block#c
                                                        <br>
                                                        Rampura.
                                                        <br>
                                                        Dhaka
                                                        <br>
                                                        Bangladesh
                                                    </td>
                                                    <td class="text-right">
                                                        <a class="btn btn-info g6" href="#">Edit</a>
                                                        <a class="btn btn-danger g6" href="#">Delete</a>
                                                    </td>
                                                </tr>
                                            </table>
                                            <div class="buttons clearfix">
                                                <div class="pull-left">
                                                    <a class="btn btn-default ce5" href="#">Back</a>
                                                </div>
                                                <div class="pull-right">
                                                    <input class="btn btn-primary ce5" type="submit" value="Continue">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="collap" href="wishlist.html">Modify your wish list   <i class="fa fa-caret-down"></i></a>
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