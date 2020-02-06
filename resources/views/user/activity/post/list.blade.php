<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 10/17/2016
 * Time: 11:16 PM
 */
?>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        @for($i = 0; $i <= 2; $i++)
            @include('user.activity.post.object')
        @endfor
    </div>
    <div class="text-center wc-padding-10 wc-margin-bot-40">
        <a href="#">Xem Thêm</a>
    </div>
</div>
