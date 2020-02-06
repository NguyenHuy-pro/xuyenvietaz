<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 4/8/2017
 * Time: 11:37 PM
 */
?>
@extends('.master')

@section('titlePage')
    XuyenVietAZ
@endsection

@section('shortcutPage')
    <link rel="shortcut icon" href="{!! asset('public/imgtest/travel_1.jpg') !!}"/>
@endsection

{{--description Page--}}
@section('descriptionPage')
    Du lịch, phược..
@endsection
{{--css--}}
@section('xv_css_header')
    <link href="{{ url('public/register/css/register.css')}}" rel="stylesheet">
@endsection

{{--js--}}
@section('xv_js_header')
    <script src="{{ url('public/register/js/register.js')}}"></script>
@endsection

{{--header--}}
@section('xv_master_header')
    <div class="row">
        <div class="xv-home-header col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-left">
                <a class="xv-font-size-20" href="{!! route('xv.home') !!}">
                    Xv
                </a>
            </div>
            <div class="text-right col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <a href="#">Đăng nhập</a> &nbsp; | &nbsp;
                <a href="{!! route('xv.register') !!}">Đăng ký</a>
            </div>
        </div>
    </div>
@endsection

{{--body--}}
@section('xv_master_body')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h4>Thông tin thành viên mới:</h4>
            </div>
            {{--register form--}}
            <form role="form" method="post">
                <div class="col-xs-12 col-sm-8 col-md-10 col-lg-10">
                    <div class="form-group xv-padding-top-10" style="border-top: 5px solid #D7D7D7;">
                        <label class="">Họ</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label class="">Tên</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label class="">Tên đăng nhập</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label class="">Mật khẩu</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label class="">Nhâp lại mật khẩu</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-2 col-lg-2">
                    <div class="form-group xv-padding-top-10 "style="border-top: 5px solid #D7D7D7">
                        <label>Đăng nhập bằng:</label>
                        <br/>
                        <br/>
                        <a href="#">
                            Facebook
                        </a>
                        <br/>
                        <br/>
                        <a href="#">
                            Google +
                        </a>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <label>
                            <input name="confirmReadRule" type="checkbox"> Tôi đã đọc và đồng ý với các
                            <a href="#" target="_blank">Điều khoản</a> của Xuyên Việt
                        </label>
                    </div>
                </div>
                <div class="xv-padding-30 text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <a class="btn btn-primary" href="">
                        Đăng ký
                    </a>
                    <a class="btn btn-default" href="{!! route('xv.home') !!}">
                        Về trang chính
                    </a>
                </div>
            </form>

        </div>
    </div>
@endsection

{{--footer--}}
@section('xv_master_footer')
    @include('components.footer.footer')
@endsection
