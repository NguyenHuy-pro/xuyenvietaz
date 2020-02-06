<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 4/12/2017
 * Time: 1:30 AM
 */
$mobile = new Mobile_Detect();
$mobileStatus = $mobile->isMobile();
$loginStatus = false;
?>
@extends('.user.index')

@section('titlePage')
    Article
@endsection

@section('xv_user_body')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-sm-12 col-lg-12">
            <div class="text-right col-xs-12 col-sm-12 col-md-12 col-lg-12">
              + Thêm bài viết
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row xv-padding-top-20">
                    @if(!$mobileStatus)
                        @for($i = 1; $i < 10; $i++)
                            <div class="xv-margin-bot-30 col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <a href="{!! route('xv.article.get') !!}">
                                            <img style="width: 150px; height: 150px;"
                                                 src="{!! asset('public/imgtest/e.jpg') !!}">
                                        </a>
                                    </div>
                                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                        <div class="xv-margin-bot-5 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <a class="xv-font-bold" href="{!! route('xv.article.get') !!}">
                                                Tên bài viết Tên bài viết Tên bài viết Tên bài viết Tên bàiviết
                                            </a>
                                        </div>
                                        <div class="xv-margin-bot-10 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô
                                            tả ngắn
                                            Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô
                                            tả ngắn
                                        </div>
                                        <div class="text-right col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <em>tác giả:</em>
                                            <a class="xv-link-red">Văn Tèo</a>
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
                                        Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô
                                        tả ngắn
                                        Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô tả ngắn Mô
                                        tả ngắn
                                    </div>
                                    <div class="text-right col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <em>tác giả:</em>
                                        <a class="xv-link-red">Văn Tèo</a>
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
