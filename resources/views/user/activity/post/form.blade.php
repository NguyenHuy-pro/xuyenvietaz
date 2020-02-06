<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 10/17/2016
 * Time: 11:16 PM
 */
?>
<div class="col-xs-12 col-sm-12 col-md-12 col-md-12">
    <table class="table xv-border-none">
        <tr>
            <td class="xv-border-none">
                <i class="fa fa-comment-o"></i>
                Cập nhật trạng thái
            </td>
        </tr>
        <tr>
            <td class="xv-border-none">
                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="">
                    <div class="form-group xv-padding-none ">
                        <textarea name="txtPostContent" class="txtPostContent form-control " rows="3"
                                  style="max-width: 100%;"></textarea>
                    </div>

                    <div class="form-group">
                        <span class="glyphicon glyphicon-camera pull-left xv-font-size-20 "></span>
                        <button type="button" class="btn btn-primary btn-xs pull-right ">Đăng</button>
                        <div class="btn-group pull-right xv-margin-rig-10">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                                    data-toggle="dropdown">
                                Người xem <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                <li><a href="#">Mọi người</a></li>
                                <li><a href="#">Bạn bè</a></li>
                            </ul>
                        </div>
                    </div>

                </form>
            </td>
        </tr>
    </table>
</div>



