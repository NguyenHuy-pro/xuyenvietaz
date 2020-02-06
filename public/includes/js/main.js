//==========  ==========  ==========  GENERAL ========== ========== ==========
var xv_main = {
    confirmDelete: function (smg) {
        if (window.confirm(smg)) {
            return true;
        }
        return false;
    },
    empty: function (object) {
        if ($(object).length > 0) $(object).empty();
    },
    remove: function (object) {
        if ($(object).length > 0) $(object).remove();
    },
    show: function (object) {
        if ($(object).length > 0) $(object).show();
    },
    hide: function (object) {
        if ($(object).length > 0) $(object).hide();
    },
    toggle: function (object) {
        if ($(object).length > 0) $(object).toggle();
    },
    window: {
        reload: function () {
            window.location.reload();
        },
        replace: function (newurl) {
            window.location.replace(newUrl);
        }
    },
    check:{
        stringValid:function(str, strHandle){
            if (str.length > 0) {
                for (var $i = 0; $i <= strHandle.length; $i++) {
                    if (str.indexOf(strHandle.charAt($i)) > 0)
                        return false;
                }
            }
            return true;
        },

        //---------- ---------- Email ---------- ----------
        emailRegex:function(email){
            if (email == "") return false;
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) result = true;     //cach 1 ko cho cham(dau email)
            // var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;    ////cach 2 cho cham(dau email)
            if (email.indexOf(" ") > 0) return false;
            //if(regex.test($Email)) $res = true;
            return true;
        },
        emailJavascript:function(email){
            if (email == "") return false;
            if (email.indexOf(" ") > 0) return false;
            if (email.indexOf("@") == -1) return false;
            var i = 1;
            var sLength = email.length;
            if (email.indexOf(".") == -1) return false;
            if (email.indexOf("..") != -1) return false;
            if (email.indexOf("@") != s.lastIndexOf("@")) return false;
            if (email.lastIndexOf(".") == s.length - 1) return false;
            var str = "abcdefghikjlmnopqrstuvwxyz-@._0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            for (var j = 0; j < email.length; j++) {
                if (str.indexOf(email.charAt(j)) == -1)return false;
            }
            return true;
        },

        //---------- ---------- check input text ---------- ----------
        inputNull: function (object, smg) {
            var v = $(object).val();
            if (v == '') {
                if (smg.length > 0) alert(smg);
                $(object).focus();
                return true;
            } else {
                return false;
            }
        },
        inputMaxLength: function (object, limit, smg) {
            var v = $(object).val();
            if (v.length > limit) {
                if (smg.length > 0) alert(smg);
                $(object).focus();
                return true;
            } else {
                return false;
            }
        },
        inputMinLength: function (object, limit, smg) {
            var v = $(object).val();
            if (v.length < limit) {
                if (smg.length > 0) alert(smg);
                $(object).focus();
                return true;
            } else {
                return false;
            }
        },

        //---------- ---------- upload file ---------- ----------
        file: function (fileUp, typeCheck) {
            var extension = fileUp.split('.').pop().toLowerCase();
            if ($.inArray(extension, typeCheck.split(',')) == -1) {
                return false;
            }
            else {
                return true;
            }
        },
        fileValid: function (fileUp, typeCheck, smg) {
            if (!wcMain.check.file(fileUp, typeCheck)) {
                if (smg.length) alert(smg);
                return false;
            } else {
                return true
            }
        },

    },
    select:{
        //view image upload
        image:function(file, wrapView, idViewImage, typeSelect){
            //file: id cua file upload
            //wrapView : id contain view
            // idViewImage: image view
            //typeSelect : type of select file
            if (typeSelect == '') typeSelect = 'gif,jpg,jpge,png'; //default
            var photo = $(file).val();
            if (!wcMain.check.file(photo, typeSelect)) {
                alert('Invalid ! File type: ' + typeSelect);
                $(file).val('');
                $(file).focus();
                return false;
            }
            var reader = new FileReader();
            reader.onload = function (e) {
                var img = document.getElementById(idViewImage);
                img.src = e.target.result;
                img.style.display = 'inline';
            };
            reader.readAsDataURL(file.files[0]);
            $(wrapView).show();
        },
        // view image upload follow size
        imageFollowSize:function(file, wrapView, idViewImage, typeSelect, idImageCheckSize){
            //file: id cua file upload
            //wrapView : id contain view
            // idViewImage: image view
            //typeSelect : type of select file
            if (typeSelect == '') typeSelect = 'gif,jpg,jpge,png';
            var photo = $(file).val();
            if (!wcMain.check.file(photo, typeSelect)) {
                alert('Invalid ! File type: ' + typeSelect);
                $(file).val('');
                $(file).focus();
                return false;
            }
            var reader = new FileReader();
            reader.onload = function (e) {
                var img = document.getElementById(idViewImage);
                img.src = e.target.result;
                img.style.display = 'inline';

                var checkImg = document.getElementById(idImageCheckSize);
                checkImg.src = e.target.result;
            };
            reader.readAsDataURL(file.files[0]);
            $(wrapView).show();
        },
        imageCancel:function(idFile, wrapView){
            $(idFile).val('');
            $(wrapView).hide();
        }
    }
};