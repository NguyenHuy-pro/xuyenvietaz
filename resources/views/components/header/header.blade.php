<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 4/11/2017
 * Time: 12:10 AM
 */

#$loginStatus = false;
$loginStatus = true;
?>
<div class="row">
    <div class="xv-master-header col-xs-12 col-sm-12 col-md-12 col-lg-12 xv-padding-top-10">
        <div class="xv-header-icon pull-left">
            <a class="" href="{!! route('xv.home') !!}">
                Ghim
            </a>
            <span>&nbsp;|&nbsp;</span>
            <a class="" href="{!! route('xv.home') !!}">
                Thêm
            </a>
        </div>
        @if($loginStatus)
            <div class="xv-header-icon pull-right">
                <a class="xv-master-header-link dropdown-toggle" data-toggle="dropdown">
                    <img alt="user-img" style="width: 40px; height: 40px; border-radius: 50%;"
                         src="{!! asset('public/imgtest/d1.jpg') !!}">
                </a>
                <div class="dropdown-menu dropdown-menu-right list-group xv-margin-padding-none" style="width: 250px;">
                    <div class="list-group-item" data-href="#">
                        <label>Tên người dùng</label>
                    </div>
                    <div class="list-group-item" data-href="#">
                        <label>Thông tin cá nhân</label>
                    </div>
                    <div class="xv-padding-10 text-center col-xs-6 col-sm-6 col-md-6 col-lg-6" data-href="#">
                        <a class="btn btn-primary" href="{!! route('xv.user.activity.get') !!}">
                            Trang cá nhân
                        </a>
                    </div>
                    <div class="xv-padding-10 text-center col-xs-6 col-sm-6 col-md-6 col-lg-6" data-href="#">
                        <a class="btn btn-default">Đăng xuất</a>
                    </div>
                </div>
            </div>

        @else
            <div class="xv-header-icon pull-right">
                <a class="xv-master-header-link" href="{!! route('xv.register') !!}">
                    Đăng ký
                </a>
            </div>

            <div class="xv-header-icon pull-right">
                <a class="xv-master-header-link" href="#">
                    Đăng nhập
                </a>
            </div>

        @endif
    </div>
</div>
