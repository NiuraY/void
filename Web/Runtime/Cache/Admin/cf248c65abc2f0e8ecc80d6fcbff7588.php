<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="favicon.ico" >
<link rel="Shortcut Icon" href="favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/git/www/Public/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/git/www/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/git/www/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/git/www/Public/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/git/www/Public/Admin/static/h-ui.admin/css/style.css" />
<script type="text/javascript" src="/git/www/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/git/www/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/git/www/Public/Admin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/git/www/Public/Admin/static/h-ui.admin/js/H-ui.admin.page.js"></script>

<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>H-ui.admin v3.0</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>

<body>
<article class="cl pd-20">
    <form action="" method="post" class="form form-horizontal" id="form-orders-edit">
        <input type="hidden" name="id" value="<?php echo I('id');?>">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>收件人：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo ($data["getman"]); ?>" placeholder="收件人" id="getman" name="getman">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>收件人号码：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo ($data["phone"]); ?>" placeholder="手机号码" id="phone" name="phone">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>邮编：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo ($data["code"]); ?>" placeholder="邮箱" id="code" name="code">
            </div>
        </div>
        <div class="row cl" id="area">
            <label class="form-label col-xs-4 col-sm-3">所在城市：</label>
            <div class="formControls col-xs-8 col-sm-9" style="width: 190px"> <span class="select-box">
                <select class="select" size="1" name="province">
                    <option value="<?php echo ($data["proVal"]); ?>" selected><?php echo ($data["province"]); ?></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
                </span> </div>
                <div class="formControls col-xs-8 col-sm-9" style="width: 190px"> <span class="select-box">
                <select class="select" size="1" name="city">
                    <option value="<?php echo ($data["cityVal"]); ?>" selected><?php echo ($data["city"]); ?></option>
                    <?php if(is_array($cityData)): foreach($cityData as $k=>$v): ?><option value="<?php echo ($k); ?>"><?php echo ($v); ?></option><?php endforeach; endif; ?>
                </select>
                </span> </div>
                <div class="formControls col-xs-8 col-sm-9" style="width: 190px"> <span class="select-box">
                <select class="select" size="1" name="area">
                    <option value="<?php echo ($data["areaVal"]); ?>" selected><?php echo ($data["area"]); ?></option>
                    <?php if(is_array($areaData)): foreach($areaData as $k=>$v): ?><option value="<?php echo ($k); ?>"><?php echo ($v); ?></option><?php endforeach; endif; ?>
                </select>
                </span> </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>详细地址：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo ($data["address"]); ?>" placeholder="详细地址" id="address" name="address">
            </div>
        </div>
    </form>
</article>

<script type="text/javascript" src="/git/www/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/git/www/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/git/www/Public/Admin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/git/www/Public/Admin/static/h-ui.admin/js/H-ui.admin.page.js"></script>
<script type="text/javascript" src="/git/www/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/git/www/Public/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/git/www/Public/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/git/www/Public/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript">
/*地址三级联动--显示省份*/
$('#form-orders-edit select[name=province]').one('focus', function () {
    // ajax请求
    $.ajax({
        url: '<?php echo U("changeProvince");?>',
        success: function(data) {
            // 清空下拉框
            $('#form-orders-edit select[name=province]').html('<option value="<?php echo ($data["proVal"]); ?>" selected><?php echo ($data["province"]); ?></option>');
            for (var k in data) {
                $('<option></option>').html(data[k].area_name).val(data[k].id).appendTo('#form-orders-edit select[name=province]');
            }
        }
    });
});
/*地址三级联动--显示市*/
$('#form-orders-edit select[name=province]').change(function() {
    // 清空下级的选项
    $('#form-orders-edit select[name=city]').html('<option value="" selected>请选择市</option>');
    $('#form-orders-edit select[name=area]').html('<option value="" selected>请选择区</option>');

    // ajax请求
    $.ajax({
        url: '<?php echo U("changeArea");?>',
        data: {'pid': this.value},
        success: function(data) {
            for (var k in data) {
                $('<option></option>').html(data[k].area_name).val(data[k].id).appendTo('#form-orders-edit select[name=city]');
            }
        }
    });
});
/*地址三级联动--显示区*/
$('#form-orders-edit select[name=city]').change(function() {
    // 清空下级的选项
    $('#form-orders-edit select[name=area]').html('<option value="" selected>请选择区</option>');

    // ajax请求
    $.ajax({
        url: '<?php echo U("changeArea");?>',
        data: {'pid': this.value},
        success: function(data) {
            for (var k in data) {
                $('<option></option>').html(data[k].area_name).val(data[k].id).appendTo('#form-orders-edit select[name=area]');
            }
        }
    });
});


// $(function(){
//     $('.skin-minimal input').iCheck({
//         checkboxClass: 'icheckbox-blue',
//         radioClass: 'iradio-blue',
//         increaseArea: '20%'
//     });

//     $("#form-orders-edit").validate({
//         rules:{
//             username:{
//                 required:true,
//                 minlength:2,
//                 maxlength:16
//             },
//             sex:{
//                 required:true,
//             },
//             mobile:{
//                 required:true,
//                 isMobile:true,
//             },
//             email:{
//                 required:true,
//                 email:true,
//             },
//             uploadfile:{
//                 required:true,
//             },

//         },
//         onkeyup:false,
//         focusCleanup:true,
//         success:"valid",
//         submitHandler:function(form){
//             $(form).ajaxSubmit();
//             var index = parent.layer.getFrameIndex(window.name);
//             parent.$('.btn-refresh').click();
//             parent.layer.close(index);
//         }
//     });
// });
</script>
</body>
</html>