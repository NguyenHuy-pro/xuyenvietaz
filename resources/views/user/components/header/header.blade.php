<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 4/12/2017
 * Time: 1:29 AM
 */
?>
<div class="row">

    <div class="xv-margin-top-10 col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height: 200px; background-color: green;">
            Ảnh tường
        </div>
    </div>

    <div class="xv-margin-top-10 col-xs-12 col-sm-12 col-sm-12 col-lg-12">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " style="height: 100px; background-color: whitesmoke;">
            <div class="col-xs-12 col-sm-6 col-sm-4 col-lg-4" >
                Ảnh đại diện
            </div>
            <div class="text-right col-xs-12 col-sm-6 col-md-8 col-lg-8">
                Lượt view | Lượt theo dõi
            </div>
        </div>
    </div>

    <div class="xv-padding-top-10 xv-padding-bot-10 col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <ul class="nav nav-tabs" role="tablist">
            <li @if($userAccess == 'activity') class="active" @endif>
                <a href="{!! route('xv.user.activity.get') !!}">Hoạt động</a>
            </li>
            <li @if($userAccess == 'friend') class="active" @endif >
                <a href="{!! route('xv.user.friend.get') !!}">Bạn bè</a>
            </li>
            <li @if($userAccess == 'image') class="active" @endif >
                <a href="{!! route('xv.user.image.get') !!}">Hình ảnh</a>
            </li>
            <li @if($userAccess == 'article') class="active" @endif >
                <a href="{!! route('xv.user.article.get') !!}">Bài Viết</a>
            </li>
        </ul>
    </div>
</div>
