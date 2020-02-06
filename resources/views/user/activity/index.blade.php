<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 4/12/2017
 * Time: 1:30 AM
 */
?>
@extends('.user.index')

@section('titlePage')
    activity
@endsection

@section('xv_user_body')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-sm-12 col-lg-12">
            {{--from status update--}}
            @include('user.activity.post.form')
        </div>

        <div class="col-xs-12 col-sm-12 col-sm-12 col-lg-12">
            {{--post content--}}
            @include('user.activity.post.list')
        </div>

    </div>
@endsection
