<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 10/17/2016
 * Time: 11:16 PM
 */
?>
<div class="panel panel-default xv-user-activity-post-object  xv-margin-bot-15 xv-box-shadow ">
    <div class="panel-heading wc-bg-none wc-border-none">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <a href="#" target="_blank">
                    <img class="media-object xv-img-40 xv-border-radius-5" alt="seo-keyword" src="{!! asset('public/imgtest/e.jpg') !!}"/>
                </a>
                &nbsp;
                <a href="#" target="_blank">
                    Tên người dùng
                </a>
            </div>
            {{--grant post--}}
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-right ">
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

    {{--text post--}}
    <div class="panel-body">

        {{--content--}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                noi dung post noi dung post noi dung post noi dung post noi dung post noi dung post noi dung post
                noi dung post noi dung post noi dung post noi dung post noi dung post noi dung post noi dung post
            </div>
        </div>

        {{--image--}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 xv-padding-top-10 xv-padding-bot-10">
                <img src="{!! asset('public/imgtest/e.jpg') !!}"/>
            </div>
        </div>

        {{--post statistic--}}
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 xv-fruit-post-object-statistic text-right">
                {{--comment--}}
                <span class="glyphicon glyphicon-comment"></span>
                <span class="">10</span>
                <a class="" href="#">Comment</a>

                {{--love--}}
                <span class="glyphicon glyphicon-thumbs-up"></span>
                <span class="">5</span>
                <a class="" href="#">Like</a>

                <span class="glyphicon glyphicon-random"></span> 1000 &nbsp;&nbsp;&nbsp;

            </div>
        </div>

        {{--comment--}}
        <div class="row">
            {{--form comment--}}
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 xv-vertical-bottom">
                <form class="input-group" method="post" action="" style="background-color: whitesmoke;">
                    <textarea class="form-control xv-border-none xv-bg-none xv-border-none" name="txtCommentContent"
                              rows="1" placeholder="Enter comment"></textarea>
                    <span class="input-group-btn xv-border-none">
                        <button class="btn btn-default xv-border-none xv-bg-none" type="button">
                            <a class=" tf-link">Gửi</a>
                        </button>
                    </span>
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                </form>
            </div>

            {{--contain comment--}}
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    {{--object comment--}}
                    @for($i = 1; $i <5 ;$i++)
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 xv-padding-top-5 xv-padding-bot-5">
                            <div class="media xv-position-rel xv-padding-rig-none">
                                <a class="pull-left" href="#" target="_blank">
                                    <img class="media-object xv-img-40 xv-border-radius-4"
                                         src="{!! asset('public/imgtest/e.jpg') !!}"/>
                                </a>

                                <div class="media-body xv-padding-none">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 xv-padding-none">
                                        <a href="#" target="_blank">
                                            custoner name
                                        </a>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 xv-padding-none">
                                        comment content - comment content
                                    </div>
                                </div>

                                <div class="xv-position-abs " style="top: 0; right: 0;">
                                    <i class="fa fa-chevron-down dropdown-toggle xv-font-size-14"
                                       data-toggle="dropdown"></i>
                                    <ul class="dropdown-menu dropdown-menu-right xv-font-size-12">
                                        <li>
                                            <a class="" data-href="#">
                                                Edit
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="" data-href="#">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

            {{--view more old comment--}}
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 xv-padding-lef-30 xv-padding-top-5 xv-padding-bot-5 ">
                <span class="glyphicon glyphicon-comment"></span>
                <a href="">View more comment</a>
            </div>
        </div>
    </div>

</div>
