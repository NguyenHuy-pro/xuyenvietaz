<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 4/8/2017
 * Time: 12:02 PM
 */
$mobile = new Mobile_Detect();
$mobileStatus = $mobile->isMobile();
$loginStatus = false;
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
    <link href="{{ url('public/home/css/home.css')}}" rel="stylesheet">
@endsection

{{--js--}}
@section('xv_js_header')
    <script src="{{ url('public/home/js/home.js')}}"></script>
@endsection

{{--header--}}
@section('xv_master_header')
    @include('components.header.header')
@endsection

{{--body--}}
@section('xv_master_body')
    <div class="row">
        <div class="xv-home-body col-xs-12 col-sm-12 col-md-12 col-lg-12">
            {{--logo--}}
            {{--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left">
                <i class="fa fa-bicycle" style="color: red; font-size: 20px;"></i>
                <i style="color: green; font-size: 80px;">?</i>
            </div>--}}

            {{--search form--}}
            <form role="form" method="post">
                {{--<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <select class="form-control">
                        <option><a href="#">Tất cả Tỉnh/Thành</a></option>
                        <option><a href="#">TP HCM</a></option>
                        <option><a href="#">TP Đà Nẵng</a></option>
                        <option><a href="#">TP Cần Thơ</a></option>
                    </select>
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <select class="form-control">
                        <option>Tất cả Quận/Huyện</option>
                        <option>Tên Quận</option>
                        <option>Tên Huyện</option>
                        <option>Tên Huyện</option>
                    </select>
                </div>--}}
                <div id="xv_search_advance" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                    {{--keyword--}}
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Tìm!</button>
                        </span>
                    </div>

                    {{--chọn tính năng--}}
                    <div class="form-group">
                        <div class="row">
                            <div class="text-center col-xs-12 col-sm-12 col-md-12 col-log-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="">Tham quan
                                    </label>
                                    &nbsp;
                                    <label>
                                        <input type="checkbox" value="">Phượt
                                    </label>
                                    &nbsp;
                                    <label>
                                        <input type="checkbox" value="">Nghĩ dưỡng
                                    </label>
                                    &nbsp;
                                    <label>
                                        <input type="checkbox" value="">Khám phá - Câu
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            {{--new article--}}
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row xv-padding-top-20">
                    @if(!$mobileStatus)
                        @for($i = 1; $i < 10; $i++)
                            <div class="xv-margin-bot-30 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="row">
                                    <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <a href="{!! route('xv.article.get') !!}">
                                            <img style="width: 150px; height: 150px;"
                                                 src="{!! asset('public/imgtest/e.jpg') !!}">
                                        </a>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <a class="xv-font-bold" href="{!! route('xv.article.get') !!}">
                                                Tên bài viết Tên bài viết Tên bài viết Tên bài viết Tên bàiviết
                                            </a>
                                        </div>
                                        <div class="xv-margin-bot-10 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <span>
                                            Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô
                                        tả ngắn
                                        Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô
                                        tả ngắn
                                        </span>
                                        </div>
                                        <div class="text-right col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <em>tác giả:</em>
                                            <a class="xv-link-red" href="{!! route('xv.user.activity.get') !!}">
                                                Văn Tèo
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    @else
                        @for($i = 1; $i < 10; $i++)
                            <div class="xv-margin-bot-30 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="xv-margin-bot-10 col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <a href="{!! route('xv.article.get') !!}">
                                            <img style="width: 150px; height: 150px;"
                                                 src="{!! asset('public/imgtest/e.jpg') !!}">
                                        </a>
                                    </div>
                                    <div class="xv-margin-bot-5 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <a class="xv-font-bold" href="{!! route('xv.article.get') !!}">
                                            Tên bài viết Tên bài viết Tên bài viết Tên bài viết Tên bàiviết
                                        </a>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <span>
                                            Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô
                                        tả ngắn
                                        Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô
                                        tả ngắn
                                        </span>
                                    </div>
                                    <div class="text-right col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <em>tác giả:</em>
                                        <a class="xv-link-red" href="{!! route('xv.user.activity.get') !!}">
                                            Văn Tèo
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    @endif
                </div>
            </div>
            <div class="xv-padding-30 text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <a href="#">Xem thêm</a>
            </div>
        </div>
    </div>
@endsection

{{--footer--}}
@section('xv_master_footer')
    @include('components.footer.footer')
@endsection
