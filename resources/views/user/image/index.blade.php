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
    image
@endsection

@section('xv_user_body')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-sm-12 col-lg-12">
            @for($i = 1; $i <= 20; $i++)
                <div class="col-xs-6 col-sm-3 col-md-4 col-lg-4">
                    <div class="xv-margin-bot-20 xv-padding-none col-xs-12 col-sm-12 col-sm-12 col-lg-12" style="border: 1px solid #D7D7D7;">
                        <img class="xv-width-height-full" alt="seo-keyword"
                             src="{!! asset('public/imgtest/e.jpg') !!}"/>
                    </div>
                </div>
            @endfor
        </div>

    </div>
@endsection
