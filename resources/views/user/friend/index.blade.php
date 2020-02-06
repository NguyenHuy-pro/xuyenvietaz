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
    friend
@endsection

@section('xv_user_body')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-sm-12 col-lg-12">
            @for($i = 1; $i <= 20; $i++)
                <div class="xv-margin-bot-20 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="xv-padding-lef-none col-xs-12 col-sm-12 col-sm-12 col-lg-12"
                         style="border: 1px solid #ECECEC;">
                        <div class="xv-padding-lef-none col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <a href="#" target="_blank">
                                <img class="media-object xv-img-100" alt="seo-keyword"
                                     src="{!! asset('public/imgtest/e.jpg') !!}"/>
                            </a>
                            &nbsp;
                            <a href="#" target="_blank">
                                Tên người dùng
                            </a>
                        </div>
                        {{--grant post--}}
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-right ">
                            <span>12/15/12456</span>
                            <i class="fa fa-chevron-down dropdown-toggle xv-font-size-14" data-toggle="dropdown"></i>
                            <ul class="dropdown-menu dropdown-menu-right xv-font-size-12">
                                <li>
                                    <a class="" href="#">Bào cáo bài viết</a>
                                </li>
                                <li>
                                    <a class="" data-href="#">
                                        Sữa
                                    </a>
                                </li>
                                <li class="">
                                    <a class="" data-href="#">Xóa</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            @endfor
        </div>

    </div>
@endsection
