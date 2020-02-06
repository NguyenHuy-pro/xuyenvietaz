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
    Trang cá nhân
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
    <link href="{{ url('public/user/css/user.css')}}" rel="stylesheet">
@endsection

{{--js--}}
@section('xv_js_header')
    <script src="{{ url('public/user/js/user.js')}}"></script>
@endsection

{{--header--}}
@section('xv_master_header')
    @include('components.header.header')
@endsection

{{--body--}}
@section('xv_master_body')
    <div class="row">
        <div class="xv-user-wrap col-xs-12 col-sm-12 col-md-12 col-lg-12">
            {{--menu--}}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-sm-12 col-lg-12">
                    @include('user.components.header.header')
                </div>
            </div>


            {{--body--}}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-sm-12 col-lg-12">
                    @yield('xv_user_body')
                </div>
            </div>
        </div>
    </div>
@endsection

{{--footer--}}
@section('xv_master_footer')
    @include('components.footer.footer')
@endsection
