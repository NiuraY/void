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
<!--_header 作为公共模版分离出去-->
<header class="navbar-wrapper">
    <div class="navbar navbar-fixed-top">
        <div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">H-ui.admin</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a>
            <span class="logo navbar-slogan f-l mr-10 hidden-xs">v3.0</span>
            <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
            <nav class="nav navbar-nav">
                <ul class="cl">
                    <li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" onclick="article_add('添加资讯','article-add.html')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>
                            <li><a href="javascript:;" onclick="picture_add('添加资讯','picture-add.html')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>
                            <li><a href="javascript:;" onclick="product_add('添加资讯','product-add.html')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>
                            <li><a href="javascript:;" onclick="member_add('添加用户','member-add.html','','510')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
                </ul>
            </li>
        </ul>
    </nav>
            <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
                <ul class="cl">
                    <li>超级管理员</li>
                    <li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A">admin <i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
                            <li><a href="#">切换账户</a></li>
                            <li><a href="#">退出</a></li>
                </ul>
            </li>
                    <li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
                    <li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
                            <li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
                            <li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
                            <li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
                            <li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
                            <li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
</div>
</header>
<!--/_header 作为公共模版分离出去-->
<!--_menu 作为公共模版分离出去-->
<aside class="Hui-aside">

    <div class="menu_dropdown bk_2">
        <dl id="menu-article">
            <dt><i class="Hui-iconfont">&#xe616;</i> 资讯管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="article-list.html" title="资讯管理">资讯管理</a></li>
        </ul>
    </dd>
</dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe613;</i> 图片管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="picture-list.html" title="图片管理">图片管理</a></li>
        </ul>
    </dd>
</dl>
        <dl id="menu-product">
            <dt><i class="Hui-iconfont">&#xe620;</i> 产品管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="product-brand.html" title="品牌管理">品牌管理</a></li>
                    <li><a href="product-category.html" title="分类管理">分类管理</a></li>
                    <li><a href="product-list.html" title="产品管理">产品管理</a></li>
        </ul>
    </dd>
</dl>
        <dl id="menu-comments">
            <dt><i class="Hui-iconfont">&#xe622;</i> 评论管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="http://h-ui.duoshuo.com/admin/" title="评论列表">评论列表</a></li>
                    <li><a href="feedback-list.html" title="意见反馈">意见反馈</a></li>
        </ul>
    </dd>
</dl>
        <dl id="menu-member">
            <dt><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="member-list.html" title="会员列表">会员列表</a></li>
                    <li><a href="member-del.html" title="删除的会员">删除的会员</a></li>
                    <li><a href="member-level.html" title="等级管理">等级管理</a></li>
                    <li><a href="member-scoreoperation.html" title="积分管理">积分管理</a></li>
                    <li><a href="member-record-browse.html" title="浏览记录">浏览记录</a></li>
                    <li><a href="member-record-download.html" title="下载记录">下载记录</a></li>
                    <li><a href="member-record-share.html" title="分享记录">分享记录</a></li>
        </ul>
    </dd>
</dl>
        <dl id="menu-admin">
            <dt><i class="Hui-iconfont">&#xe62d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="admin-role.html" title="角色管理">角色管理</a></li>
                    <li><a href="admin-permission.html" title="权限管理">权限管理</a></li>
                    <li><a href="admin-list.html" title="管理员列表">管理员列表</a></li>
        </ul>
    </dd>
</dl>
        <dl id="menu-tongji">
            <dt><i class="Hui-iconfont">&#xe61a;</i> 订单管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="<?php echo U('Orders/index');?>" title="订单管理">订单管理</a></li>
        </ul>
    </dd>
</dl>
        <dl id="menu-system">
            <dt><i class="Hui-iconfont">&#xe62e;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a href="system-base.html" title="系统设置">系统设置</a></li>
                    <li><a href="system-category.html" title="栏目管理">栏目管理</a></li>
                    <li><a href="system-data.html" title="数据字典">数据字典</a></li>
                    <li><a href="system-shielding.html" title="屏蔽词">屏蔽词</a></li>
                    <li><a href="system-log.html" title="系统日志">系统日志</a></li>
        </ul>
    </dd>
</dl>
</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<!--/_menu 作为公共模版分离出去-->

<section class="Hui-article-box">
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 订单管理 <span class="c-gray en">&gt;</span> 订单管理<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="Hui-article">
            <article class="cl pd-20">
            <div class="text-c"> 日期范围：
                <input type="text" onfocus="WdatePicker({maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}'})" id="datemin" class="input-text Wdate" style="width:120px;">
                -
                <input type="text" onfocus="WdatePicker({minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d'})" id="datemax" class="input-text Wdate" style="width:120px;">
                <input type="text" class="input-text" style="width:250px" placeholder="输入会员名称、电话、邮箱" id="" name="">
                <button type="submit" class="btn btn-success radius" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜订单</button>
            </div>

            <div class="mt-20">
                <table class="table table-border table-bordered table-hover table-bg table-sort">
                    <thead>
                        <tr class="text-c">
                            <th width="40">ID</th>
                            <th width="100">订单编号</th>
                            <th width="60">用户ID</th>
                            <th width="70">收件人</th>
                            <th width="100">收件人号码</th>
                            <th width="150">地址</th>
                            <th width="250">留言</th>
                            <th width="65">邮编</th>
                            <th width="100">下单时间</th>
                            <th width="70">状态</th>
                            <th width="70">总价</th>
                            <th width="80">操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($ordersData)): foreach($ordersData as $k=>$v): ?><tr class="text-c" oid="<?php echo ($v["id"]); ?>">
                            <td><?php echo ($v["id"]); ?></td>
                            <td><?php echo ($v["ordernum"]); ?></td>
                            <td><?php echo ($v["uid"]); ?></td>
                            <td><?php echo ($v["getman"]); ?></td>
                            <td><?php echo ($v["phone"]); ?></td>
                            <td class="text-l"><?php echo ($v["address"]); ?></td>
                            <td class="text-l"><?php echo ($v["message"]); ?></td>
                            <td><?php echo ($v["code"]); ?></td>
                            <td><?php echo ($v["addtime"]); ?></td>
                            <td class="td-status"><span class="label label-success radius"><?php echo ($v["status"]); ?></span></td>
                            <td><?php echo ($v["total"]); ?></td>
                            <td class="td-manage"><a style="text-decoration:none" href="<?php echo U('detail', ['id' => $v['id']]);?>" title="查看详情"><i class="Hui-iconfont">&#xe631;</i></a> <a title="编辑" href="javascript:;" onclick="order_edit('<?php echo U('edit', ['id' => $v['id']]);?>','<?php echo ($v["id"]); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onclick="change_status(this,'<?php echo ($v["id"]); ?>')" href="javascript:;" title="修改状态"><i class="Hui-iconfont">&#xe63f;</i></a></td>
                        </tr><?php endforeach; endif; ?>
                    </tbody>
                </table>
            </div>
        </article>

        <div style="margin-top:15px; text-align:center;" id="pageShow"></div>
        <script type="text/javascript" src="/git/www/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
        <script type="text/javascript" src="/git/www/Public/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="/git/www/Public/Admin/layui/layui.js"></script>
        <link rel="stylesheet" type="text/css" href="/git/www/Public/Admin/layui/css/layui.css" />
        <script>
            layui.use('laypage', function(){
                    var laypage = layui.laypage;

                    laypage.render({
                        elem: 'pageShow' //ID
                        ,count: <?php echo ($pageTotal); ?> //数据总数
                        ,limit: 5
                        ,jump: function(obj, first){
                            // console.log(obj.curr); //当前页，
                            // console.log(obj.limit); //每页显示的条数

                            //首次不执行
                            if(!first){
                                $.ajax({
                                    type:'get',
                                    url:"<?php echo U('index');?>",
                                    data: {'page': obj.curr},
                                    success:function(res){
                                        $('tbody tr').remove();
                                        pageBtn = '';
                                        for(var k in res) {
                                            pageBtn += '<tr class="text-c" oid="' + res[k].id + '"><td>' + res[k].id + '</td><td>' + res[k].ordernum + '</td><td>' + res[k].uid + '</td><td>' + res[k].getman + '</td><td>' + res[k].phone + '</td><td class="text-l">' + res[k].address + '</td><td class="text-l">' + res[k].message + '</td><td>' + res[k].code + '</td><td>' + res[k].addtime + '</td><td class="td-status"><span class="label label-success radius">' + res[k].status + '</span></td><td>' + res[k].total + '</td><td class="td-manage"><a style="text-decoration:none"  href="/git/www/Orders/detail/id/' + res[k].id + '.html" title="查看详情"><i class="Hui-iconfont">&#xe631;</i></a> <a title="编辑" href="javascript:;" onclick="order_edit(\'/git/www/Orders/edit/id/' + res[k].id + '.html\',\''+ res[k].id +'\')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onclick="change_status(this,\''+ res[k].id +'\')" href="javascript:;" title="修改状态"><i class="Hui-iconfont">&#xe63f;</i></a></td></tr>';
                                        }
                                        $('tbody').html(pageBtn);
                                    }
                                })
                            }
                          }
                    });

                });

            /*订单-编辑*/
            function order_edit(url,id){
                layer.open({
                    type: 2,
                    content: [url, 'no'],
                    area: ['800px', '360px'],
                    closeBtn: 0,
                    btn: ['修改', '返回'],
                    yes: function(index, layero){
                        // 获取表单信息
                        var form = $(layero).find("iframe")[0].contentWindow.document.getElementById("form-orders-edit");
                        // 准备修改数据
                        var getman = $(form).find('#getman').val();
                        var phone = $(form).find('#phone').val();
                        var code = $(form).find('#code').val();
                        var province = $(form).find('.select[name=province]').val();
                        var city = $(form).find('.select[name=city]').val();
                        var area = $(form).find('.select[name=area]').val();

                        var address = $(form).find('#address').val();
                        // 拼接地址
                        address = province+','+city+','+area+','+address;
                        // ajax修改数据
                        $.ajax({
                            url: '<?php echo U("edit");?>',
                            type: 'post',
                            data: {'id': id ,'getman': getman, 'phone': phone, 'code': code, 'address': address},
                            success: function(data) {
                                if (data.row > 0) {
                                    delete data.row;
                                    layer.msg('修改订单成功');
                                    layer.close(index);

                                    $('tr[oid='+ id +']').html('<td>'+ data.id +'</td><td>'+ data.ordernum +'</td><td>'+ data.uid +'</td><td>'+ data.getman +'</td><td>'+ data.phone +'</td><td class="text-l">'+ data.allAddress +'</td><td class="text-l">'+ data.message +'</td> <td>'+ data.code +'</td><td>'+ data.addtime +'</td><td class="td-status"><span class="label label-success radius">'+ data.status +'</span></td><td>'+ data.total +'</td><td class="td-manage"><a style="text-decoration:none"  href="/git/www/Orders/detail/id/' + data.id + '.html" title="查看详情"><i class="Hui-iconfont">&#xe631;</i></a> <a title="编辑" href="javascript:;" onclick="order_edit(\'/git/www/Orders/edit/id/' + data.id + '.html\',\''+ data.id +'\')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onclick="change_status(this,\''+ data.id +'\')" href="javascript:;" title="修改状态"><i class="Hui-iconfont">&#xe63f;</i></a></td>');
                                } else {
                                    layer.msg('修改订单失败，请确认订单状态再修改',{icon:2,time:2000});
                                    layer.close(index);
                                }
                            }
                        });
                    },
                    cancel: function(index) {
                        layer.close(index);
                    },
                    success: function(layero){
                      layero.find('.layui-layer-btn').css('text-align', 'center')
                    }
                });
            }
            /*订单-修改状态*/
            function change_status(obj,id){
                var status = $('tr[oid='+ id +']').find('.radius').html();

                if (status == '待发货') {
                    var msg = '确认该订单已经发货？';
                    var status = '待收货';
                } else if (status == '退货中'|| status == '退款中') {
                    var msg = '确认要将该订单退货/款？';
                    var status = '已取消';
                } else {
                    layer.msg('请确认订单状态再做修改',{icon:2,time:2000});
                    return false;
                }
                layer.confirm(msg, {
                    // $(obj).parents("tr").remove();
                    btn: ['确认', '取消'],
                    yes: function (index,layero) {
                        $.ajax({
                            url: '<?php echo U("changeStatus");?>',
                            data: {'id': id},
                            success: function (res) {
                                console.log(res);
                                if (res > 0) {
                                    layer.msg('修改订单状态成功!',{icon:1,time:2000});
                                    $('tr[oid='+ id +']').find('.radius').html(status);
                                } else {
                                    layer.msg('修改订单状态失败!',{icon:2,time:2000});
                                }
                            }
                        });
                    },
                    cancel: function(index) {
                        layer.close(index);
                    }
                });
            }
        </script>

<footer class="footer">
            <p>感谢jQuery、layer、laypage、Validform、UEditor、My97DatePicker、iconfont、Datatables、WebUploaded、icheck、highcharts、bootstrap-Switch<br> Copyright &copy;2015 H-ui.admin v3.0 All Rights Reserved.<br> 本后台系统由<a href="http://www.h-ui.net/" target="_blank" title="H-ui前端框架">H-ui前端框架</a>提供前端技术支持</p>
</footer>
</div>
</section>

</body>
</html>