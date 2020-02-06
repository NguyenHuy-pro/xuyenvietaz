<?php
use Carbon\Carbon;
class Hfunction
{
    # alias
    function stripUnicode($str)
    {
        if (!$str) return false;
        $unicode = array(
            'a' => 'ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ậ|ẫ|á|à|ả|ạ|ã',
            'A' => 'Ă|Ắ|Ằ|Ẵ|Ẳ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ẫ|Á|À|Ả|Ã|Ạ',
            'd' => 'đ',
            'D' => 'Đ',
            'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i' => 'í|ì|ỉ|ĩ|ị',
            'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
            'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
            'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
        );
        foreach ($unicode as $nonUnicode => $uni) {
            $arr = explode('|', $uni);
            $str = str_replace($arr, $nonUnicode, $str);
        }
        return $str;
    }

    function alias($str, $linked = '')
    {
        $str = trim($str);
        if ($str == '') return '';
        $str = str_replace('"', '', $str);
        $str = str_replace("'", '', $str);
        $str = $this->stripUnicode($str);
        $str = mb_convert_case($str, MB_CASE_LOWER, 'utf-8');
        $str = str_replace(' ', $linked, $str);
        return $str;
    }

    #create random
    public function random($length = 1, $type = 'all')
    {
        $result = '';
        if ($type == 'string') {
            $stringRandom = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            for ($i = 1; $i <= $length; $i++) {
                $result = $result . $stringRandom[rand(0, strlen($stringRandom) - 1)];
            }
        } elseif ($type == 'int') {
            for ($i = 0; $i < $length; $i++) {
                $result = $result . rand(0, 9);
            }

            $result = (int)$result;
        } else {
            $stringRandom = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            for ($i = 1; $i <= $length; $i++) {
                $result = $result . $stringRandom[rand(0, strlen($stringRandom) - 1)];
            }
        }

        return $result;
    }

    #string
    function cutString($string, $length, $more = '')
    {
        if (strlen($string) > $length) {
            $string = mb_substr($string, 0, $length, 'UTF-8') . $more;
        }
        return $string;
    }

    public function checkEscape($string)
    {
        return mysql_real_escape_string($string);
    }

    public function checkAddSlashes($string)
    {
        return addslashes($string);
    }

    # convert to html type
    public function convertValidHTML($string)
    {
        return $this->checkAddSlashes($string);
    }

    # return html type
    public function returnValidHTML($string)
    {
        return stripslashes($string);
    }

    #convert to int
    public function checkIntval($string)
    {
        return intval($string);
    }

    function convertViewValue($value)
    {
        if (1000 <= $value && $value < 1000000) {
            $value = ($value / 1000) . "K";
        } elseif (1000000 <= $value && $value < 1000000000) {
            $value = ($value / 1000000) . "M";
        }
        return $value;
    }

    # create option of select
    function option($data, $select = '')
    {
        foreach ($data as $key => $value) {
            $id = $value['optionKey'];
            $name = $value['optionValue'];
            if ($select != '' && $id == $select) {
                echo "<option value='$id' selected='selected'> $name</option>";
            } else {
                echo "<option value='$id' > $name</option>";
            }
        }
    }

    function optionMultiple($data, $parent = 0, $str = "--", $select = 0)
    {
        foreach ($data as $key => $value) {
            $id = $value['optionKey'];
            $name = $value['optionValue'];
            $parentID = $value['optionParent'];
            if ($parentID == $parent) {
                if ($select != 0 && $id == $select) {
                    echo "<option value='$id' selected='selected'>$str $name</option>";
                } else {
                    echo "<option value='$id' >$str $name</option>";
                }
            }
        }
    }

    // tim phan tu trong chuoi co dau phay
    public function checkExistOfString($element, $string)
    {
        $array = explode(",", $string);    //chuyen chuoi thành 1 mang
        return in_array($element, $array);
    }

    public function getSubListNew($list_1, $list_2)
    {
        $list_new = "";
        $array_1 = explode(",", $list_1);
        foreach ($array_1 as $key => $value) {
            if (!$this->checkExistOfString($value, $list_2)) {
                $list_new .= $value . ",";
            }
        }
        return substr($list_new, 0, strlen($list_new) - 1);
    }

    function dotNumber($strNum)
    {
        $result = "";
        $len = strlen($strNum);
        $counter = 3;
        while ($len - $counter >= 0) {
            $con = substr($strNum, $len - $counter, 3);
            $result = '.' . $con . $result;
            $counter += 3;
        }
        $con = substr($strNum, 0, 3 - ($counter - $len));
        $result = $con . $result;
        if (substr($result, 0, 1) == '.') {
            $result = substr($result, 1, $len + 1);
        }
        return $result;
    }

    function objectToArray($data)
    {
        if (is_array($data) || is_object($data)) {
            $result = array();
            foreach ($data as $key => $value) {
                $result[$key] = object_to_array($value);
            }
            return $result;
        }
        return $data;
    }

    #========== ========== ========= DATE =========== ========== =========
    function carbonNow()
    {
        return Carbon::now();
    }

    function carbonNowAddYears($years)
    {
        return Carbon::now()->addYears($years);
    }

    function carbonNowAddMonths($month)
    {
        return Carbon::now()->addMonths($month);
    }

    function carbonNowAddDays($days)
    {
        return Carbon::now()->addDays($days);
    }

    function createdAt()
    {
        #return date('Y-m-d H:i:s');
        return \Carbon\Carbon::now();
    }

    function getTimeCode()
    {
        $code = date("y") . date("m") . date("d") . date("H") . date("i") . date("s");
        return $code;
    }

    # -------- plus year\month\day\ for current date (no time)--------
    function currentDatePlusYear($yearNumber = 0)
    {
        return date('Y-m-d', strtotime("+$yearNumber year", strtotime(date("Y-m-d"))));
    }

    function currentDatePlusMonth($monthNumber = 0)
    {
        return date('Y-m-d', strtotime("+$monthNumber month", strtotime(date("Y-m-d"))));
    }

    function currentDatePlusDay($monthNumber = 0)
    {
        return date('Y-m-d', strtotime("+$monthNumber day", strtotime(date("Y-m-d"))));
    }

    # -------- plus year\month\day\ for current date time--------
    function currentDateTimePlusYear($yearNumber = 0)
    {
        return date('Y-m-d H:j:s', strtotime("+$yearNumber year", strtotime(date("Y-m-d H:i:s"))));
    }

    function currentDateTimePlusMonth($monthNumber = 0)
    {
        return date('Y-m-d H:i:s', strtotime("+$monthNumber month", strtotime(date("Y-m-d H:i:s"))));
    }

    function currentDateTimePlusDay($monthNumber = 0)
    {
        return date('Y-m-d H:i:s', strtotime("+$monthNumber day", strtotime(date("Y-m-d H:i:s"))));
    }

    # ========== ========== ========== upload image file ========== ========== ==========
    function getTypeImg($image)
    {
        $array = explode('.', $image);
        return end($array);
    }

    function selectOneImage($id = '', $name = '', $typeImage = '', $widthImgView = '', $heightImgView = '')
    {
        $widthImgView = (!empty($widthImgView)) ? $widthImgView : 150;
        $heightImgView = (!empty($heightImgView)) ? $heightImgView : 100;
        ?>
        <div>
            <div>
                <input id="<?php echo $id; ?>" name="<?php echo $name; ?>"
                       onchange="tf_main.tf_selectOneImage(this,'#wrapView_<?php echo $name; ?>','viewImage_<?php echo $name; ?>','<?php echo $typeImage; ?>')"
                       type="file">
            </div>
            <div id="wrapView_<?php echo $name; ?>" class="tf-vertical-bottom" style="display: none;">
                <img id="viewImage_<?php echo $name; ?>" class="tf-margin-10"
                     style="max-width:<?php echo $widthImgView ?>px;max-height: <?php echo $heightImgView ?>px;"/>
                <span id="cancel_<?php echo $name; ?>" class="tf-cursor-pointer"
                      onclick="tf_main.tf_cancelOneImage('#<?php echo $id; ?>','#wrapView_<?php echo $name; ?>');">Cancel</span>
            </div>
        </div>
        <?php
    }

    # select image on size
    function selectOneImageFollowSize($id = '', $name = '', $typeImage = '', $idImageCheck = '', $limitSize = '', $limitWidth = '', $limitHeight = '', $widthImgView = '', $heightImgView = '')
    {
        $widthImgView = (!empty($widthImgView)) ? $widthImgView : 150;
        $heightImgView = (!empty($heightImgView)) ? $heightImgView : 100;
        ?>
        <div>
            <div>
                <input id="<?php echo $id; ?>" name="<?php echo $name; ?>" data-size="<?php echo $limitSize ?>"
                       data-width="<?php echo $limitWidth ?>" data-height="<?php echo $limitHeight ?>"
                       onchange="tf_main.tf_selectOneImageFollowSize(this,'#wrapView_<?php echo $name; ?>','viewImage_<?php echo $name; ?>','<?php echo $typeImage; ?>','<?php echo $idImageCheck; ?>')"
                       type="file">
            </div>
            <div id="wrapView_<?php echo $name; ?>" class=" tf-vertical-bottom" style="display: none;">
                <img id="viewImage_<?php echo $name; ?>" class="tf-margin-10"
                     style="max-width:<?php echo $widthImgView ?>px;max-height: <?php echo $heightImgView ?>px;"/>
                <img id="<?php echo $idImageCheck; ?>" style="display: none;" alt="image"/>
                <span id="cancel_<?php echo $name; ?>" class="tf-cursor-pointer"
                      onclick="tf_main.tf_cancelOneImage('#<?php echo $id; ?>','#wrapView_<?php echo $name; ?>');">Cancel</span>
            </div>
        </div>
        <?php
    }

    public function uploadSave($file, $pathSmall, $pathFull, $imageName, $smallSize = null)
    {
        $hImageResize = new imageResize();
        $smallSize = (is_null($smallSize)) ? 200 : $smallSize; // default 200px
        if ($file->move($pathFull, $imageName)) {
            # create small image
            $size = getimagesize($pathFull . $imageName);        // lay thong tin size cua hinh anh
            $widthSize = intval($size[0]);
            $heightSize = intval($size[1]);
            if ($widthSize >= $heightSize) {
                if ($widthSize > $smallSize) {
                    $hImageResize->load($pathFull . $imageName);
                    $hImageResize->resizeToWidth($smallSize);
                    $hImageResize->save($pathSmall . $imageName); // luu ten moi , kich thuoc moi

                } else {
                    copy($pathFull . $imageName, $pathSmall . $imageName);
                }

            } else {
                if ($heightSize > $smallSize) {
                    $hImageResize->load($pathFull . $imageName);
                    $hImageResize->resizeToHeight($smallSize);
                    $hImageResize->save($pathSmall . $imageName); // luu ten moi , kich thuoc moi
                } else {
                    copy($pathFull . $imageName, $pathSmall . $imageName);
                }

            }
            return true;
        } else {
            return false;
        }
    }

    # ========== ========== ========== GENERAL ========== ========== ==========
    # go to url
    public function goToUrl($url)
    {
        echo "<script type='text/javascript'>window.location ='$url'; </script>";
    }

    # get Client IP
    public function getClientIP()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        return $ip;
    }

    # ======= Page ================
    function page($data)
    {
        echo "<ul class='pagination page-tool'>";
        $lastPage = $data->lastPage();
        $currentPage = $data->currentPage();
        $viewPage = 5;
        if (($currentPage + $viewPage) < $lastPage) {
            $limitPage = $currentPage + $viewPage;
        } else {
            $limitPage = $lastPage;
        }
        if ($currentPage > 5) {
            $i = $currentPage - 4;
        } else {
            $i = 1;
        }
        if ($currentPage != 1) {
            $hrefFirst = str_replace('/?', '?', $data->url(1));
            $hrefPrev = str_replace('/?', '?', $data->url($currentPage - 1));
            echo "
                <li>
                    <a href ='$hrefFirst' > First</a >
                </li >
                <li >
                    <a href ='$hrefPrev' > Prev</a >
                </li >";
        }
        for ($i; $i <= $limitPage; $i++) {
            if ($currentPage == $i) $active = 'active'; else $active = '';
            $hrefCenter = str_replace('/?', '?', $data->url($i));
            echo "
                <li class='$active' >
                    <a href = '$hrefCenter'>$i</a >
                </li >";
        }
        if ($currentPage != $lastPage && $lastPage > 1) {
            $hrefNext = str_replace('/?', '?', $data->url($currentPage + 1));
            $hrefLast = str_replace('/?', '?', $data->url($lastPage));
            echo "
            <li >
                <a href = '$hrefNext' > Next</a >
            </li >
            <li >
                <a href = '$hrefLast' > Last</a >
            </li >";
        }
        echo "</ul>";
    }


}

?>