<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 5/1/2017
 * Time: 11:07 PM
 */
?>
@extends('.components.container.container-6')
@section('xv_container_content')
    <form id="frmMainLogin" name="frmMainLogin"
          class="form-horizontal col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1"
          role="form" method='post' action="">
        <div id="tf_main_login_notify" class="form-group text-center tf-color-red tf-padding-10"></div>
        <div class="form-group">
            <label>
                Tài khoản
            </label>
            <input id="txtAccount" class="form-control" name="txtAccount" type="email" autofocus
                   placeholder="Nhập tài khoản"/>
        </div>
        <div class="form-group">
            <label>
                Mật khẩu
            </label>
            <input id="txtPass" class="form-control" name="txtPass" type="password"
                   placeholder="Nhập mật khậu"/>
        </div>
        <div class="form-group">
            <div class="text-center col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <a>
                    Facebook
                </a>
            </div>
            <div class="text-center col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <a>
                    Google+
                </a>
            </div>
        </div>
        <div class="form-group text-center">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
            <button class="btn btn-primary btn-sm xv-link-white" type="button">
                Đăng nhập
            </button>
            <button class="btn btn-default btn-sm xv-link" type="button">
                Đóng
            </button>
        </div>
        <div class="form-group text-center">
            <a class="tf_forget_pass tf-link" data-href="">
                quên mật khẩu ?
            </a>
        </div>
    </form>
@endsection
