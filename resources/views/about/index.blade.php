<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 4/8/2017
 * Time: 12:02 PM
 */
$loginStatus = false;
?>
@extends('.master')

@section('titlePage')
    chi tiết bài viết
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
    <link href="{{ url('public/about/css/about.css')}}" rel="stylesheet">
@endsection

{{--js--}}
@section('xv_js_header')
    <script src="{{ url('public/about/js/about.js')}}"></script>
@endsection

{{--header--}}
@section('xv_master_header')
    @include('components.header.header')
@endsection

{{--body--}}
@section('xv_master_body')
    <div class="row">
        <div class="xv-article-body col-xs-12 col-sm-12 col-md-12 col-lg-12">
            {{--title--}}
            <div class="row">
                <div class="xv-padding-top-10 xv-padding-bot-10 col-xs-12 col-sm-12 col-sm-12 col-lg-12">
                    <p>
                        <b>Tiêu đề của bài giới thiệu</b>
                    </p>
                </div>
            </div>

            {{--content--}}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-sm-12 col-lg-12">


                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi
                    dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai noi
                    dung
                    bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai noi dung
                    bai
                    viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai noi dung bai
                    viet
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bainoi dung bai viet
                    noi
                    dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai noi dung bai viet noi
                    dung
                    bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai noi dung bai viet noi dung
                    bai
                    viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai noi dung bai viet noi dung bai
                    viet
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai

                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi
                    dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai noi
                    dung
                    bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai noi dung
                    bai
                    viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai noi dung bai
                    viet
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bainoi dung bai viet
                    noi
                    dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai noi dung bai viet noi
                    dung
                    bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai noi dung bai viet noi dung
                    bai
                    viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai noi dung bai viet noi dung bai
                    viet
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai

                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai
                    noi
                    dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai noi
                    dung
                    bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai noi dung
                    bai
                    viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai noi dung bai
                    viet
                    noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bainoi dung bai viet
                    noi
                    dung bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai noi dung bai viet noi
                    dung
                    bai viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai noi dung bai viet noi dung
                    bai
                    viet noi dung bai viet noi dung bai viet noi dung bai viet noi dung bai noi dung bai viet noi dung bai
                    viet
                    noi .
                </div>
            </div>

        </div>
    </div>
@endsection

{{--footer--}}
@section('xv_master_footer')
    @include('components.footer.footer')
@endsection