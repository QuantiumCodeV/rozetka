<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="pixel-ratio-2 retina">

<head>
  <style>
    :root {

      --image-path: url('<?php echo asset("/assets/foot_nav.png")?>');

      --image-path2: url('<?php echo asset("/assets/dd_icon.png")?>');
    }
  </style>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
  <title>Wildberries</title>
  <meta name="keywords" content="Платформа обратного выкупа для российских торговцев" />
  <meta name="description"
    content="Коллекции женской, мужской и детской одежды, обуви, а также товары для дома и спорта. Информация о доставке и оплате. Таблицы размеров, советы по уходу за вещами." />
  <meta name="format-detection" content="telephone=no" />
  <link rel="shortcut icon" type="image/ico" href="<?php echo asset("assets/favicon.ico") ?>" />
  <style>
    :root {

      --image-path: url('<?php echo asset("/assets/foot_nav.png")?>');

    }

    /*公共样式表部分开始*/
    body {
      margin: 0 auto;
      font-size: 14px;
      font-family: "微软雅黑", Arial, Helvetica, sans-serif;
      color: #333;
      line-height: 20px;
      background: #fff;
      max-width: 640px;
      min-width: 300px;
    }

    a {
      color: #333;
      text-decoration: none;
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    a:hover {
      color: #ff0000;
      text-decoration: none;
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
      -webkit-tap-highlight-color: transparent;
    }

    ol,
    ul,
    li,
    dl,
    dd,
    dt {
      list-style: none;
    }

    h1,
    h2,
    h3 {
      font-size: 14px;
    }

    .clear {
      clear: both;
      height: 0;
      overflow: hidden;
    }

    div,
    dl,
    dt,
    dd,
    ul,
    ol,
    li,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    pre,
    code,
    form,
    fieldset,
    legend,
    input,
    button,
    textarea,
    p,
    blockquote,
    th,
    td {
      margin: 0;
      padding: 0;
    }

    input,
    textarea,
    select {
      outline: none;
    }

    table {
      border-collapse: collapse;
    }

    textarea {
      font-size: 13px;
      line-height: 22px;
    }

    .center {
      text-align: center;
    }

    img {
      border: 0;
    }

    .cred {
      color: #F14D59;
    }

    .cred1 {
      color: #C70404;
    }

    .corg {
      color: #FC6D02;
    }

    .cgreen {
      color: #090;
    }

    .cblue {
      color: #005BB5;
    }

    .c555 {
      color: #555
    }

    .c666 {
      color: #666
    }

    .c888 {
      color: #888
    }

    .c999 {
      color: #999
    }

    .c333 {
      color: #333
    }

    .cbbb {
      color: #bbb;
    }

    .fl {
      float: left;
    }

    .fr {
      float: right;
    }

    .mat2 {
      margin-top: 2px;
    }

    .mat3 {
      margin-top: 3px;
    }

    .mat5 {
      margin-top: 5px;
    }

    .mat8 {
      margin-top: 8px;
    }

    .mat10 {
      margin-top: 10px;
    }

    .mat12 {
      margin-top: 12px;
    }

    .mat15 {
      margin-top: 15px;
    }

    .mat20 {
      margin-top: 20px;
    }

    .mat30 {
      margin-top: 30px;
    }

    .mab5 {
      margin-bottom: 5px;
    }

    .mab8 {
      margin-bottom: 8px;
    }

    .mab10 {
      margin-bottom: 10px;
    }

    .mab15 {
      margin-bottom: 15px;
    }

    .mab20 {
      margin-bottom: 20px;
    }

    .mar3 {
      margin-right: 3px;
    }

    .mar5 {
      margin-right: 5px;
    }

    .mar10 {
      margin-right: 10px;
    }

    .mar15 {
      margin-right: 15px;
    }

    .mal5 {
      margin-left: 5px;
    }

    .mal10 {
      margin-left: 10px;
    }

    .mal15 {
      margin-left: 15px;
    }

    .mal20 {
      margin-left: 20px;
    }

    .mal8 {
      margin-left: 8px;
    }

    .font11 {
      font-size: 11px;
    }

    .font12 {
      font-size: 12px;
    }

    .font13 {
      font-size: 13px;
    }

    .font14 {
      font-size: 14px;
    }

    .font15 {
      font-size: 15px;
    }

    .font16 {
      font-size: 16px;
    }

    .font18 {
      font-size: 18px;
    }

    .font20 {
      font-size: 20px;
    }

    .more {
      float: right;
      color: #999;
      font-size: 12px;
      padding-right: 10px;
      font-weight: normal;
    }

    .more a:hover {
      color: #ff4400;
    }

    .num {
      font-family: "Arial";
    }

    .num1 {
      font-family: "verdana";
    }

    .strong {
      font-weight: bold;
    }

    .normal {
      font-weight: normal;
    }

    .xuxian {
      border-bottom: 1px dashed #ccc;
      margin: 10px 0;
    }

    .xuxian2 {
      border-bottom: 1px dashed #eee;
      margin: 0 0 0 10px;
    }

    .inputtext {
      height: 24px;
      line-height: 24px;
      border: 1px #cecece solid;
      border-top: 1px #707070 solid;
      border-left: 1px #707070 solid;
      border-radius: 2px;
      padding: 2px 5px;
      font-size: 16px;
      background: #fefefe
    }

    .inputselect {
      line-height: 22px;
      border: 1px #cecece solid;
      border-top: 1px #707070 solid;
      border-left: 1px #707070 solid;
      border-radius: 2px;
      padding: 5px 2px;
      font-size: 14px;
      background: #fefefe
    }

    .inputselect_m {
      width: 100%;
      height: 100%;
      color: #666;
      font-size: 15px;
      height: 41px;
      line-height: 41px;
      appearance: none;
      -moz-appearance: none;
      -webkit-appearance: none;
      border: none;
      padding: 0;
      background: url(../images/select_down.png) no-repeat right center;
    }

    .inputselect_r {
      color: #666;
      height: 42px;
      line-height: 42px;
      font-size: 14px;
      appearance: none;
      -moz-appearance: none;
      -webkit-appearance: none;
      border: none;
      padding: 0;
      padding-right: 12px;
      display: block;
      background: none;
      position: absolute;
      right: 0;
      top: 0;
      opacity: 0;
    }

    .inputall {
      height: 28px;
      line-height: 28px;
      border: 1px #cecece solid;
      border-top: 1px #707070 solid;
      border-left: 1px #707070 solid;
      border-radius: 2px;
      padding: 2px 5px;
      font-size: 14px;
      background: #fefefe
    }

    .inputall30 {
      border: 1px #bababa solid;
      border-right: 1px #ddd solid;
      border-bottom: 1px #ddd solid;
      height: 30px;
      line-height: 30px;
      font-size: 16px;
    }

    textarea {
      font-size: 16px;
      line-height: 24px;
      border: 1px #cecece solid;
      border-top: 1px #707070 solid;
      border-left: 1px #707070 solid;
      border-radius: 2px;
      padding: 2px 5px;
      background: #fefefe
    }

    .input40 {
      width: 40px;
    }

    .input50 {
      width: 50px;
    }

    .input60 {
      width: 60px;
    }

    .input80 {
      width: 80px;
    }

    .input100 {
      width: 100px;
    }

    .input150 {
      width: 150px;
    }

    .input200 {
      width: 200px;
    }

    .input250 {
      width: 250px;
    }

    .input300 {
      width: 300px;
    }

    .input350 {
      width: 350px;
    }

    .input400 {
      width: 400px;
    }

    .input450 {
      width: 450px;
    }

    .input500 {
      width: 500px;
    }

    .input600 {
      width: 600px;
    }

    .inputfix {
      vertical-align: middle;
      margin-top: -2px;
      margin-bottom: 1px;
    }

    .input650 {
      width: 650px;
    }

    .center {
      text-align: center;
    }

    .song {
      font-family: "宋体"
    }

    .divhide {
      display: none;
    }

    /*公共样式表部分结束*/

    /*head Start*/
    .top_box1 {
      position: fixed;
      top: 0;
      width: 100%;
      left: 0;
      z-index: 9999
    }

    /*.pagetop1{background:#fff; color:#333;  border-bottom:1px #eee solid; padding:8px 15px; position:relative;}*/
    .pagetop1 {
      background: linear-gradient(to right, #cb11ab 0, #481173 100%) no-repeat;
      padding: 8px 15px;
      position: relative;
      box-shadow: 0 0 10px rgba(0, 0, 0, .15)
    }

    .top_r {
      position: absolute;
      right: 15px;
      top: 8px
    }

    .top_r a {
      color: #666;
      font-family: '微软雅黑';
      font-size: 14px;
      line-height: 40px;
    }

    .top_logo {
      max-height: 40px;
      position: absolute;
      left: 15px;
    }

    .top_logo img {
      max-height: 40px;
    }

    .sear {
      position: relative;
      border-radius: 8px;
      margin-left: 50px;
      margin-right: 90px;
    }

    /*.sear_input{
  width:100%;
  border:0;
  height:30px;
  line-height:30px;
  float:left;
  background-color: hsla(220,4%,48%,.1);
  border-radius: 8px;
  padding-left:35px;
  font-size:14px;
  color:#666;
  }*/
    .sear_input {
      background: #e9e9e9;
      width: 100%;
      border: 0;
      height: 30px;
      line-height: 30px;
      float: left;
      border-radius: 15px;
      padding-left: 35px;
      font-size: 14px;
      color: #666;
    }



    .sear_tj {
      position: absolute;
      left: 10px;
      top: 0;
      border: 0;
      height: 30px;
      width: 30px;
      line-height: 30px;
      float: left;
      color: #333;
      text-align: center;
    }

    .sear_tj input {
      border: 0;
      height: 30px;
      margin-top: 6px;
      line-height: 30px;
      font-size: 14px;
      background: url(../images/search.png) no-repeat;
      background-size: 18px auto;
      width: 30px;
      cursor: pointer;
    }


    .sear1 {
      max-height: 40px;
      position: absolute;
      right: 15px;
    }

    .sear_tj1 {
      border: 0;
      height: 24px;
      width: 24px;
      line-height: 24px;
      float: right;
      color: #333;
      text-align: center;
    }

    .sear_tj1 input {
      border: 0;
      height: 40px;
      margin-top: 8px;
      line-height: 40px;
      background: url(../images/search22.png) no-repeat;
      background-size: 24px auto;
      width: 40px;
      cursor: pointer;
      display: inline-block;

    }

    .sear_location1 {
      border: 0;
      height: 24px;
      width: 24px;
      line-height: 24px;
      float: right;
      color: #333;
      text-align: center;
      margin-right: 18px;
    }

    .sear_location1 input {
      border: 0;
      height: 40px;
      margin-top: 8px;
      line-height: 40px;
      background: url(../images/location.png) no-repeat;
      background-size: 24px auto;
      width: 40px;
      cursor: pointer;
      display: inline-block;
    }

    .nav {
      background: #fff;
      padding: 5px 0 5px;
    }

    .nav i {
      background: url(../images/icon_tb.png) no-repeat scroll 0 0 / 200px 200px rgba(0, 0, 0, 0);
      display: block
    }

    .nav li {
      width: 25%;
      float: left;
      text-align: center;
      margin-top: 12px;
    }

    .nav li a span {
      font-size: 13px;
      display: block;
      font-family: "微软雅黑";
      color: #666;
      margin-top: 2px;
    }

    .nav i {
      background: url(../images/icon_tb.png) no-repeat scroll 0 0 / 200px 200px rgba(0, 0, 0, 0);
      display: block;
      width: 40px;
      height: 40px;
      margin: 0 auto
    }

    .nav1 i {
      background: url(../images/icon_tb.png) no-repeat scroll 0 0 / 200px 200px rgba(0, 0, 0, 0);
      display: block;
      width: 40px;
      height: 40px;
      margin: 0 auto
    }

    .nav i.nav_i1 {
      background-position: 0 -74px;
    }

    .nav i.nav_i2 {
      background-position: -52px -74px;
    }

    .nav i.nav_i3 {
      background-position: -107px -74px;
    }

    .nav i.nav_i4 {
      background-position: -159px -74px;
    }

    .nav i.nav_i5 {
      background-position: 0 -124px;
    }

    .nav i.nav_i6 {
      background-position: -52px -124px;
    }

    .nav i.nav_i7 {
      background-position: -107px -124px;
    }

    .nav i.nav_i8 {
      background-position: -159px -124px;
    }

    .nav i.nav_i9 {
      background-position: -107px -30px;
    }

    .nav span {
      display: block;
    }

    .fh1 {
      width: 24px;
      height: 24px;
      top: 11px;
      position: absolute;
      left: 8px;
    }

    .fh1 a {
      background: var(--image-path7) no-repeat scroll -188px -95px / 200px 200px;
      display: block;
      width: 20px;
      height: 22px;
    }

    .cd1 {
      padding: 0 10px;
      position: absolute;
      right: 4px;
      top: 13px;
    }

    .cd1 a {
      background: var(--image-path7) no-repeat scroll -123px -95px / 200px 200px;
      display: block;
      width: 20px;
      height: 22px;
    }

    .cd2 {
      padding: 0 10px;
      position: absolute;
      right: 4px;
      top: 10px;
    }

    .cd2 a {
      background: var(--image-path7) no-repeat scroll -68px -61px / 200px 200px;
      display: block;
      width: 20px;
      height: 22px;
    }

    .pagetop {
      background: #fafafa;
      border-bottom: 1px #f4f4f4 solid;
      text-align: center;
      height: 44px;
      line-height: 44px;
      color: #333;
      width: 100%;
      font-family: '微软雅黑';
      font-size: 16px;
      position: relative;
    }

    .pagetop a {
      color: #ff5500;
    }

    .fh {
      top: 12px;
      position: absolute;
      left: 8px;
    }

    .fh a {
      background: var(--image-path7) no-repeat scroll -105px -28px / 200px 200px;
      display: block;
      width: 20px;
      height: 22px;
    }

    .cd {
      position: absolute;
      right: 4px;
      top: 14px;
    }

    .cd a {
      background: var(--image-path7) no-repeat scroll -153px -95px / 200px 200px;
      display: block;
      width: 25px;
      height: 25px;
    }

    .subnav {
      border-bottom: 1px #ddd solid;
      line-height: 25px;
      white-space: nowrap;
      background: #fff;
    }

    .subnav a {
      color: #333;
      font-size: 15px;
      padding: 5px 12px 6px;
      display: block;
      float: left;
    }

    .subnav a.sel {
      border-bottom: 1px #ff6600 solid;
    }

    .subnav1 {
      border-bottom: 1px #eee solid;
      padding: 0 12px 0 0;
      white-space: nowrap;
      background: #fff;
      color: #888;
      overflow-x: scroll;
      overflow: auto
    }

    .subnav1 a {
      color: #555;
      font-size: 14px;
      padding: 0 10px;
      display: inline-block;
      height: 38px;
      line-height: 38px;
    }

    .subnav1 a.sel {
      border-bottom: 2px #ff4400 solid;
      color: #ff4400;
    }

    /*head End*/

    .content {
      margin: 0 auto;
    }

    .tuijian_tt {
      height: 45px;
      line-height: 43px;
      display: flex;
      font-size: 15px;
      position: relative;
      color: #555;
      background: #fff;
    }

    .tuijian_tt p {
      width: 4px;
      height: 18px;
      border-radius: 4px;
      position: relative;
      display: inline-block;
      background: #cb11ab;
      margin: 12px 10px 0;
    }

    .tuijian_tt span {}

    .tuijian_tt1 {
      display: flex;
      font-size: 15px;
      padding: 0 8px;
      height: 45px;
      line-height: 45px;
      position: relative;
      color: #555;
      background: #fff;
    }

    .tuijian_tt1 p {
      background: url(../images/hot.png) no-repeat;
      background-size: 20px auto;
      width: 20px;
      height: 20px;
      display: inline-block;
      margin-right: 5px;
      margin-top: 12px;
    }

    .tj_more {
      position: absolute;
      right: 5px;
      background: url(../images/jt.png) no-repeat;
      background-size: 6px 10px;
      width: 6px;
      height: 10px;
      display: block;
      top: 50%;
      margin-top: -5px;
      right: 12px;
    }

    .tuijian_list li {
      float: left;
      width: 50%;
      position: relative;
    }

    .tuijian_list li .li_box {
      margin: 0 2px 4px 0;
    }

    .tuijian_list li:nth-child(2n) .li_box {
      margin: 0 0 4px 2px;
    }

    .tuijian_list li img {
      width: 100%;
      display: block;
      background: #fafafa;
    }

    .zd_tt {
      font-size: 14px;
      margin-bottom: 10px;
      margin-left: 10px;
    }

    .js_imgload {
      background: url(../images/loading.gif) no-repeat center;
    }

    .fenlei_tt {
      background: #eee;
      padding-left: 10px;
      height: 42px;
      line-height: 42px;
      font-size: 18px;
      color: #ca0e0d;
      font-family: '微软雅黑';
      border-top: 1px #ddd solid;
      margin-top: 10px;
      padding-right: 10px;
    }

    .fenlei_tt span {
      background: #c36c63;
      -moz-border-radius: 100px;
      -webkit-border-radius: 100px;
      border-radius: 100px;
      padding: 5px 6px;
      color: #fff;
      font-size: 16px;
    }

    .now {
      border: 1px #ddd solid;
      padding: 8px 5px;
      color: #888;
      background: #e8e8e8;
      font-size: 13px;
    }

    .now a {
      color: #888
    }

    .spimg {
      text-align: center;
      margin: 0 auto;
      position: relative
    }

    .spimg img {
      width: 100%;
    }

    .jg_name {
      font-size: 13px;
      line-height: 16px;
      height: 32px;
      overflow: hidden;
    }

    .jg_price {
      color: #FF5E15;
      font-size: 18px;
      font-family: Arial, Helvetica, sans-serif
    }

    .jg_price1 {
      color: #FF5E15;
      font-size: 22px;
      font-family: Arial, Helvetica, sans-serif
    }

    .tag_green {
      background: #5CB85C;
      padding: 1px 8px;
      color: #fff;
      margin-left: 5px;
      border-radius: 3px;
      height: 18px;
      line-height: 18px;
    }

    .tag_org {
      background: #FF8E1B;
      padding: 1px 8px;
      color: #fff;
      margin-left: 5px;
      border-radius: 3px;
      height: 18px;
      line-height: 18px;
    }

    .tag_blue {
      background: #00A8E8;
      padding: 1px 8px;
      color: #fff;
      margin-left: 5px;
      border-radius: 3px;
      height: 18px;
      line-height: 18px;
    }

    .tag_red {
      background: #f47a86;
      padding: 1px 8px;
      color: #fff;
      margin-left: 5px;
      border-radius: 3px;
      height: 18px;
      line-height: 18px;
    }

    .tag_gray {
      background: #bab9b9;
      padding: 1px 8px;
      color: #fff;
      margin-left: 5px;
      border-radius: 3px;
      height: 18px;
      line-height: 18px;
    }

    a.tag_green,
    a.tag_org,
    a.tag_blue,
    a.tag_red,
    a.tag_gray {
      color: #fff;
    }

    .pro_jg s {
      color: #999
    }

    .yh_tb {
      background: url(../images/icon.png) no-repeat 6px -210px #ffffff;
      padding: 5px 5px 5px 28px;
      color: #f94202;
      border-radius: 4px;
      border: 1px solid #ddd
    }

    .yh_tb a {
      border-bottom: 1px #666 dotted;
      color: #3377AA;
    }

    .shuliang {
      width: 125px;
      float: right
    }

    .shuliang .img1 {
      float: left;
      background: #f5f5f5;
      height: 30px;
      display: block;
      text-align: center;
      width: 35px;
    }

    .shuliang .img2 {
      float: left;
      background: #f5f5f5;
      height: 30px;
      display: block;
      text-align: center;
      width: 35px;
    }

    .shuliang .img2 i {
      background: var(--image-path5) no-repeat 5px 5px;
      background-size: 20px auto;
      width: 20px;
      height: 20px;
      display: block;
      margin-left: 3px;
    }

    .shuliang .img1 i {
      background: var(--image-path6) no-repeat 5px 5px;
      background-size: 20px auto;
      width: 20px;
      height: 20px;
      display: block;
      margin-left: 3px;
    }

    .shuliang_box input {
      width: 50px;
      font-size: 14px;
      border: 0;
      height: 30px;
      line-height: 28px;
      text-align: center;
      background: #f5f5f5;
      margin: 0 2px;
      float: left;
    }

    .pro_info {
      background: #fff;
      padding: 10px;
      border-top: 1px #ddd solid;
    }

    .main {
      margin-bottom: 55px;
    }

    .main h3 {
      border-top: 1px #ddd solid;
      border-bottom: 1px #ddd solid;
      height: 40px;
      line-height: 40px;
      padding-left: 10px;
      font-weight: normal;
      margin-top: 5px;
      background: #fff;
    }

    .main_xq img {
      max-width: 100%;
      height: auto;
    }

    .main_xq {
      background: #fff;
      padding: 10px;
    }

    .prodata_span {
      padding: 6px 20px;
      margin-right: 5px;
      line-height: 16px;
      border-radius: 15px;
      cursor: pointer;
      color: #666;
      position: relative;
      background: #f5f5f5;
      display: inline-block;
      font-size: 12px;
      margin-bottom: 8px
    }

    /*.prodata_sel i{background:url(../images/dg.gif) no-repeat; display:block; width:12px; height:12px; position:absolute; right:0; bottom:0;}*/
    .prodata_lock {
      background: #fff;
      border: 1px dashed #ccc;
      color: #ccc;
      cursor: not-allowed;
      padding: 4px 18px;
    }

    .prodata_sel {
      color: #fff;
      background: linear-gradient(to right, #cb11ab 0, #481173 100%);
    }

    .gw {
      padding: 10px;
      margin: 10px;
    }

    .gw p {
      background: url(../images/dui.png) no-repeat;
      padding-left: 50px;
      height: 31px;
      line-height: 31px;
      font-size: 22px;
      margin-bottom: 20px;
      color: #7ABD54;
    }

    a.gw1 {
      background: #f8f8f8;
      width: 95px;
      height: 30px;
      line-height: 30px;
      text-align: center;
      border-radius: 2px;
      border: 1px #ddd solid;
      color: #555;
      font-size: 14px;
      display: block;
      float: left;
      margin-left: 12px;
      margin-top: 3px;
    }

    a.gw2 {
      background: #f24445;
      width: 120px;
      height: 37px;
      line-height: 37px;
      text-align: center;
      border-radius: 2px;
      color: #fff;
      font-size: 16px;
      display: block;
      float: left;
    }

    /*foot Start*/
    .foot {
      height: 40px;
      line-height: 40px;
      font-size: 12px;
      color: #666;
      width: 100%;
      margin: 0 auto;
      text-align: center;
      border-top: 1px #ddd solid;
      margin-top: 20px;
    }

    .foot a {
      display: block;
      float: left;
      width: 25%;
      color: #fff;
      text-align: center;
    }

    /*foot End*/

    /*Авторизоваться*/
    .loginbox {
      margin: 0 10px;
    }

    .input_box {
      background: #fff;
      border: 1px #ddd solid;
      margin-top: 5px;
      line-height: 41px;
      height: 41px;
      padding-left: 10px;
    }

    .login_input1 {
      border: 0;
      height: 100%;
      width: 100%;
      font-size: 15px;
      background: #fff;
      border-radius: 0;
      color: #666;
    }

    .login_input {
      font-size: 15px;
      width: 100%;
      height: 40px;
      line-height: 40px;
      border: 0;
      color: #555;
    }

    .tip_use {
      color: #333;
      left: 5px;
      font-size: 15px;
    }

    .tip_pwd {
      color: #333;
      left: 5px;
      font-size: 15px;
    }

    .loginbtn {
      background: linear-gradient(to right, #cb11ab 0, #481173 100%);
      border-radius: 20px;
      height: 40px;
      line-height: 40px;
      margin: 30px 0 10px;
      cursor: pointer;
    }

    .loginbtn input {
      border: medium none;
      height: 40px;
      line-height: 40px;
      background: none;
      text-align: center;
      width: 100%;
      color: #fff;
      font-size: 16px;
      font-family: 'Microsoft Yahei', "宋体";
      cursor: pointer;
    }

    .zh_zc1 {
      margin-top: 10px;
    }

    .zh_zc1 a {
      color: #0066CC
    }

    /*会员中心 Start*/
    .hy_tt {
      border-bottom: 1px solid #e8e8e8;
      height: 42px;
      background: #fff;
      overflow: hidden;
    }

    .hy_tt a {
      line-height: 42px;
      width: 20%;
      float: left;
      margin: 0 auto;
      text-align: center;
    }

    .hy_tt a.sel {
      color: #ff4400;
      border-bottom: 1px solid #FFA676;
    }

    .dingdan_tt1 {
      background: #fff;
      padding: 15px 0 15px 10px;
      margin-top: 10px;
      font-size: 14px;
    }

    .dingdan_tt1 p {
      padding-left: 8px;
      line-height: 14px;
      height: 14px;
      border-left: 3px solid #666666;
    }

    .dingdan_img {
      position: absolute;
      left: 40px;
      top: 10px;
      width: 80px;
      border: 1px #eee solid
    }

    .dingdan_img img {
      width: 80px;
    }

    .dingdan_name {
      margin-left: 95px;
    }

    /*.dingdan_name p{height:16px; height:20px; overflow:hidden;}*/
    .dingdan_info {
      background: #fff;
      margin-top: 10px;
      border-top: 1px #eee solid;
      position: relative
    }

    .dingdan_info1 {
      background: #fff;
      padding: 10px;
      line-height: 26px;
      color: #666;
      min-height: 600px;
    }

    .dingdan_info1 .xian {
      border-bottom: 1px #eee dotted
    }

    .danye_main img {
      max-width: 100%;
      height: auto;
    }

    .brand_tt {
      margin-top: 20px;
    }

    .cart_list {
      background: #fff;
      margin-top: 10px;
      padding: 10px 10px 10px 40px;
      border-top: 1px #eee solid;
      border-bottom: 1px solid #eee;
      position: relative;
      min-height: 85px;
    }

    .cart_shixiao {
      width: 18px;
      height: 18px;
      display: block;
      position: absolute;
      left: 10px;
      top: 40px;
      font-size: 12px;
      text-align: center;
      color: #888
    }

    .pinpai {
      color: #888;
      padding: 6px 0 0 6px;
    }

    .pinpai a {
      display: block;
      margin-bottom: 5px;
      width: 100%;
      float: left;
      padding-bottom: 100%;
      height: 0;
      background: #fff;
      position: relative
    }

    .pinpai_box {
      text-align: center;
    }

    .pinpai_box img {
      width: 65%;
      margin: 0 auto;
      max-height: 55px;
      margin-top: 25%;
      text-align: center;
    }

    .pinpai_box p {
      text-align: center;
      color: #666;
      position: absolute;
      bottom: 0;
      width: 96%;
      margin: 0 2%;
      font-size: 13px;
      border-top: 1px #eee solid;
      height: 30px;
      line-height: 30px;
    }

    .shaixuan_list {
      background: #fff;
      border-top: 1px #ddd solid;
      border-bottom: 1px #ddd solid;
      padding: 8px 10px;
      line-height: 26px;
      color: #666;
    }

    .shaixuan_list a {
      color: #888;
      padding: 3px 10px;
    }

    .shaixuan_list a.sel {
      background: #FFAA00;
      color: #fff;
    }

    .sx_info {
      padding: 5px 0;
    }

    .yingfu {
      padding: 0 10px 0 0;
      margin-top: 15px;
      font-family: Arial, Helvetica, sans-serif;
      line-height: 28px;
      color: #666
    }

    .jifen_l span {
      font-size: 12px;
    }

    .jifen_l p {
      margin-bottom: 3px;
    }

    .yh_l {
      background: #F34FA1;
      margin-right: 80px;
      color: #fff;
      height: 100px;
    }

    .yh_l a {
      color: #fff;
    }

    .yh_price {
      font-size: 28px;
      font-weight: bold;
      font-family: Arial, Helvetica, sans-serif;
      margin: 13px 0;
    }

    .yh_r {
      float: left;
      width: 40%;
      background: #fff;
      height: 100px;
      color: #888;
      line-height: 22px;
    }

    .shanchu {
      border: 1px #ddd solid;
      border-radius: 4px;
      padding: 3px 8px;
      font-size: 12px;
    }

    .huifu {
      background: #fcf9e6;
      padding: 5px 2px;
      color: #ff6600;
      border-radius: 3px
    }

    /*会员中心 End*/

    /*评价*/
    .pj_box {
      background: #fff;
      margin-top: 10px;
      padding: 0 10px 10px;
    }

    .pingjia {
      padding: 8px 0;
    }

    .promain {
      color: #555;
    }

    .plmain_ul {
      height: 40px;
      line-height: 40px;
      overflow: hidden;
      color: #666;
      border-bottom: 1px #eee solid;
    }

    .plmain {
      margin: 10px;
    }

    .plmain textarea {
      width: 550px;
      height: 70px;
      border: 1px #ddd solid;
    }

    .plmain td {
      padding: 5px 0;
      font-size: 13px;
    }

    .plrate_l {
      width: 80px;
      margin: 25px 20px 0 10px;
      text-align: center
    }

    .plrate_l strong {
      font-size: 38px;
      color: #E4393C;
    }

    .plrate_m {
      margin-top: 10px;
      line-height: 24px
    }

    .plrate_m dt {
      width: 80px;
      float: left;
    }

    .plrate_m dd {
      width: 100px;
      float: left;
      height: 13px;
      margin-top: 6px;
      background: #ddd;
    }

    .plrate_m dd div {
      background: linear-gradient(to bottom, #ED0000 0px, #A50000 100%) #ED0000;
      height: 13px;
    }

    .plrate_r {
      height: 80px;
      padding-top: 20px;
    }

    .plrate_r a {
      background: #f60;
      color: #fff;
      padding: 8px 15px;
      border-radius: 4px;
      font-size: 14px;
      font-weight: bold;
    }

    .plmenu {
      height: 40px;
      background: #fff;
      overflow: hidden;
      width: 100%;
    }

    .plmenu a {
      line-height: 40px;
      width: 25%;
      float: left;
      margin: 0 auto;
      text-align: center;
      color: #888;
    }

    .plmenu a.sel {
      color: #ff0000;
      border-bottom: 1px solid #ff4400;
    }


    .plmenu_tt {
      background: url(../images/pl_m.png) repeat-x;
      width: 100%;
      height: 30px;
      padding-left: 20px;
      margin-left: -10px;
      margin-top: 10px;
      overflow: hidden;
      line-height: 30px;
      font-size: 14px;
      color: #333;
      border-top: 1px solid #E4E4E4;
      border-bottom: 1px solid #E4E4E4
    }

    /*咨询*/
    .ask_main {
      font-size: 13px;
    }

    .rep_main {}

    .ask_main i {
      background: #6D6D6D;
      width: 18px;
      height: 18px;
      font-size: 12px;
      color: #fff;
      display: block;
      line-height: 18px;
      margin: 3px 6px 0 0;
      text-align: center;
      font-family: 'Arial';
      font-style: normal;
      float: left;
    }

    .rep_main i {
      background: #FF4A00;
      width: 18px;
      height: 18px;
      font-size: 12px;
      color: #fff;
      line-height: 18px;
      margin: 3px 6px 0 0;
      text-align: center;
      font-family: 'Arial';
      font-style: normal;
      float: left;
    }

    .ask_main p {
      float: left;
    }

    .rep_main p {
      float: left;
      color: #FF4A00
    }

    .ask_form {
      font-size: 14px;
      font-weight: bold;
    }

    .ask_input {
      height: 33px;
      line-height: 33px;
      padding: 3px 5px;
      border: 1px solid #ddd;
      display: block;
      margin-top: 5px;
    }

    /*Отправлено успешно*/
    .order_cg {
      background: #f8f8f8;
      padding: 30px 10px;
      font-size: 14px;
      margin: 15px 0;
    }

    .order_cg p {
      background: url(../images/dui.png) no-repeat;
      padding-left: 50px;
      height: 31px;
      line-height: 31px;
      font-size: 16px;
      margin-bottom: 25px;
      color: #7ABD54;
    }

    .order_cg a {
      color: #005BB5
    }

    .order_bank {
      line-height: 31px;
    }

    /*优惠券*/
    .lingquan {
      margin: 0 auto;
      font-size: 14px;
      background: linear-gradient(to right, #ffbe27, #ff9b26);
      padding: 15px;
      color: #fff;
      margin: 10px;
      position: relative;
      border-radius: 4px;
    }

    .lingquan p {
      text-align: left;
      line-height: 28px;
      color: #555
    }

    .lq_l {
      font-size: 28px;
      color: #fff;
      margin: 20px 0
    }

    .quan_btn {
      background: #aaa;
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 50px;
      line-height: 50px;
      text-align: center;
      color: #eee;
    }

    .quan_btn a {
      background: #ff5000;
      width: 100%;
      line-height: 50px;
      height: 50px;
      color: #fff;
      display: block;
    }

    .quan_ico {
      background: url(../images/quan_ico.png) no-repeat;
      background-size: 60px auto;
      width: 60px;
      height: 60px;
      position: absolute;
      right: 30px;
      bottom: 25px;
    }

    /*首页焦点图*/
    .slideBox {
      position: relative;
      overflow: hidden;
      /* 设置焦点图最大宽度 */
    }

    .slideBox .hd {
      position: absolute;
      height: 20px;
      line-height: 20px;
      bottom: 0;
      right: 0;
      z-index: 1;
    }

    .slideBox .hd li {
      display: inline-block;
      width: 5px;
      height: 5px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      background: #333;
      text-indent: -9999px;
      overflow: hidden;
      margin: 0 6px;
    }

    .slideBox .hd li.on {
      background: #fff;
    }

    .slideBox .bd {
      position: relative;
      z-index: 0;
    }

    .slideBox .bd li {
      position: relative;
      text-align: center;
    }

    .slideBox .bd li img {
      background: url(../../TouchSlide/images/loading.gif) center center no-repeat;
      vertical-align: top;
      width: 100%;
      /* 图片宽度100%，达到自适应效果 */
    }

    .slideBox .bd li a {
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    /* 去掉链接触摸高亮 */
    .slideBox .bd li .tit {
      display: block;
      width: 100%;
      position: absolute;
      bottom: 0;
      text-indent: 10px;
      height: 28px;
      line-height: 28px;
      background: url(../../TouchSlide/images/focusBg.png) repeat-x;
      color: #fff;
      text-align: left;
    }

    /*帮助中心*/
    .help {
      text-align: center;
      font-size: 14px;
      color: #555;
    }

    .help_list {
      text-align: center;
    }

    .help_list li {
      line-height: 30px;
      float: left;
      margin-right: 5px;
      padding-right: 5px;
      width: 30%;
      text-align: center;
      margin-bottom: 10px;
    }

    .help_list li a {
      background: #eaeaea;
      padding: 8px 15px;
      color: #888;
    }

    .help_list li a.sel {
      background: #FF8800;
      color: #fff;
    }

    .help_list1 li {
      text-align: right;
      border-bottom: 1px #ddd dotted;
      background: url(../images/dot.gif) no-repeat 0 18px;
      padding-left: 12px;
      line-height: 38px;
    }

    .help_list1 li a {
      float: left;
      text-align: left;
    }

    .pinpai_list {
      background: #fff;
      padding: 10px;
    }

    .pinpai_l {
      text-align: center;
    }

    .fenlei_list {
      background: #fff;
      margin-top: 10px;
    }

    .fenlei_list li {
      border-bottom: 1px #f0f0f0 solid;
      margin: 0 0 0 10px;
      line-height: 44px;
      position: relative;
    }

    .fenlei_list li:last-child {
      border-bottom: none
    }

    .fenlei_list li a {
      display: block;
      width: 100%;
      color: #888;
    }

    .fenlei_list li i {
      background: url(../images/jt.png) no-repeat;
      width: 6px;
      height: 10px;
      display: block;
      background-size: 6px 10px;
      position: absolute;
      right: 15px;
      top: 50%;
      margin-top: -5px;
    }

    .zx_list li {
      line-height: 20px;
      padding: 10px 0
    }

    .zx_list li a {
      color: #555;
      font-size: 15px;
    }

    .zx_list li a i {
      top: 25px;
    }

    .zx_list li a p {
      margin-top: 5px;
    }

    .pro_main {
      background: url(../images/header-bg.png) repeat-x;
      height: 44px;
      line-height: 43px;
      border-bottom: 1px #ebebeb solid;
      border-top: 1px #ebebeb solid;
      position: relative;
    }

    .jt_01 img {
      height: 20px;
      position: absolute;
      left: 10px;
      top: 12px;
    }

    .pro_tt a {
      width: 50%;
      float: left;
      display: block;
      text-align: center;
      position: relative;
      font-size: 15px;
      color: #666;
    }

    .pro_tt a.sel {
      border-bottom: 2px #cb11aa solid;
      color: #cb11aa
    }

    .pro_tt a span.xian1 {
      border-right: 1px #eee solid;
      position: absolute;
      right: 0;
      top: 0;
      height: 42px;
      margin-top: 0
    }

    .pro_tt a span.plnum {
      position: absolute;
      border: 1px #cb11aa solid;
      border-radius: 8px;
      padding: 0 3px;
      color: #cb11aa;
      font-size: 12px;
      right: -18px;
      top: -7px;
      line-height: 12px;
    }

    .pro_foot {
      text-align: center;
      font-size: 10px;
      position: fixed;
      bottom: 0;
      width: 100%;
      margin: 0 auto;
      left: 0;
      z-index: 2;
    }

    .pro_foot a {
      color: #555;
    }

    .pro_foot_left {
      background: #fdfdfd;
      border-top: 1px solid #eee;
      float: left;
      width: 45%;
      height: 52px;
    }

    .pro_foot_xian {
      border-right: 1px #eee solid;
      height: 45px;
      position: absolute;
      right: 0;
      top: -5px
    }

    /*.sc i{background:var(--image-path) no-repeat scroll 3px -115px / 200px 200px rgba(0, 0, 0, 0); display:block; width:25px; height:22px; text-align:center; margin:0 auto;}*/
    /*.sc i.sel{background:var(--image-path) no-repeat scroll -26px -115px / 200px 200px rgba(0, 0, 0, 0);}*/



    .sc i {
      background: url(data:image/svg+xml,%3Csvg%20width%3D%2246%22%20height%3D%2217%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M9.5%2017C4.539%2012.75%200%208.5%200%205.1%200%202.125%202.322%200%205.278%200%206.86%200%208.444.744%209.5%201.913%2010.556.743%2012.139%200%2013.722%200%2016.678%200%2019%202.125%2019%205.1c0%203.4-4.539%207.65-9.5%2011.9Z%22%20fill%3D%22%23CCC%22%2F%3E%3Cpath%20d%3D%22M36.5%2017C31.539%2012.75%2027%208.5%2027%205.1%2027%202.125%2029.322%200%2032.278%200c1.583%200%203.166.744%204.222%201.913C37.556.743%2039.139%200%2040.722%200%2043.678%200%2046%202.125%2046%205.1c0%203.4-4.539%207.65-9.5%2011.9Z%22%20fill%3D%22%23CB11AB%22%2F%3E%3C%2Fsvg%3E);
      background-repeat: no-repeat;
      background-position: 0px 0px;
      background-size: 58px;
      width: 25px;
      height: 25px;
      margin: 6px auto;
      text-align: center;
      display: block;
    }

    .sc i.sel {
      background: url(data:image/svg+xml,%3Csvg%20width%3D%2246%22%20height%3D%2217%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M9.5%2017C4.539%2012.75%200%208.5%200%205.1%200%202.125%202.322%200%205.278%200%206.86%200%208.444.744%209.5%201.913%2010.556.743%2012.139%200%2013.722%200%2016.678%200%2019%202.125%2019%205.1c0%203.4-4.539%207.65-9.5%2011.9Z%22%20fill%3D%22%23CCC%22%2F%3E%3Cpath%20d%3D%22M36.5%2017C31.539%2012.75%2027%208.5%2027%205.1%2027%202.125%2029.322%200%2032.278%200c1.583%200%203.166.744%204.222%201.913C37.556.743%2039.139%200%2040.722%200%2043.678%200%2046%202.125%2046%205.1c0%203.4-4.539%207.65-9.5%2011.9Z%22%20fill%3D%22%23CB11AB%22%2F%3E%3C%2Fsvg%3E);
      background-repeat: no-repeat;
      background-position: -34px 0px;
      background-size: 58px;
      width: 25px;
      height: 25px;
      margin: 6px auto;
      display: block;
    }



    .sc a {
      display: block;
      position: relative;
      line-height: 18px;
    }

    .join i {
      background: var(--image-path) no-repeat scroll -75px -56px / 200px 200px;
      display: block;
      width: 25px;
      height: 23px;
      text-align: center;
      margin: 0 auto;
      position: relative;
    }

    .join i span {
      position: absolute;
      background: #cb11aa;
      border-radius: 50%;
      width: 15px;
      height: 15px;
      line-height: 15px;
      overflow: hidden;
      color: #fff;
      font-size: 11px;
      right: -5px;
      top: -4px;
      font-style: normal;
      text-overflow: ellipsis;
    }

    .join a {
      display: block;
    }

    .foot1_xian {
      border-right: 1px #eee solid;
      position: absolute;
      right: 0;
      top: -8px;
      height: 50px;
    }

    .qq i {
      background: var(--image-path) no-repeat scroll -36px -55px / 200px 200px;
      display: block;
      width: 23px;
      height: 23px;
      text-align: center;
      margin: 0 auto;
      position: relative;
    }

    .qq i span {
      position: absolute;
      background: #cb11aa;
      border-radius: 8px;
      padding: 0 5px;
      color: #fff;
      font-size: 12px;
      right: -10px;
      top: -3px;
      line-height: 12px;
      font-family: SimHei, Helvetica Neue, Arial, sans-serif;
      font-style: normal;
    }

    /*.sy i{background:var(--image-path) no-repeat scroll 0 -56px / 200px 200px; display:block; width:23px; height:23px; text-align:center; margin:0 auto; position:relative;}*/
    /*.sy i span{ position:absolute; background:#cb11aa;border-radius:8px; padding:0 5px; color:#fff; font-size:12px; right:-10px; top:-3px; line-height:12px; font-family:SimHei,Helvetica Neue,Arial,sans-serif; font-style:normal;}*/

    .sy i {
      background-image: url(data:image/svg+xml,%3Csvg%20width%3D%2250%22%20height%3D%2220%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M19.5%208.9L11.3.5a1.8%201.8%200%2000-2.6%200L.5%209A1.8%201.8%200%20001.8%2012h.3v5.8c0%201.2%201%202.2%202.2%202.2h3.2c.3%200%20.6-.3.6-.6v-4.7c0-.5.4-1%201-1h1.8c.6%200%201%20.5%201%201v4.7c0%20.3.3.6.6.6h3.2c1.2%200%202.2-1%202.2-2.2V12h.3c.5%200%201-.2%201.3-.5.7-.8.7-2%200-2.6z%22%20fill%3D%22%23CCC%22%2F%3E%3Cpath%20d%3D%22M49.5%208.9L41.3.5a1.8%201.8%200%2000-2.6%200L30.5%209a1.8%201.8%200%20001.3%203.1h.3v5.8c0%201.2%201%202.2%202.2%202.2h3.2c.3%200%20.6-.3.6-.6v-4.7c0-.5.4-1%201-1h1.8c.6%200%201%20.5%201%201v4.7c0%20.3.3.6.6.6h3.2c1.2%200%202.2-1%202.2-2.2V12h.3c.5%200%201-.2%201.3-.5.7-.8.7-2%200-2.6z%22%20fill%3D%22%23CB11AB%22%2F%3E%3C%2Fsvg%3E);
      background-repeat: no-repeat;
      background-position: 0px 0px;
      background-size: 58px;
      width: 25px;
      height: 25px;
      margin: 6px auto;
      display: block;
    }


    .qq a {
      display: block;
      position: relative
    }

    .qq,
    .join,
    .sy,
    .sc {
      float: left;
      width: 50%;
      padding-top: 8px;
    }

    .pro_foot_right {
      float: left;
      width: 55%;
      color: #fff;
      font-size: 14px;
      height: 53px;
      line-height: 53px;
    }

    .pro_foot_right a {
      display: block;
      text-align: center;
      width: 50%;
      color: #fff;
      float: left;
      background: #4e1392
    }

    .pro_foot_right a.gm {
      background: #cb11aa;
    }

    .pro_foot_right a.xj {
      background: #aaa;
      width: 100%;
    }

    .buy_btn a.xj {
      background: #aaa;
      width: 100%;
    }

    .paixu {
      margin: 0 auto;
      background: #fff;
      height: 38px;
      line-height: 38px;
      text-align: center;
      border-bottom: 1px #ddd solid;
    }

    .paixu li {
      float: left;
      width: 25%;
      position: relative
    }

    .paixu li a {
      width: 100%;
      display: block;
    }

    .paixu li p {
      position: absolute;
      border-right: 1px solid #EEEEEE;
      height: 20px;
      right: 0;
      top: 8px;
    }

    .xian {
      border-bottom: 1px #eee solid;
      margin-top: 10px;
      margin-bottom: 10px;
    }

    .xian1 {
      border-bottom: 1px #eee solid;
      margin-top: 10px;
    }


    .order_cg {
      background: #fff;
      padding: 20px;
      font-size: 14px;
      margin: 0 0 10px 0;
      position: relative;
      color: #666;
    }

    .order_cg p {
      background: url(../images/dui.png) no-repeat;
      padding-left: 50px;
      height: 31px;
      line-height: 31px;
      font-size: 22px;
      margin-bottom: 25px;
      color: #7ABD54;
    }

    .tjcg_dui {
      background: url(../images/dui_01.jpg) no-repeat;
      background-size: 80px auto;
      width: 80px;
      height: 80px;
      display: block;
      text-align: center;
      margin: 0 auto
    }

    .tjcg_tt {
      font-size: 16px;
      line-height: 22px;
      text-align: center;
      margin-top: 20px;
    }

    .dd_yingfu span {
      font-size: 16px;
      color: #F9932F
    }

    .fkfs {
      background: #fff;
      border: 1px #ddd solid;
      padding: 15px 10px;
    }

    .fkfs_tt {
      font-size: 15px;
      margin: 15px 10px 12px;
      color: #666;
    }

    .fkfs li {
      background: #f3f3f3;
      height: 40px;
      line-height: 40px;
      font-size: 14px;
      border: 1px #ddd dashed;
      margin-top: 6px;
      width: 100%;
    }

    .fkfs li input {
      margin: 0 10px;
    }

    .fkfs li label {
      display: block;
    }

    .ddtj_btn {
      background: #F9932F;
      border-radius: 2px;
      height: 40px;
      line-height: 40px;
      width: 40%;
      cursor: pointer;
      display: inline-block;
    }

    .ddtj_btn input {
      border: medium none;
      height: 38px;
      line-height: 38px;
      background: none;
      text-align: center;
      width: 100%;
      color: #fff;
      font-size: 15px;
      cursor: pointer;
    }

    .tuijian_name {
      margin: 8px 10px 0 10px;
      color: #666;
    }

    .sp_list {
      border-top: 1px #ddd solid;
      margin-top: 10px;
      background: #fff;
    }

    .sp_list li {
      border-bottom: 1px solid #EEEEEE;
      height: 45px;
      line-height: 45px;
      position: relative;
    }

    .sp_list li a {
      color: #888;
      padding: 0 10px;
      font-size: 14px;
      display: block
    }

    .sp_list li i {
      background: url(../images/jt.png) no-repeat;
      width: 6px;
      height: 10px;
      display: block;
      background-size: 6px 10px;
      position: absolute;
      right: 15px;
      top: 50%;
      margin-top: -5px;
    }

    .top_tc_btn,
    .top_menu_btn,
    .top_menu_close,
    .top_xx_btn {
      position: absolute;
      right: 10px;
      top: 14px;
      width: 25px;
      height: 25px;
    }

    .top_menu_btn {
      top: 11px;
    }

    .top_tc_btn {
      right: 40px;
    }

    .top_xx_btn {
      right: 8px;
      top: 16px;
    }

    .top_tc_btn a {
      display: block;
      background: url(../images/icon_tb.png) scroll 0 0 / 200px 200px;
      background-position: -123px 0;
      width: 25px;
      height: 25px;
    }

    .top_xx_btn a {
      display: block;
      background: url(../images/icon_tb.png) scroll 0 0 / 200px 200px;
      background-position: 0 -164px;
      width: 25px;
      height: 25px;
      position: relative
    }

    .top_xx_btn a span {
      position: absolute;
      color: #ff0000;
      font-size: 12px;
      right: 0;
      top: -10px;
      background: #fff;
      width: 15px;
      height: 15px;
      line-height: 15px;
      border-radius: 50%;
      text-align: center
    }

    .top_menu_btn a {
      display: block;
      background: url(../images/icon_tb.png) scroll 0 0 / 200px 200px;
      background-position: -156px 0;
      width: 25px;
      height: 25px;
    }

    .top_menu_close a {
      display: block;
      background: url(../images/icon_tb.png) scroll 0 0 / 200px 200px;
      background-position: -175px -124px;
      width: 25px;
      height: 25px;
    }

    .top_menu_yh {
      top: 11px;
      position: absolute;
      right: 12px;
    }

    .top_menu_yh a {
      color: #B533A1;
      font-size: 14px;
    }

    .top_tc {
      position: absolute;
      top: 50px;
      width: 100%;
      left: 0;
      background: #404042;
      height: 60px;
      z-index: 999;
      display: none;
    }

    .top_menu {
      position: absolute;
      top: 45px;
      width: 100%;
      background: #404042;
      height: 60px;
      z-index: 999;
      display: none;
      line-height: 20px;
    }

    .top_tc li,
    .top_menu li {
      float: left;
      width: 25%;
      margin: 0 auto;
      text-align: center;
      padding: 10px 0;
      height: 40px;
    }

    .top_tc li i,
    .top_menu li i {
      display: block;
      background: url(../images/icon_tb.png) scroll 0 0 / 200px 200px;
      width: 25px;
      height: 23px;
      margin: 0 auto;
    }

    .top_tc li i.top_tb1,
    .top_menu li i.top_tb1 {
      background-position: 0 0;
      width: 23px;
    }

    .top_tc li i.top_tb2,
    .top_menu li i.top_tb2 {
      background-position: -30px -35px;
      width: 26px;
      height: 24px;
    }

    .top_tc li i.top_tb3,
    .top_menu li i.top_tb3 {
      background-position: -60px 0;
      height: 24px;
    }

    .top_tc li i.top_tb4,
    .top_menu li i.top_tb4 {
      background-position: -93px 0;
      width: 20px;
    }

    .pagetop .top_tc li a span,
    .pagetop .top_menu li a span {
      font-size: 12px;
      color: #fff;
      line-height: 14px;
      margin: 0;
    }

    .pagetop1 .top_tc li a span,
    .pagetop1 .top_menu li a span {
      font-size: 12px;
      color: #fff;
      line-height: 14px;
      margin: 0;
    }

    .pagetop1 .top_tc {
      top: 46px;
    }

    .top_tc li.sel,
    .top_menu li.sel {
      background: #222
    }

    .prolist_name {
      background: #fff;
      padding: 5px 10px;
      position: relative
    }

    .prolist_name p {
      font-size: 14px;
      margin: 8px 0 5px;
      height: 22px;
      overflow: hidden;
      line-height: 20px;
      color: #555;
    }

    .prolist_name span {
      font-size: 16px;
      color: #f95869;
      font-family: Arial, Helvetica, sans-serif
    }

    .prolist_logo {
      position: relative;
      overflow: hidden;
    }

    .prolist_tag {
      bottom: -55px;
      right: 0;
      font-size: 13px;
      border-radius: 50%;
      height: 80px;
      overflow: hidden;
      width: 80px;
      padding: 10px 5px 0;
      background: #f21011;
      position: absolute;
      color: #fff;
      text-align: center
    }

    .prolist_timebg {
      background: #000;
      filter: alpha(opacity=40);
      -moz-opacity: 0.40;
      opacity: 0.40;
      line-height: 29px;
      height: 29px;
      width: 100%;
      position: absolute;
      bottom: 0;
      z-index: 998;
    }

    .prolist_time {
      font-size: 12px;
      margin-top: 10px;
      color: #fff;
      line-height: 29px;
      height: 29px;
      position: absolute;
      bottom: 0;
      z-index: 999;
      display: flex;
    }

    .prolist_time i {
      background: url(../images/ico_sz.png) no-repeat;
      background-size: 20px 20px;
      width: 20px;
      height: 20px;
      display: inline-block;
      margin: 4px 5px 0 10px
    }

    .prolist_time span {
      color: #fff;
      font-size: 12px;
    }

    .prolist_qgbtn {
      height: 32px;
      line-height: 32px;
      margin-top: 5px;
      position: relative;
      background: #fee9de;
    }

    .prolist_qgbtn a {
      width: 75px;
      text-align: center;
      color: #fff;
      background: #e6382f;
      display: block;
      line-height: 32px;
      font-size: 13px;
      height: 32px;
      position: absolute;
      right: 0;
      top: 0;
    }

    .prolist_qgbtn span {
      margin-right: 75px;
      padding: 0 10px;
      color: #f95869;
      font-size: 16px;
    }

    .prolist_pt {
      position: absolute;
      background: #cb11aa;
      color: #fff;
      height: 24px;
      line-height: 24px;
      padding: 0 10px;
      display: inline-block;
      font-size: 13px;
      right: 10px;
      bottom: 8px
    }

    .qg_top {
      background: url(../images/qg_bg1.jpg) no-repeat center top;
      background-size: cover;
      display: flex;
      justify-content: center;
      padding: 20px;
      font-size: 20px;
      color: #fff;
    }

    .qg_top i {
      background: url(../images/qg_ico1.png) no-repeat;
      background-size: 30px auto;
      width: 30px;
      height: 30px;
      display: inline-block;
      margin-right: 8px;
    }

    .tuan_top {
      background: url(../images/11.png) no-repeat center top;
      background-size: cover;
      display: flex;
      justify-content: center;
      padding: 60px;
      font-size: 20px;
      color: #fff;
    }

    .tuan_top_1 {
      background: url(../images/11.png) no-repeat center top;
      background-size: cover;
      font-weight: 600;
      color: #f95869;
      display: flex;
      justify-content: center;
      padding: 60px;
      font-size: 20px;
    }

    .zhe_top {
      background: url(../images/zhe.jpg) no-repeat center top;
      background-size: cover;
      display: flex;
      justify-content: center;
      padding: 70px;
      font-size: 20px;
      color: #fff;
    }


    .pro_yhq {
      position: relative;
      padding: 10px 0;
      background: #fff;
      border-bottom: 1px #f0f0f0 solid;
      margin: 0 10px;
      font-size: 12px;
    }

    .pro_yhq:last-child {
      border-bottom: none
    }

    .pro_yhq a {
      color: #696969;
      font-size: 12px;
      display: block;
    }

    .pro_yhq .yhq_btn {
      border: 1px #cb11aa solid;
      color: #cb11aa;
      margin-right: 10px;
      border-radius: 2px;
      width: 80px;
      height: 20px;
      font-size: 12px;
    }

    .yhq_q {
      background: #cb11aa;
      color: #fff;
      display: block;
      float: left;
      width: 30px;
      text-align: center;
      height: 100%;
      line-height: 20px;
      margin-right: 10px;
      font-size: 12px;
    }

    .pro_yhq i {
      background: url(../images/jt.png) no-repeat;
      width: 6px;
      height: 10px;
      display: block;
      background-size: 6px 10px;
      position: absolute;
      right: 0;
      top: 50%;
      margin-top: -5px;
    }

    .yhq_list {
      background: #fff;
      margin-top: 10px;
    }

    .pro_yf {
      position: absolute;
      left: 50%;
      margin-left: -35px;
      color: #888;
      font-size: 12px;
    }

    .pro_xl {
      float: right;
      color: #888;
      font-size: 12px;
    }

    .pro_text1 {
      height: 20px;
      line-height: 20px;
      position: relative;
      margin-top: 8px;
      font-size: 13px;
      color: #888
    }

    .pro_tb1 td {
      padding: 5px 0;
      color: #888;
    }

    .quan_name {
      font-size: 15px;
      text-align: center;
    }

    .quan_date {
      position: relative;
      margin-top: 15px;
      display: flex;
      color: #fff;
      justify-content: center;
    }

    .quan_date p {
      margin: 0 10px;
      color: #fff;
      font-size: 12px;
    }

    .quan_date span {
      width: 40px;
      border-top: 1px #fff solid;
      display: block;
      margin-top: 14px;
    }

    .fk_tb {
      background: #fff;
      padding: 0 10px
    }

    .fk_tb td {
      padding: 12px 5px;
      border-top: 1px #eee solid;
      color: #666;
      font-size: 14px;
    }

    .js_radio {
      cursor: pointer
    }

    .js_radio .dui {
      background: var(--image-path8) no-repeat;
      background-size: 20px auto;
      width: 20px;
      height: 20px;
      display: block;
    }

    .js_radio.sel .dui {
      background: var(--image-path9) no-repeat;
      background-size: 20px auto;
      width: 20px;
      height: 20px;
      display: block;
    }

    .wd_box {
      background: #fff;
      border-top: 1px #ddd solid;
      margin-top: 8px;
      padding: 10px;
    }

    /*购物车*/
    .wgw_box {
      text-align: center;
      margin: 0 auto;
    }

    .wgw_btn {
      background: url(../images/wgw.png) no-repeat;
      background-size: 80px auto;
      width: 80px;
      height: 80px;
      text-align: center;
      margin: 8em auto 0
    }

    .g_btn {
      margin-top: 25px;
    }

    .g_btn a {
      padding: 6px 30px;
      border: 1px #999 solid;
      font-size: 14px;
      border-radius: 4px;
      color: #666;
    }

    .dddz_html {
      padding-left: 10px;
      background: #fff;
      color: #666;
      font-family: "微软雅黑";
      font-size: 14px;
      position: relative
    }

    .dddz_list {
      padding: 0 30px 0 15px;
    }

    .dddz_r {
      float: right;
      width: 380px;
      padding: 10px 15px;
    }

    .ddtj_btn {
      background: #df3033;
      color: #fff;
      width: 138px;
      border: 1px #C40000 solid;
      height: 40px;
      line-height: 36px;
      text-align: center;
      position: relative;
      font-size: 16px;
      border-radius: 2px;
      cursor: pointer;
      font-family: "微软雅黑";
      float: right;
      margin-left: 20px;
    }

    .ddtj_btn_box {
      margin-bottom: 200px;
      margin-top: 20px;
      border-top: 1px #eee solid;
      padding-top: 20px;
    }

    .fpxx_box {
      border: 1px #ddd solid;
      margin-top: 15px;
      font-family: "微软雅黑";
      font-size: 14px;
    }

    .fpxx_dw {
      padding: 20px 18px;
      position: relative
    }

    .taitoumc {
      position: absolute;
      left: 80px;
      width: 230px;
      height: 50px;
      border: 0;
      line-height: 50px;
      font-family: "微软雅黑";
      font-size: 14px;
    }

    .xzdz_btn {
      color: #076aff;
      border: 2px #3283fa dashed;
      width: 110px;
      height: 32px;
      line-height: 32px;
      text-align: center;
      border-radius: 2px;
    }

    .xzdz_btn a {
      display: block;
      color: #076aff;
      font-size: 14px;
    }

    .add_xian {
      border-top: 1px #eee solid;
      margin: 10px 0 0;
    }

    .pagetop .top_menu li a {
      font-size: 12px;
      line-height: 20px;
      color: #fff;
    }

    .index_gg {
      padding: 10px;
      background: #fff;
      position: relative;
      height: 218x;
      overflow: hidden;
      margin-top: 10px;
      display: flex;
    }

    .index_gg i {
      background: url(../images/new_tt.png) no-repeat;
      background-size: 60px auto;
      width: 60px;
      height: 15px;
      display: block;
      position: absolute;
      left: 15px;
      margin-top: 4px;
    }

    .index_gglist {
      overflow: hidden;
      margin-left: 10px;
      position: relative;
      width: 100%;
    }

    .index_gglist li {
      height: 21px;
      overflow: hidden;
      line-height: 21px;
    }

    a.new_more {
      position: absolute;
      width: 40px;
      border-left: 1px #ddd solid;
      text-align: right;
      right: 0px;
      display: block;
      z-index: 999;
      color: #666;
      top: 0
    }

    .gg_tt {
      background-color: #ff2150;
      color: #fff;
      width: 40px;
      text-align: center;
      border-radius: 4px;
      font-size: 12px;
      height: 20px;
      line-height: 20px;
    }

    .index_gglist li a.new_name {
      margin-right: 70px;
    }

    .index_gg a {
      color: #666;
      font-size: 13px;
    }

    .yhq_box {
      background: #fff;
      padding: 0 10px;
      margin-top: 10px
    }

    .yhq_sel {
      border-bottom: 1px #f0f0f0 solid;
      line-height: 42px;
    }

    .r_jt {
      padding: 0;
      text-align: right;
      position: relative
    }

    .r_jt i {
      background: url(../images/jt.png) no-repeat right;
      background-size: 6px auto;
      width: 6px;
      height: 10px;
      display: inline-block;
      margin: 0 0 0 10px;
      position: absolute;
      right: 0;
      top: 50%;
      margin-top: -5px;
    }

    .jf_inputbox {
      background: none;
    }

    .jf_inputbox input {
      border: 1px #ddd solid;
      height: 20px;
      line-height: 20px;
      background: none;
      border-radius: 0;
      width: 80px;
    }

    .pro_zj {
      background: #fff;
      padding: 15px;
      font-size: 16px;
      color: #888;
      text-align: right;
      margin-top: 10px;
    }


    .screen {
      background: #f7f7f7;
      height: 40px;
      border-bottom: 1px #ddd solid;
      position: relative
    }

    .all_screen {
      background: none repeat scroll 0 0 rgba(0, 0, 0, 0.7);
      width: 100%;
      height: 100%;
      left: 0;
      top: 90px;
      z-index: 99;
      position: absolute;
    }

    .screen01 {
      float: left;
      width: 33.3%;
      margin: 0 auto;
      text-align: center;
      background: #fff;
      cursor: pointer;
    }

    .jt_xia1 {
      background: url(../images/icon_tb.png) no-repeat scroll 0 0 / 200px 200px;
      background-position: -193px 0;
      width: 15px;
      height: 11px;
      display: inline-block;
      position: relative;
      top: 4px;
    }

    /*.fenlei_name{width:60px; line-height:40px; height:40px; overflow:hidden; display:inline-block;}*/
    .screen_name {
      color: #666;
      position: relative;
      line-height: 40px;
      height: 40px;
      overflow: hidden;
      padding: 0 25px 0 15px;
    }

    .jt_xian {
      display: block;
      border-right: 1px #eee solid;
      position: absolute;
      right: 0;
      top: 8px;
      height: 24px;
    }

    .bg_fl {
      background: #000;
      opacity: 0.8;
      position: absolute;
      width: 100%;
      height: 100%;
      top: 90px;
      left: 0;
      z-index: 99;
    }

    .screen_list {
      position: absolute;
      top: 41px;
      width: 100%;
      left: 0;
      z-index: 100;
    }

    .screen_left {
      float: left;
      width: 50%;
      background: #fff;
      overflow-y: auto;
      height: 325px;
    }

    .screen_left li {
      line-height: 40px;
      position: relative;
    }

    .screen_left li a {
      display: block;
      line-height: 40px;
      padding-left: 25px;
    }

    .screen_left li.sel a {
      background: #f5f5f5;
      color: #F9932F
    }

    .screen_left li span {
      border-right: 1px #ddd solid;
      height: 40px;
      display: block;
      position: absolute;
      right: 0;
      top: 0;
    }

    .screen_left li.sel span {
      border-right: 1px #f2f2f2 solid;
    }

    .screen_right {
      float: right;
      width: 50%;
      background: #f5f5f5;
      overflow-y: auto;
      height: 325px;
    }

    .screen_right li {
      border-bottom: 1px #eee solid;
      line-height: 40px;
    }

    .screen_right li a {
      display: block;
      line-height: 40px;
      padding-left: 20px;
    }

    .screen_right li a.sel {
      color: #F9932F
    }

    .brand_zm {
      background: #fff;
      padding: 12px 0 8px 8px;
    }

    .brand_zm_l {
      border-bottom: 2px #eee solid;
      font-size: 18px;
      text-align: center;
      margin-top: 8px;
      height: 84px;
      padding-top: 16px;
    }

    .brand_zm_l p {
      margin-top: 15px;
      color: #888;
    }

    .bradn_zm_r {
      display: inline;
    }

    .bradn_zm_r a {
      background: #E8E8E8;
      color: #353535;
      display: block;
      float: left;
      height: 34px;
      line-height: 34px;
      text-align: center;
      width: 34px;
      margin: 0 5px 5px 0;
    }

    .bradn_zm_r a.sel {
      background: #000;
      color: #fff;
    }

    .pinpai_mar5 {
      margin-right: 5px;
    }

    .pinpai_list1 {
      float: left;
      width: 33.3%
    }

    .brand_view_text img {
      width: 140px;
      height: 56px;
    }

    .brand_view_text {
      font-size: 11px;
      line-height: 16px;
      margin-top: 10px;
      color: #888;
    }

    .brand_view_text {
      position: relative;
    }

    .brand_view_tt {
      float: left;
      width: 150px;
      text-align: center;
      color: #555;
      font-weight: bold;
    }

    .shop_top_m {
      line-height: 44px;
    }

    .sear_r {
      position: absolute;
      right: 0;
      top: 0;
      width: 50px;
      text-align: center;
      height: 44px;
      line-height: 44px;
    }

    .sear_r input {
      border: 0;
      background: none;
      line-height: 44px;
      height: 44px;
      font-size: 14px;
      color: #555;
    }

    .user_list {
      border-top: 1px #ddd solid;
      padding: 0 0 0 10px;
      background: #fff;
      margin-top: 10px;
    }

    .user_list li {
      border-bottom: 1px solid #efefef;
      height: 40px;
      line-height: 40px;
      position: relative;
      padding-left: 22px;
    }

    .user_list li a {
      display: block;
      vertical-align: middle;
      font-family: '微软雅黑';
      color: #666;
    }

    .user_list li span {
      background: var(--image-path2) no-repeat scroll 0 0 / 200px 200px rgba(0, 0, 0, 0);
      background-position: -168px -134px;
      display: block;
      width: 18px;
      height: 18px;
      position: absolute;
      left: 2px;
      top: 12px;
    }

    .jdt img {
      width: 100%;
    }

    .index_foot {
      text-align: center;
      color: #aaa;
      padding: 15px 10px;
      font-size: 12px;
      line-height: 22px;
    }

    .index_foot a {
      color: #aaa;
    }

    .hd_box {
      height: 40px;
      line-height: 40px;
      color: #fff;
      width: 100%;
    }

    .ico_hd {
      background: linear-gradient(to right, #EF3390, #EF3647) repeat scroll 0 0 rgba(0, 0, 0, 0);
      width: 62%;
      height: 100%;
      position: relative
    }

    .ico_hd span {
      padding-left: 40px;
    }

    .hd_r {
      width: 38%;
      background: #FEEAE9;
      text-align: center;
      height: 100%;
      color: #EF3561;
      line-height: 20px;
      font-size: 12px;
    }

    .hd_r span {
      font-size: 11px;
    }

    .ico_hd i {
      background: url(../images/ico_sz.png) no-repeat;
      background-size: 20px auto;
      width: 20px;
      height: 20px;
      display: block;
      position: absolute;
      left: 10px;
      top: 50%;
      margin-top: -10px;
    }

    .pro_tt {
      font-size: 14px;
    }

    .pro_fx {
      position: absolute;
      width: 50px;
      padding: 2px 6px;
      text-align: center;
      right: -10px;
      top: 3px;
      font-size: 12px;
      color: #888;
      cursor: pointer;
      background: #f5f5f5;
      border-top-left-radius: 12px;
      border-bottom-left-radius: 12px;
      display: flex;
    }

    .pro_fx i {
      background: url(../images/fx.png) no-repeat;
      background-size: 18px auto;
      width: 18px;
      height: 18px;
      display: inline-block;
    }

    .pro_fx p {
      margin-left: 3px;
    }

    .yunfei_box {
      border-top: 1px solid #f0f0f0;
      font-size: 12px;
      padding: 10px 0 0;
      margin-top: 10px;
      color: #666;
    }

    .yunfei_box span {
      float: left;
      width: 33.3%;
    }

    .xz_box {
      height: 40px;
      line-height: 40px;
      background: #fff;
      margin-top: 10px;
      padding-left: 10px;
      position: relative;
    }

    .xz_box i {
      background: url(../images/jt.png) no-repeat;
      width: 6px;
      height: 10px;
      display: block;
      background-size: 6px 10px;
      position: absolute;
      right: 10px;
      top: 50%;
      margin-top: -5px;
    }

    .tc_img img {
      width: 80px;
      height: 80px;
      border: 1px #eee solid;
    }

    .tc_pro {
      margin-left: 5px;
    }

    .tc_pro td {
      padding: 8px 5px;
      text-align: left;
    }

    .sh_box {
      padding: 10px 0 0 10px;
    }

    .sh_tt {
      margin-bottom: 8px;
    }

    .sh_xian {
      border-top: 1px #eee solid;
      margin: 5px 10px 0;
    }

    .sh_buy {
      position: relative;
      height: 50px;
      line-height: 50px;
    }

    .shuliang {
      position: absolute;
      right: 10px;
      top: 50%;
      margin-top: -13px;
    }

    .buy_btn {
      margin-top: 10px
    }

    .buy_btn a {
      background: #4e1392;
      height: 50px;
      line-height: 50px;
      text-align: center;
      color: #fff;
      width: 50%;
      display: block;
      font-size: 15px;
      float: left
    }

    .buy_btn a.gm {
      background: #cb11aa;
    }


    .tjdz_box {
      background: #fff url(../images/add_xian.png) repeat-x bottom;
      background-size: 34px 2px;
      padding: 15px 0 15px 10px;
      overflow: hidden;
      position: relative;
    }

    .jt_r {
      background: url(../images/jt.png) no-repeat;
      width: 6px;
      height: 10px;
      display: block;
      background-size: 6px 10px;
      position: absolute;
      right: 10px;
      top: 50%;
      margin-top: -5px;
    }

    .add_ico {
      position: absolute;
      left: 0;
      top: 2px;
      background: url(../images/add_ico.png) no-repeat;
      background-size: 18px auto;
      width: 18px;
      height: 18px;
      display: block;
    }

    .close_btn {
      background: url(../images/close.png) no-repeat;
      background-size: 22px auto;
      width: 22px;
      height: 22px;
      right: 10px;
      top: 14px;
      display: block;
      position: absolute
    }

    .quan_tc {
      padding: 30px 20px;
      color: #555;
    }

    .order_r {
      color: #666;
      font-weight: normal;
      color: #888;
      font-size: 12px;
    }

    .dd_box1 {
      padding: 10px;
      position: relative;
      min-height: 80px;
    }

    .add_tt {
      height: 50px;
      line-height: 50px;
      border-bottom: 1px #f4f4f4 solid;
      text-align: center;
      background: #f8f8f8
    }

    .add_sel {
      padding: 15px 0;
      position: relative;
      border-bottom: 1px #eee solid;
      font-size: 13px;
      line-height: 18px;
      background: #fff;
      display: block;
      margin: 0 10px;
      z-index: 999;
    }

    .js_radio .dui_1 {
      background: var(--image-path8) no-repeat;
      background-size: 18px auto;
      width: 18px;
      height: 18px;
      display: block;
      position: absolute;
      right: 0;
      top: 50%;
      margin-top: -9px;
    }

    .js_radio.sel .dui_1 {
      background: var(--image-path9) no-repeat;
      background-size: 18px auto;
      width: 18px;
      height: 18px;
      display: block;
      position: absolute;
      right: 0;
      top: 50%;
      margin-top: -9px;
    }

    .edit_add {
      background: url(../images/edit.png) no-repeat;
      background-size: 22px auto;
      width: 22px;
      height: 22px;
      display: block;
      position: absolute;
      right: 10px;
      top: 50%;
      margin-top: -11px;
    }

    .add_jia {
      background: url(../images/jia.png) no-repeat;
      background-size: 18px auto;
      width: 18px;
      height: 18px;
      display: block;
      position: absolute;
      left: 10px;
      top: 50%;
      margin-top: -9px;
    }

    a.add_xj {
      display: block;
      padding: 15px 30px 15px 40px;
      position: relative;
      color: #333;
      margin-left: 10px
    }

    a.add_xj .jt_r {
      right: 18px;
    }

    .quan_box {
      padding: 15px 0;
      background: #fff;
      border-bottom: 1px #eee solid;
      margin: 0 10px;
      position: relative;
      color: #888;
      font-size: 13px;
    }

    .quan_sel {
      padding-bottom: 20px;
    }

    .quan_sel .add_sel {
      padding: 20px 0;
    }

    .quan_input {
      border: 1px #ddd solid;
      height: 28px;
      line-height: 28px;
      width: 120px;
      padding: 0 5px;
      position: relative
    }

    .quan_input input {
      background: none;
      border: 0;
      height: 100%;
      line-height: 100%;
      width: 80px;
      font-size: 14px;
    }

    .quan_input span {
      position: absolute;
      right: 0;
      top: 0px;
      width: 40px;
      text-align: center;
      font-size: 13px;
    }

    .quan_dh {
      background: linear-gradient(to right, #cb11ab 0, #481173 100%);
      width: 100px;
      height: 30px;
      line-height: 30px;
      text-align: center;
      color: #fff;
      border: 0;
      border-radius: 15px;
      margin: 20px 0 0 70px;
    }

    .quan_dh a {
      display: block;
      color: #fff;
    }

    .quan_dh input {
      background: none;
      border: 0;
      height: 100%;
      line-height: 100%;
      color: #fff;
      font-size: 14px;
    }

    .quan_add {
      background: url(../images/quan.png) no-repeat;
      background-size: 20px auto;
      width: 20px;
      height: 20px;
      display: block;
      position: absolute;
      left: 0;
      top: 50%;
      margin-top: -10px;
      bottom: 0;
    }

    .add_tj {
      position: fixed;
      height: 50px;
      line-height: 50px;
      border-top: 1px #eee solid;
      background: #fff;
      z-index: 9;
      width: 100%;
      left: 0;
      bottom: 0;
    }

    .add_tjbtn {
      background: linear-gradient(to right, #cb11ab 0, #481173 100%);
      height: 50px;
      line-height: 50px;
      width: 120px;
      color: #fff;
      text-align: center;
      float: right;
      font-size: 14px;
    }

    .add_tjbtn a {
      display: block;
      color: #fff;
    }

    .add_tjbtn input {
      background: none;
      border: 0;
      height: 100%;
      line-height: 100%;
      color: #fff;
      font-size: 14px;
      cursor: pointer;
      width: 100%;
    }

    a.tjbtn {
      background: linear-gradient(to right, #cb11ab 0, #481173 100%);
      border-radius: 20px;
      height: 40px;
      line-height: 40px;
      margin: 15px;
      cursor: pointer;
      display: block;
      color: #fff;
      text-align: center;
      font-size: 16px;
      font-family: 'Microsoft Yahei', "宋体";
    }

    .pj_tt1 {
      padding: 15px 0;
      margin: 0 auto;
      position: relative;
      margin-bottom: 15px;
    }

    .pj_tt1 .xian_tt {
      border-top: 1px #ddd solid;
      height: 1px;
      overflow: hidden;
      position: absolute;
      width: 200px;
      left: 50%;
      margin-left: -100px;
      top: 20px
    }

    .pj_tt1 span {
      position: absolute;
      width: 120px;
      border-radius: 2px;
      background: #f4f4f4;
      text-align: center;
      top: 10px;
      left: 50%;
      margin-left: -60px;
      display: block;
      color: #999;
      font-size: 14px;
    }

    .pj_tt1 i {
      background: url(../images/pj.png) no-repeat;
      background-size: 18px auto;
      width: 18px;
      height: 17px;
      display: inline-block;
      margin: 4px 5px 0 0
    }

    .pro_pjbox {
      background: #fff;
      padding: 0 10px 10px;
    }

    .pl_tx {
      text-align: center;
      width: 30px;
      height: 30px;
      overflow: hidden;
      margin-right: 10px;
    }

    .pl_tx img {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      display: block
    }

    .pt_tx {
      text-align: center;
      width: 40px;
      height: 40px;
      overflow: hidden;
      margin-right: 10px;
    }

    .pt_tx img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: block
    }

    .pj_more {
      border: 1px #ff5000 solid;
      border-radius: 20px;
      height: 26px;
      line-height: 26px;
      width: 120px;
      margin: 10px auto 0;
      text-align: center;
    }

    .pj_more a {
      display: block;
      color: #ff5000;
      font-size: 12px;
    }

    .pj_tt2 i {
      background: url(../images/tw.png) no-repeat;
      background-size: 19px auto;
      width: 19px;
      height: 17px;
      display: block;
    }

    .xian2 {
      border-bottom: 1px #f0f0f0 solid;
    }

    .shaitu li {
      float: left;
      width: 33.33%;
    }

    .shaitu li .li_box {
      margin: 0 3px 5px 2px;
    }

    .shaitu li img {
      width: 100%;
    }

    .shaitu li:nth-child(3n) .li_box {
      margin: 0 2px 5px 3px;
    }

    .iframe_close_btn {
      width: 31px;
      height: 30px;
      border-radius: 4px;
      display: block;
      cursor: pointer;
      position: absolute;
      top: 10px;
      right: 5px;
      z-index: 999;
    }

    .iframe_close_btn i {
      background: url(../images/icon_tb1.png) scroll 0 0 / 200px 200px;
      background-position: -77px -80px;
      width: 30px;
      height: 30px;
      display: block;
      margin: 4px 0 0 4px;
    }

    .pl_pro {
      padding: 10px 0 0;
      height: auto;
      line-height: 30px;
      border-bottom: 0;
      font-size: 14px;
    }

    .pro_pjtt {
      border-bottom: 1px #f0f0f0 solid;
      position: relative;
      height: 40px;
      line-height: 40px;
    }

    .pro_pjtt a {
      display: block;
      color: #333
    }

    .pro_pjtt i {
      background: url(../images/jt.png) no-repeat;
      width: 6px;
      height: 10px;
      display: block;
      background-size: 6px 10px;
      position: absolute;
      right: 0;
      top: 50%;
      margin-top: -5px;
    }

    .pro_pjtt span {
      position: absolute;
      right: 10px;
      color: #888;
      font-size: 12px;
    }

    .js_cart .dui {
      background: var(--image-path8) no-repeat;
      background-size: 18px auto;
      width: 18px;
      height: 18px;
      display: block;
      position: absolute;
      left: 10px;
      top: 40px;
    }

    .js_cart .dui.sel {
      background: var(--image-path9) no-repeat;
      background-size: 18px auto;
      width: 18px;
      height: 18px;
      display: block;
      position: absolute;
      left: 10px;
      top: 40px;
    }

    .dd_box2 {
      padding: 10px 10px 10px 40px;
      position: relative;
      border-bottom: 1px #eee solid;
      margin-bottom: 5px;
    }

    .add_qx {
      position: absolute;
      left: 0;
      top: 0;
      color: #888;
    }

    .add_qx span {
      position: relative;
      padding-left: 35px;
    }

    .add_qx i {
      background: var(--image-path8) no-repeat;
      background-size: 18px auto;
      width: 18px;
      height: 18px;
      display: block;
      position: absolute;
      left: 10px;
      top: 50%;
      margin-top: -9px;
    }

    .add_qx i.sel {
      background: var(--image-path9) no-repeat;
      background-size: 18px auto;
      width: 18px;
      height: 18px;
      display: block;
      position: absolute;
      left: 10px;
      top: 50%;
      margin-top: -9px;
    }

    .add_heji {
      position: absolute;
      right: 130px;
    }

    .sl_1 {
      position: static;
      margin-top: 0
    }

    a.xg_a {
      text-decoration: underline;
      color: #aaa;
    }

    .foot_nav {
      margin: 10px auto 0;
      position: fixed;
      bottom: 0;
      z-index: 9999;
      width: 100%;
      z-index: 999;
      border-top: 1px #f0f0f0 solid;
      background: #fff;
      left: 0
    }

    .foot_nav ul {
      padding: 5px 16px 0;
    }

    .foot_nav li {
      width: 20%;
      float: left;
      text-align: center;
      margin-bottom: 2px;
    }

    .foot_nav li a span {
      font-size: 11px;
      display: block;
      font-family: "微软雅黑";
      color: #888;
      line-height: 20px;
    }

    .foot_nav span {
      display: block;
      line-height: 16px;
    }

    .foot_nav li a.sel span {
      color: #f82a2a;
    }

    /*.foot_nav i{background:var(--image-path) no-repeat scroll 0 0 / 200px 200px rgba(0, 0, 0, 0);display:block; width:25px; height:25px; margin:0 auto}*/
    /*.foot_nav i.foot_i1{background-position:0 -3px;}
.foot_nav li a.sel i.foot_i1{background-position:0 -28px;}*/
    /*.foot_nav i.foot_i2{background-position:-42px -3px;}
.foot_nav i.foot_i3{background:url(../images/kefuhui.png) no-repeat scroll 0 0 / 25px 25px}
.foot_nav i.foot_i4{background-position:-123px 0;}
.foot_nav i.foot_i5{background-position:-160px -2px;}*/
    /*.foot_nav i.foot_i5{background:url(../images/pdd.png) no-repeat scroll 0 0 / 25px 25px}*/
    .foot_nav i {
      background-repeat: no-repeat;
      display: block;
      width: 25px;
      height: 25px;
      margin: 0 auto
    }

    .foot_nav i.foot_i1 {
      background-image: url(data:image/svg+xml,%3Csvg%20width%3D%2250%22%20height%3D%2220%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M19.5%208.9L11.3.5a1.8%201.8%200%2000-2.6%200L.5%209A1.8%201.8%200%20001.8%2012h.3v5.8c0%201.2%201%202.2%202.2%202.2h3.2c.3%200%20.6-.3.6-.6v-4.7c0-.5.4-1%201-1h1.8c.6%200%201%20.5%201%201v4.7c0%20.3.3.6.6.6h3.2c1.2%200%202.2-1%202.2-2.2V12h.3c.5%200%201-.2%201.3-.5.7-.8.7-2%200-2.6z%22%20fill%3D%22%23CCC%22%2F%3E%3Cpath%20d%3D%22M49.5%208.9L41.3.5a1.8%201.8%200%2000-2.6%200L30.5%209a1.8%201.8%200%20001.3%203.1h.3v5.8c0%201.2%201%202.2%202.2%202.2h3.2c.3%200%20.6-.3.6-.6v-4.7c0-.5.4-1%201-1h1.8c.6%200%201%20.5%201%201v4.7c0%20.3.3.6.6.6h3.2c1.2%200%202.2-1%202.2-2.2V12h.3c.5%200%201-.2%201.3-.5.7-.8.7-2%200-2.6z%22%20fill%3D%22%23CB11AB%22%2F%3E%3C%2Fsvg%3E);
      background-position: 0px 0px;
      background-size: 58px;
      /*    width: 20px;*/
      height: 25px;
      margin: 10px auto;
    }

    .foot_nav li a.sel i.foot_i1 {
      background-image: url(data:image/svg+xml,%3Csvg%20width%3D%2250%22%20height%3D%2220%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M19.5%208.9L11.3.5a1.8%201.8%200%2000-2.6%200L.5%209A1.8%201.8%200%20001.8%2012h.3v5.8c0%201.2%201%202.2%202.2%202.2h3.2c.3%200%20.6-.3.6-.6v-4.7c0-.5.4-1%201-1h1.8c.6%200%201%20.5%201%201v4.7c0%20.3.3.6.6.6h3.2c1.2%200%202.2-1%202.2-2.2V12h.3c.5%200%201-.2%201.3-.5.7-.8.7-2%200-2.6z%22%20fill%3D%22%23CCC%22%2F%3E%3Cpath%20d%3D%22M49.5%208.9L41.3.5a1.8%201.8%200%2000-2.6%200L30.5%209a1.8%201.8%200%20001.3%203.1h.3v5.8c0%201.2%201%202.2%202.2%202.2h3.2c.3%200%20.6-.3.6-.6v-4.7c0-.5.4-1%201-1h1.8c.6%200%201%20.5%201%201v4.7c0%20.3.3.6.6.6h3.2c1.2%200%202.2-1%202.2-2.2V12h.3c.5%200%201-.2%201.3-.5.7-.8.7-2%200-2.6z%22%20fill%3D%22%23CB11AB%22%2F%3E%3C%2Fsvg%3E);
      background-position: -35px 0px;
      background-size: 58px;
      /*    width: 20px;*/
      height: 25px;
      margin: 10px auto;
    }

    .foot_nav i.foot_i3 {
      background-image: url(data:image/svg+xml,%3Csvg%20width%3D%2246%22%20height%3D%2217%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M9.5%2017C4.539%2012.75%200%208.5%200%205.1%200%202.125%202.322%200%205.278%200%206.86%200%208.444.744%209.5%201.913%2010.556.743%2012.139%200%2013.722%200%2016.678%200%2019%202.125%2019%205.1c0%203.4-4.539%207.65-9.5%2011.9Z%22%20fill%3D%22%23CCC%22%2F%3E%3Cpath%20d%3D%22M36.5%2017C31.539%2012.75%2027%208.5%2027%205.1%2027%202.125%2029.322%200%2032.278%200c1.583%200%203.166.744%204.222%201.913C37.556.743%2039.139%200%2040.722%200%2043.678%200%2046%202.125%2046%205.1c0%203.4-4.539%207.65-9.5%2011.9Z%22%20fill%3D%22%23CB11AB%22%2F%3E%3C%2Fsvg%3E);
      background-position: 0px 0px;
      background-size: 58px;
      /*    width: 20px;*/
      height: 25px;
      margin: 10px auto;
    }

    .foot_nav li a.sel i.foot_i3 {
      background-image: url(data:image/svg+xml,%3Csvg%20width%3D%2246%22%20height%3D%2217%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M9.5%2017C4.539%2012.75%200%208.5%200%205.1%200%202.125%202.322%200%205.278%200%206.86%200%208.444.744%209.5%201.913%2010.556.743%2012.139%200%2013.722%200%2016.678%200%2019%202.125%2019%205.1c0%203.4-4.539%207.65-9.5%2011.9Z%22%20fill%3D%22%23CCC%22%2F%3E%3Cpath%20d%3D%22M36.5%2017C31.539%2012.75%2027%208.5%2027%205.1%2027%202.125%2029.322%200%2032.278%200c1.583%200%203.166.744%204.222%201.913C37.556.743%2039.139%200%2040.722%200%2043.678%200%2046%202.125%2046%205.1c0%203.4-4.539%207.65-9.5%2011.9Z%22%20fill%3D%22%23CB11AB%22%2F%3E%3C%2Fsvg%3E);
      background-position: -35px 0px;
      background-size: 58px;
      /*    width: 20px;*/
      height: 25px;
      margin: 10px auto;
    }

    .foot_nav i.foot_i5 {
      background-image: url("data:image/svg+xml,%3Csvg%20width%3D%2253%22%20height%3D%2220%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20clip-path%3D%22url(%23a)%22%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20fill%3D%22%23CCC%22%3E%3Cpath%20d%3D%22M8.32%2013.222a1%201%200%200%200%201.097.65l11.344-1.788a1%201%200%200%200%20.824-.79l1.177-5.829a1%201%200%200%200-.964-1.197l-15.35-.245a1%201%200%200%200-.957%201.339l2.83%207.86ZM9%2020a2%202%200%201%200%200-4%202%202%200%200%200%200%204ZM20%2020a2%202%200%201%200%200-4%202%202%200%200%200%200%204ZM3.5%202.5C5.433%202.5%207%201.94%207%201.25S5.433%200%203.5%200%200%20.56%200%201.25%201.567%202.5%203.5%202.5Z%22%2F%3E%3C%2Fg%3E%3Cg%20clip-path%3D%22url(%23b)%22%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20fill%3D%22%23CB11AB%22%3E%3Cpath%20d%3D%22M38.32%2013.222a1%201%200%200%200%201.097.65l11.344-1.788a1%201%200%200%200%20.824-.79l1.178-5.829a1%201%200%200%200-.965-1.197l-15.35-.245a1%201%200%200%200-.957%201.339l2.83%207.86ZM39%2020a2%202%200%201%200%200-4%202%202%200%200%200%200%204ZM50%2020a2%202%200%201%200%200-4%202%202%200%200%200%200%204ZM33.5%202.5c1.933%200%203.5-.56%203.5-1.25S35.433%200%2033.5%200%2030%20.56%2030%201.25s1.567%201.25%203.5%201.25Z%22%2F%3E%3C%2Fg%3E%3Cdefs%3E%3CclipPath%20id%3D%22a%22%3E%3Cpath%20fill%3D%22%23fff%22%20d%3D%22M0%200h23v20H0z%22%2F%3E%3C%2FclipPath%3E%3CclipPath%20id%3D%22b%22%3E%3Cpath%20fill%3D%22%23fff%22%20transform%3D%22translate(30)%22%20d%3D%22M0%200h23v20H0z%22%2F%3E%3C%2FclipPath%3E%3C%2Fdefs%3E%3C%2Fsvg%3E");
      background-position: 0px 0px;
      background-size: 58px;
      /*    width: 20px;*/
      height: 25px;
      margin: 10px auto;
    }

    .foot_nav i.foot_i2 {
      background-image: url(data:image/svg+xml,%3Csvg%20width%3D%2253%22%20height%3D%2220%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M8.582%203H1.5a1.5%201.5%200%201%200%200%203H8c0-1.06.207-2.074.582-3Zm.488%207H1.5a1.5%201.5%200%200%200%200%203h10c.17%200%20.332-.028.484-.08A8.04%208.04%200%200%201%209.07%2010ZM1.5%2017a1.5%201.5%200%200%200%200%203h17a1.5%201.5%200%200%200%200-3h-17ZM19.5%206a3.5%203.5%200%201%201-7%200%203.5%203.5%200%200%201%207%200Zm-.047%204.907a6%206%200%201%201%201.7-1.833l2.271%202.178a1.25%201.25%200%201%201-1.73%201.804l-2.24-2.149Z%22%20fill%3D%22%23CCC%22%2F%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M37.391%203H30.31a1.5%201.5%200%201%200%200%203h6.5c0-1.06.206-2.074.581-3Zm.489%207h-7.57a1.5%201.5%200%201%200%200%203h10c.169%200%20.332-.028.483-.08A8.04%208.04%200%200%201%2037.88%2010Zm-7.57%207a1.5%201.5%200%201%200%200%203h17a1.5%201.5%200%200%200%200-3h-17ZM48.31%206a3.5%203.5%200%201%201-7%200%203.5%203.5%200%200%201%207%200Zm-.047%204.907a6%206%200%201%201%201.7-1.833l2.271%202.178a1.25%201.25%200%201%201-1.73%201.804l-2.24-2.149Z%22%20fill%3D%22%23CB11AB%22%2F%3E%3C%2Fsvg%3E);
      background-position: 0px 0px;
      background-size: 58px;
      /*    width: 20px;*/
      height: 25px;
      margin: 10px auto;
    }

    .foot_nav i.foot_i4 {
      background-image: url(data:image/svg+xml,%3Csvg%20width%3D%2248%22%20height%3D%2220%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M14.737%204.8c0%202.8-2.105%205-4.737%205-2.526%200-4.737-2.2-4.737-5C5.263%202.1%207.368%200%2010%200s4.737%202%204.737%204.8ZM0%2018.5c0%201%20.632%201.5%202.526%201.5h14.948C19.368%2020%2020%2019.5%2020%2018.5c0-2.9-3.895-6.8-10-6.8s-10%204-10%206.8Z%22%20fill%3D%22%23CCC%22%2F%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M42.737%204.8c0%202.8-2.105%205-4.737%205-2.526%200-4.737-2.2-4.737-5C33.263%202.1%2035.368%200%2038%200s4.737%202%204.737%204.8ZM28%2018.5c0%201%20.632%201.5%202.526%201.5h14.948C47.368%2020%2048%2019.5%2048%2018.5c0-2.9-3.895-6.8-10-6.8s-10%204-10%206.8Z%22%20fill%3D%22%23CB11AB%22%2F%3E%3C%2Fsvg%3E);
      background-position: 0px 0px;
      background-size: 58px;
      /*    width: 20px;*/
      height: 25px;
      margin: 10px auto;
    }

    .foot_nav li a.sel i.foot_i4 {
      background-image: url(data:image/svg+xml,%3Csvg%20width%3D%2248%22%20height%3D%2220%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M14.737%204.8c0%202.8-2.105%205-4.737%205-2.526%200-4.737-2.2-4.737-5C5.263%202.1%207.368%200%2010%200s4.737%202%204.737%204.8ZM0%2018.5c0%201%20.632%201.5%202.526%201.5h14.948C19.368%2020%2020%2019.5%2020%2018.5c0-2.9-3.895-6.8-10-6.8s-10%204-10%206.8Z%22%20fill%3D%22%23CCC%22%2F%3E%3Cpath%20fill-rule%3D%22evenodd%22%20clip-rule%3D%22evenodd%22%20d%3D%22M42.737%204.8c0%202.8-2.105%205-4.737%205-2.526%200-4.737-2.2-4.737-5C33.263%202.1%2035.368%200%2038%200s4.737%202%204.737%204.8ZM28%2018.5c0%201%20.632%201.5%202.526%201.5h14.948C47.368%2020%2048%2019.5%2048%2018.5c0-2.9-3.895-6.8-10-6.8s-10%204-10%206.8Z%22%20fill%3D%22%23CB11AB%22%2F%3E%3C%2Fsvg%3E);
      background-position: -35px 0px;
      background-size: 58px;
      /*    width: 20px;*/
      height: 25px;
      margin: 10px auto;
    }






    .share_box {
      padding: 20px;
    }

    .share_img img {
      width: 100%;
    }

    .share_name {
      min-height: 63px;
      line-height: 18px
    }

    .share_pro {
      position: relative;
      height: 100px;
      text-align: left;
      padding-right: 110px;
      margin-top: 10px;
    }

    .share_pro img {
      position: absolute;
      right: 0;
      top: 0;
      width: 100px;
      height: 100px;
    }

    .close_w {
      width: 22px;
      height: 22px;
      display: block;
      position: absolute;
      top: -22px;
      right: -5px;
    }

    .close_w a {
      background: url(../images/close_w.png) no-repeat;
      background-size: 22px auto;
      display: block;
      width: 22px;
      height: 22px;
    }

    .yhq_sel1 {
      border-bottom: 1px #f0f0f0 solid;
      line-height: 42px;
      position: relative
    }

    .tjr_input {
      height: 42px;
      line-height: 42px;
      font-size: 14px;
      margin-left: 80px;
      display: block;
    }

    .tjr_input input {
      height: 100%;
      line-height: 100%;
      background: none;
      font-size: 14px;
      border: 0;
      width: 100%;
    }

    .yhq_sel1_l {
      width: 80px;
      position: absolute;
      left: 0;
    }

    .yhq_sel1 .r_jt i {
      top: 0px;
    }

    .r_jt2 {
      padding: 0;
      text-align: right;
      position: absolute;
      z-index: 99;
      top: 18px;
      right: 0;
    }

    .r_jt2 i {
      background: url(../images/jt.png) no-repeat right;
      background-size: 6px auto;
      width: 6px;
      height: 10px;
      display: inline-block;
      margin: 0 0 0 10px;
    }

    .pt_box {
      padding: 0 10px 10px;
      background: #fff;
    }

    .pt_box1 {
      background: #fcf4f3;
      padding: 0 5px 8px;
    }

    .pt_box_tt {
      position: relative;
      border-bottom: 1px #ddd solid;
      height: 35px;
      line-height: 35px;
      color: #666;
    }

    .pt_info {
      padding-left: 0 10px;
    }

    .pt_info li {
      float: left;
      width: 33.33%;
      position: relative;
      font-size: 12px;
      line-height: 16px;
      margin: 15px 0 5px;
      color: #888
    }

    .pt_info li div {
      padding-left: 22px;
    }

    .pt_num {
      width: 16px;
      height: 16px;
      line-height: 16px;
      border-radius: 50%;
      font-size: 12px;
      text-align: center;
      color: #fff;
      background: #999;
      display: inline-block;
      position: absolute;
      left: 0;
      top: 50%;
      margin-top: -8px;
    }

    .pt_pro {
      background: #fff;
      padding: 15px;
      position: relative
    }

    .pt_pro_l {
      position: absolute;
      left: 10px;
      top: 18px;
      width: 140px;
      border: 1px #ddd solid;
    }

    .pt_pro_l img {
      width: 100%;
    }

    .pt_pro_r {
      margin-left: 150px;
    }

    .pt_proname {
      min-height: 38px;
      line-height: 18px;
    }

    .pt_proyj {
      border: 1px #ddd solid;
      border-radius: 5px;
      height: 38px;
      line-height: 38px;
      text-align: center;
      position: relative;
      margin-top: 15px;
    }

    .pt_proyj p {
      position: absolute;
      height: 20px;
      line-height: 20px;
      width: 80px;
      left: 50%;
      margin-left: -40px;
      background: #fff;
      top: -10px;
    }

    .pt_proxj {
      border: 1px #ff6600 solid;
      color: #ff6600;
    }

    .pt_sj {
      background: #fff;
      margin-top: 10px;
      padding: 15px;
      text-align: center;
    }

    .pt_djs {
      margin-top: 10px;
      color: #666;
    }

    .pt_djs span {
      background: #888;
      color: #fff;
      width: 20px;
      height: 20px;
      line-height: 20px;
      text-align: center;
      display: inline-block;
      border-radius: 2px;
      font-size: 13px;
    }

    .ico_djs {
      background: url(../images/ico_djs.png) no-repeat;
      background-size: 18px auto;
      width: 18px;
      height: 18px;
      display: inline-block;
      margin-right: 10px;
      float: left;
      margin-top: 4px;
    }

    .pt_sj_name {
      height: 25px;
      line-height: 25px;
      width: 200px;
      margin: 0 auto;
    }

    .tz_btn {
      background: #cb11aa;
      padding: 1px 5px;
      line-height: 14px;
      font-size: 12px;
      margin-left: 10px;
      color: #fff;
      border-radius: 2px;
    }

    .pt_foot {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 50px;
    }

    .pt_foot li {
      float: left;
      width: 50%;
    }

    .pt_foot li a {
      display: block;
      text-align: center;
      height: 50px;
      line-height: 50px;
      color: #fff;
    }

    .pt_foot li a.pt_btn1 {
      background: #cb11aa;
    }

    .pt_foot li a.pt_btn3 {
      background: #cb11aa;
    }

    .pt_foot li a.pt_btn2 {
      background: #4e1392;
    }

    .ico_dui {
      background: url(../images/dui.png) no-repeat;
      background-size: 20px auto;
      width: 20px;
      height: 16px;
      display: inline-block;
      float: left;
      margin: 3px 10px 0 0;
    }

    .pt_yct {
      margin: 0 auto;
      width: 80px;
    }

    .nodata {
      text-align: center;
      margin: 130px auto 80px;
    }

    .nodata_img {
      background: url(../images/nodate.png) no-repeat;
      background-size: 70px auto;
      width: 70px;
      height: 70px;
      text-align: center;
      margin: 0 auto
    }

    .nodata_tip {
      margin-top: 30px;
      color: #888;
      font-size: 16px;
    }

    .dingdan_yh {
      position: relative;
      background: #fff;
      height: 80px;
      border-radius: 6px;
      margin: 10px 10px 0;
      box-shadow: 2px 2px 6px 4px hsla(0, 0%, 67%, .2)
    }

    .quan_img {
      position: absolute;
      left: 0;
      top: 0;
      padding: 10px;
    }

    .quan_img img {
      width: 60px;
      height: 60px;
    }

    .yh_l {
      background: #fff;
      color: #333;
      height: 80px;
      margin-right: 90px;
      padding: 0 10px;
    }

    .yh_l a {
      color: #333;
    }

    .yh_r {
      width: 80px;
      background: #ff9300;
      height: 80px;
      color: #fff;
      line-height: 14px;
      text-align: right;
      font-size: 12px;
      position: absolute;
      right: 0;
      top: 0;
      border-top-right-radius: 6px;
      border-bottom-right-radius: 6px;
    }

    .yz_01 {
      position: absolute;
      background: url(../images/yz_01.png) no-repeat;
      background-size: 80px auto;
      width: 80px;
      height: 80px;
      display: block;
      right: 25px;
      top: 2px;
    }

    .yz_02 {
      position: absolute;
      background: url(../images/yz_02.png) no-repeat;
      background-size: 80px auto;
      width: 80px;
      height: 80px;
      display: block;
      right: 25px;
      top: 2px;
    }

    .yh_price {
      font-size: 20px;
      line-height: 22px;
      font-weight: bold;
      color: #f23030;
    }

    .yh_price span {
      background: #fff4ec;
      padding: 3px 5px;
      border-radius: 2px;
      color: #f23030;
      font-size: 12px;
      font-weight: normal;
      margin-left: 5px
    }

    .lingqu_btn {
      width: 50px;
      height: 42px;
      border-radius: 50%;
      border: 2px #fff solid;
      text-align: center;
      padding-top: 8px;
      font-size: 14px;
      line-height: 16px;
      margin: 13px auto 0;
      color: #fff
    }

    .footer {
      line-height: 22px;
      color: #aaa;
      text-align: center;
      padding: 15px 10px;
      font-size: 12px;
      background: #fff;
      margin-top: 10px;
      margin-bottom: 62px;
    }

    .footer a {
      color: #aaa;
    }

    .foot_name {
      font-size: 12px;
      color: #aaa
    }

    .foot_tel {
      font-size: 12px;
      color: #aaa
    }

    .zc_box2 {
      background: #fff;
      padding: 0 10px;
    }

    .zc_list {
      background: #fff;
      border-bottom: 1px #eee solid;
      line-height: 50px;
      height: 50px;
      position: relative
    }

    .zc_list:last-of-type {
      border-bottom: 0
    }

    .zc_list .jt_r {
      background: url(../images/jt.png) no-repeat;
      width: 6px;
      height: 10px;
      display: block;
      background-size: 6px 10px;
      position: absolute;
      right: 0;
      top: 50%;
      margin-top: -5px;
    }

    .zc_list .zc_name {
      position: absolute;
      left: 0;
      width: 75px;
    }

    .zc_list .zc_text {
      margin-left: 80px;
      position: relative;
      height: 50px;
      line-height: 50px;
      color: #888
    }

    .zc_list input[type='text'],
    .zc_list input[type='password'] {
      border: 0;
      height: 100%;
      line-height: 100%;
      width: 100%;
      font-size: 14px;
      background: #fff;
      border-radius: 0;
      color: #888;
      outline: none;
    }

    .zc_list select {
      height: 100%;
      width: 100%;
      color: #888;
      font-size: 14px;
      appearance: none;
      -moz-appearance: none;
      -webkit-appearance: none;
      border: none;
      padding: 0;
      background: url(../images/jt.png) no-repeat right center;
      background-size: 6px 10px;
    }

    .zc_textarea {
      height: 90px;
    }

    .zc_textarea .zc_name {
      height: 90px;
      line-height: 90px
    }

    .zc_textarea .zc_text {
      margin-left: 80px;
      position: relative;
      height: 90px;
      line-height: 20px;
    }

    .zc_textarea .zc_text textarea {
      border: 0;
      height: 75px;
      line-height: 20px;
      width: 100%;
      font-size: 14px;
      background: #fff;
      border-radius: 0;
      color: #888;
      outline: none;
      vertical-align: top;
      padding: 15px 0 0;
      position: relative
    }

    .zc_imgyzm {
      position: absolute;
      right: 0;
      bottom: 5px;
    }

    .zc_smsyzm {
      position: absolute;
      background: #fff;
      width: 80px;
      height: 30px;
      line-height: 30px;
      border-radius: 2px;
      color: #55abe1;
      font-size: 12px;
      z-index: 1;
      top: 9px;
      right: 0px;
      text-align: center;
    }

    .sh_moren {
      padding: 15px 0;
    }

    .miaosha {
      background: #fff;
      margin-top: 10px;
      padding: 10px;
    }

    .ms_tt {
      display: flex;
      position: relative;
    }

    .ms_name {
      font-size: 16px;
      color: #333
    }

    .ms_r {
      position: absolute;
      right: 0;
      display: flex;
      justify-content: flex-end
    }

    .ms_r i {
      background: url(../images/jt.png) no-repeat;
      background-size: 6px 10px;
      width: 6px;
      height: 10px;
      display: inline-block;
      margin: 6px 0 0 5px;
    }

    .ms_list {
      margin-top: 10px;
    }

    .ms_list li .li_box {
      border: 1px #eee solid;
      background: #f8f8f8
    }

    .guanggao {
      margin-top: 10px;
    }

    .guanggao img {
      width: 100%;
    }

    .sy_time {
      font-size: 12px;
      color: #666;
    }

    .tuijian_list li .sy_time span {
      font-size: 14px;
    }

    .foot_kefu {
      position: absolute;
      width: 40px;
      height: 40px;
      top: 55px;
      right: 10px;
      z-index: 99
    }

    .foot_kefu a {
      background: url(../images/kefu_ico.png) no-repeat;
      background-size: 40px 40px;
      display: block;
      width: 40px;
      height: 40px;
    }

    .foot_scbg {
      background: #000;
      opacity: 0.5;
      z-index: 99;
      position: absolute;
      width: 35px;
      height: 35px;
      border-radius: 50%;
      top: 12px;
      right: 12px;
    }

    .foot_fxbg {
      background: #000;
      opacity: 0.5;
      z-index: 99;
      position: absolute;
      width: 35px;
      height: 35px;
      border-radius: 50%;
      top: 12px;
      right: 58px;
    }

    .foot_jtbg {
      background: #000;
      opacity: 0.5;
      z-index: 99;
      position: absolute;
      width: 35px;
      height: 35px;
      border-radius: 50%;
      top: 12px;
      left: 12px;
    }

    .foot_sc {
      position: absolute;
      width: 35px;
      height: 35px;
      top: 12px;
      right: 56px;
      z-index: 100;
      margin: 0 auto
    }

    .foot_sc a {
      background: var(--image-path) no-repeat scroll -74px -76px / 200px 200px;
      display: block;
      width: 35px;
      height: 35px;
      margin: 0 auto;
    }

    .foot_fx {
      position: absolute;
      width: 35px;
      height: 35px;
      top: 12px;
      right: 12px;
      z-index: 100;
      margin: 0 auto
    }

    .foot_fx a {
      background: var(--image-path) no-repeat scroll -110px -76px / 200px 200px;
      display: block;
      width: 35px;
      height: 35px;
      margin: 0 auto;
    }

    .foot_jt {
      position: absolute;
      width: 35px;
      height: 35px;
      top: 12px;
      left: 12px;
      z-index: 100;
      margin: 0 auto
    }

    .foot_jt a {
      background: var(--image-path) no-repeat scroll -145px -78px / 200px 200px;
      display: block;
      width: 35px;
      height: 35px;
      margin: 0 auto;
    }

    /*.foot_sc a.sel{background:var(--image-path) no-repeat scroll -142px -56px / 200px 200px;  opacity:0.8;}*/
    .kf_ico1,
    .kf_ico2,
    .kf_ico3 {
      display: flex;
      justify-content: center;
      font-size: 15px;
    }

    .kf_ico1 i {
      background: var(--image-path) no-repeat scroll 0 -84px / 200px 200px;
      display: inline-block;
      width: 23px;
      height: 23px;
      margin: 3px 3px 0 0
    }

    .kf_ico2 i {
      background: var(--image-path) no-repeat scroll -27px -84px / 200px 200px;
      display: inline-block;
      width: 23px;
      height: 23px;
      margin: 3px 3px 0 2px
    }

    .kf_ico3 i {
      background: var(--image-path) no-repeat scroll -53px -84px / 200px 200px;
      display: inline-block;
      width: 23px;
      height: 23px;
      margin: 3px 3px 0 2px
    }

    .mjpj {
      background: #f8f8f8;
      padding: 10px;
      margin-top: 10px;
      border-radius: 4px;
    }

    .pt_rs {
      background: #ff0000;
      padding: 1px 5px;
      color: #fff;
      font-size: 12px;
      margin: 3px 0 0 10px;
      border-radius: 2px;
    }

    .pt_ico {
      position: absolute;
      right: 10px;
      top: 10px;
      z-index: 99
    }

    .pt_ico img {
      width: 70px
    }

    .pro_quan {
      position: relative;
      height: 40px;
      line-height: 40px;
      overflow: hidden;
      padding: 0 10px;
      display: flex;
      align-items: center;
    }

    .coupon {
      position: relative;
      padding: 0 9px 0 12px;
      border-top: 1px solid #e4393c;
      border-bottom: 1px solid #e4393c;
      height: 16px;
      line-height: 16px;
      color: #e4393c;
      font-size: 10px;
      display: inline-block;
      margin-left: 5px;
    }

    .coupon::before {
      content: "";
      position: absolute;
      left: 0;
      width: 7px;
      top: -1px;
      height: 18px;
      background: url(../images/quan.png) no-repeat;
      background-size: 15px 18px;
    }

    .coupon::after {
      content: "";
      position: absolute;
      right: 0;
      width: 4px;
      top: -1px;
      height: 18px;
      background: url(../images/quan.png) no-repeat;
      background-size: 15px 18px;
      background-position: -11px 0;
    }

    .pro_quan i {
      background: url(../images/jt.png) no-repeat;
      background-size: 6px 10px;
      width: 6px;
      height: 10px;
      display: inline-block;
      position: absolute;
      top: 50%;
      margin-top: -5px;
      right: 10px;
    }

    .quan_num {
      position: absolute;
      right: 20px;
      text-align: right;
      font-size: 12px;
      height: 12px;
      line-height: 12px;
      color: #888;
      top: 50%;
      margin-top: -6px;
    }

    .lq_box {
      padding-bottom: 10px;
    }

    .dingdan_yhq {
      position: relative;
      background: #fff2e6;
      height: 70px;
      border-radius: 6px;
      margin: 10px 10px 0;
      color: #ff5000;
      padding: 10px;
    }

    .dd_yhq_money {
      font-size: 18px;
    }

    .dd_yhq_l {
      margin-right: 80px;
      height: 70px;
    }

    .dd_yhq_r {
      width: 100px;
      height: 90px;
      line-height: 90px;
      position: absolute;
      right: 0;
      top: 0;
      color: #ff5000;
      z-index: 99;
      border-left: 1px #ffb973 dashed;
      text-align: center
    }

    .dd_yhq_r a {
      color: #ff5000;
      display: block;
      width: 100%;
    }

    .pindan_box {
      background: #fff;
      padding: 0 0 0 10px;
      margin-top: 10px;
    }

    .pindan_list {
      border-bottom: 1px #eee solid;
      display: flex;
      padding: 10px 0;
      position: relative;
    }

    .pindan_l {
      width: 40%;
      margin-right: 1%;
      text-overflow: ellipsis;
      position: relative
    }

    .pindan_r {
      width: 60%;
      display: flex;
      justify-content: flex-end;
      align-items: center;
      text-align: right
    }

    .pindan_tx {
      text-align: center;
      width: 50px;
      height: 50px;
      overflow: hidden;
      margin-right: 10px;
      position: absolute;
      left: 0;
    }

    .pindan_tx img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: block
    }

    .pindan_name {
      line-height: 50px;
      overflow: hidden;
      height: 50px;
      margin-left: 60px;
      display: block;
    }

    .pindan_btn {
      background: #cb11aa;
      color: #fff;
      width: 70px;
      height: 30px;
      line-height: 30px;
      text-align: center;
      margin: 0 10px;
      border-radius: 4px;
      display: inline-block;
    }

    .pindan_box .pindan_list:last-child {
      border-bottom: 0;
    }

    .pindan_more {
      position: absolute;
      top: 20px;
      width: 300px;
      height: 400px;
      top: 50%;
      margin-top: -200px;
      background: #fff;
      left: 50%;
      margin-left: -150px;
      z-index: 999
    }




    .pindan_cy {
      background: #fff;
      width: 300px;
      height: 220px;
      position: absolute;
      top: 50%;
      margin-top: -110px;
      left: 50%;
      margin-left: -150px;
      z-index: 999;
      text-align: center;
    }

    .cy_box {
      padding: 15px;
    }

    .cy_tt {
      font-size: 16px;
      margin-bottom: 5px;
    }

    .cy_btn a {
      background: #cb11aa;
      display: block;
      margin: 20px 0 0;
      color: #fff;
      height: 40px;
      line-height: 40px;
      border-radius: 5px;
      font-size: 16px;
    }

    .cy_text {
      color: #666;
    }

    .pt_txlist {
      display: flex;
      justify-content: center;
      margin: 20px 0 0;
    }

    .pt_txlist li {
      display: inline-block;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      position: relative;
      border: 1px #eee solid;
      text-align: center;
    }

    .pt_txlist li img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }

    .pt_zhu_text {
      position: absolute;
      width: 25px;
      height: 16px;
      line-height: 16px;
      width: 30px;
      font-size: 10px;
      background: #f9af42;
      border-radius: 8px;
      left: 0;
      top: -8px;
      color: #977132;
    }

    .pt_txlist li.pt_zhu {
      border: 1px #ebca79 solid;
    }

    .pt_txlist li.pt_qt {
      border: 1px #ddd dashed;
      background: #fff;
    }

    .wxshare {
      position: fixed;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.85);
      text-align: center;
      top: 0;
      left: 0;
      z-index: 105;
    }

    .wxshare_jt {
      position: fixed;
      right: 10%;
      top: 2%;
    }

    .wxshare_text {
      margin-top: 300px;
      font-size: 20px;
      line-height: 40px;
      color: #fff
    }


    /*分类*/
    .index-search-box {
      background: #fff;
      padding: 6px 6px 9px 6px;
    }

    .index-search {
      text-align: center;
      display: block;
      background: #f1f1f1;
      border-radius: 16px;
      overflow: hidden;
      position: relative;
      font-size: 14px;
      color: #999;
      box-sizing: border-box;
      height: 32px;
      line-height: 32px;
    }

    .index-cont-search {
      display: inline-block;
      padding-left: 30px;
      background: url(../images/search.png) no-repeat left center;
      background-size: 18px auto;
    }

    /*  */
    .cate-content {
      position: absolute;
      top: 48px;
      left: 0;
      bottom: 51px;
      right: 0;
      background: #fff;
      overflow: hidden;
    }

    .cate-left {
      width: 100px;
      color: #444;
      height: 100%;
      background: #f8f8f8;
      overflow-y: auto;
    }

    .cate-right {
      position: absolute;
      left: 100px;
      top: 0;
      right: 0;
      bottom: 0;
      overflow: hidden;
    }

    .cate-right-cont {
      position: absolute;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      background: #fff;
      display: flex;
      align-content: flex-start;
      padding-top: 13px;
      z-index: 1;
      overflow-y: auto;
    }

    .cate-right-cont.on {
      z-index: 2;
    }

    .type-nav {
      position: relative;
      height: 45px;
      line-height: 45px;
      text-align: center;
      z-index: 10;
      display: block;
      font-size: 13px;
    }

    .type-nav.selected {
      background: #fff;
      color: #ff495e;
      border-right: none;
      font-size: 14px;
    }

    .cate-cont-box {
      position: relative;
      background: #fff;
      overflow: hidden;
    }

    .flex-three {
      float: left;
      width: 33.33%;
      height: 120px;
    }

    .cate-cont-box .cate-img {
      padding: 6px 5px 2px 5px;
    }

    .cate-cont-box .cate-img img {
      width: 100%;
      height: 75px;
    }

    .cate-cont-box span {
      text-align: center;
      display: block;
      font-size: 13px;
      padding-bottom: 7px;
      color: #444;
      padding: 0 7px 15px 7px;
    }

    .cate-two-box {
      width: 100%;
      padding: 0 5px;
    }

    .onelist-hidden {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }
  </style>
  <link type="text/css" rel="stylesheet" href="<?php echo asset("assets/style_002.css")?>" />

  <script type="text/javascript" src="<?php echo asset("assets/jquery.js")?>"></script>
  <script type="text/javascript" src="<?php echo asset("assets/global.js")?>"></script>
  <script type="text/javascript" src="<?php echo asset("assets/arttpl.js")?>"></script>
  <link href="<?php echo asset("assets/layer.css")?>" type="text/css" rel="styleSheet" id="layermcss" />
</head>

<body>

  <script type="text/javascript">
    page_loading();
  </script>
  <link rel="stylesheet" href="<?php echo asset("assets/swiper-bundle.min.css")?>" />
  <style>
    .swiper {
      width: 94%;
      max-width: 750px;
      margin: 3%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      object-fit: cover;
      border-radius: 16px;
    }

    .top_logo {
      position: static;
    }

    .pagetop1 {
      display: flex;
    }
  </style>
  <div class="top_box1">
    <div class="pagetop1">
      <div class="top_logo">
        <a href="<?php  echo route("index") ?>"><img src="<?php echo asset("assets/2023090421432816992p.png")?>" /></a>
      </div>
      <div class="sear1" onclick="javascript:app_iframe('https://wbbff.cc/index.php?mod=search');">
        <div class="sear_tj1"><input type="button" value=" " /></div>
        <div class="sear_location1"><input type="button" value=" " /></div>
      </div>

      <div class="top_tc" id="top_menu">
        <ul>
          <li>
            <a href="<?php  echo route("index") ?>"><i class="top_tb1"></i><span>Главная</span></a>
          </li>
          <li>
            <a href="https://wbbff.cc/index.php/category"><i class="top_tb2"></i><span>Каталог</span></a>
          </li>
          <li>
            <a href="<?php  echo route("cart") ?>"><i class="top_tb3"></i><span>Корзина</span></a>
          </li>
          <li>
            <a href="<?php  echo route("profile") ?>"><i class="top_tb4"></i><span>Профиль</span></a>
          </li>
        </ul>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <div class="content" style="margin: 55px 0 60px">

    <div class="swiper-container jdt swiper-container-horizontal">
      <div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-backface-hidden">
        <div class="swiper-wrapper" id="swiper-wrapper-ad1d14b02f2a11063" aria-live="off" style="
              transition-duration: 0ms;
              transform: translate3d(-2488px, 0px, 0px);
              transition-delay: 0ms;
            ">
          <div class="swiper-slide swiper-slide-next" style="width: 602px; margin-right: 20px" role="group"
            aria-label="3 / 5" data-swiper-slide-index="2">
            <img src="<?php echo asset("assets/2024062519435317140u.png")?>" />
          </div>
          <div class="swiper-slide" style="width: 602px; margin-right: 20px" role="group" aria-label="4 / 5"
            data-swiper-slide-index="3">
            <img src="<?php echo asset("assets/2024062519442717131n.png")?>" />
          </div>
          <div class="swiper-slide" style="width: 602px; margin-right: 20px" role="group" aria-label="5 / 5"
            data-swiper-slide-index="4">
            <img src="<?php echo asset("assets/2024062519443917124e.png")?>" />
          </div>
          <div class="swiper-slide swiper-slide-prev" style="width: 602px; margin-right: 20px" role="group"
            aria-label="1 / 5" data-swiper-slide-index="0">
            <img src="<?php echo asset("assets/2024062519431817146u.png")?>" />
          </div>
          <div class="swiper-slide swiper-slide-active" style="width: 602px; margin-right: 20px" role="group"
            aria-label="2 / 5" data-swiper-slide-index="1">
            <img src="<?php echo asset("assets/2024062519433217161v.png")?>" />
          </div>
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>

    </div>
    @foreach ($categories as $category)
    <div class="tuijian_list mat10">
      <a href="#" title="{{ $category->name }}">
      <div class="tuijian_tt">
        <p></p>
        {{ $category->name }}<i class="tj_more"></i>
      </div>
      </a>

      <ul>
      @foreach ($category->products as $product)
      <li>
      <div class="li_box">
      <a href="{{ route('product', $product->id) }}" title="{{ $product->name }}">
        <div class="prolist_logo">
        <img src="{{ asset('storage/' . $product->images[0]) }}" data-url="" title="{{ $product->name }}"
        class="js_imgload" />
        </div>
      </a>
      <div class="prolist_name">
        <p>
        <a href="{{ route('product', $product->id) }}" title="{{ $product->name }}">{{ $product->name }}</a>
        </p>
        <span>₾{{ $product->price }}</span>
      </div>
      </div>
      </li>
    @endforeach
      </ul>
      <div class="clear"></div>
    </div>
  @endforeach

  </div>

  <!-- Swiper JS -->
  <script src="<?php echo asset("assets/swiper-bundle.min.js")?>"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 20,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      loop: true,
    });
  </script>

  <link type="text/css" rel="stylesheet" href="<?php echo asset("assets/swiper.min.css")?>" />
  <script type="text/javascript" src="<?php echo asset("assets/swiper.jquery.min.js")?>"></script>
  <script type="text/javascript" src="<?php echo asset("assets/jquery.SuperSlide.js")?>"></script>
  <script type="text/javascript" src="<?php echo asset("assets/wxsdk.js")?>"></script>
  <script type="text/javascript" src="<?php echo asset("assets/wxapi.js")?>"></script>
  <script type="text/javascript">
    $(function () {
      //var jdt_height = $(".content").width()/1.33;
      //$(".jdt, .jdt img").height(jdt_height);
      //焦点图切换
      var swiper = new Swiper(".swiper-container", {
        pagination: ".swiper-pagination",
        paginationClickable: true,
        // Disable preloading of all images
        preloadImages: false,
        // Enable lazy loading
        lazyLoading: true,
        initialSlide: 0,
        autoplay: 2000,
      });
      pe_jstime(".huodong_time", "1724145931", "html");
    });
    //滚动公告
    $("#gundong_html").slide({
      mainCell: ".gundong_list ul",
      effect: "topLoop",
      vis: 1,
      delayTime: 1000,
      interTime: 2000,
      autoPage: true,
      autoPlay: true,
    });
  </script>
  <style type="text/css">
    .tcbj {
      position: fixed;
      top: 0;
      width: 100%;
      bottom: 0;
      background-color: #000;
      z-index: 10000;
      opacity: 0.6;
    }

    .msg {
      justify-content: center;
      justify-items: center;
      /* align-items: center; */
      padding-top: 30px;
      margin: 10px;
      display: flex;
      width: 100%;
    }

    .tcbjd {
      display: flex;
      left: 15%;
      right: 15%;
      top: 30%;
      height: 200px;
      z-index: 100000;
      background-color: #fff;
      border-radius: 8px;
      position: fixed;
    }

    .tcbbtn {
      width: 80%;
      height: 50px;
      border-radius: 8px;
      /* margin: 10px 0; */
      background-color: rgb(215, 88, 88);
      justify-content: center;
      justify-items: center;
      align-items: center;
      color: #fff;
      position: absolute;
      bottom: 10px;
      left: 10%;
      right: 10%;
      display: flex;
    }
  </style>

  <div class="foot_nav">
    <ul>
      <li>
        <a href="<?php  echo route("index") ?>" class="sel"><i class="foot_i1"></i></a>
      </li>

      <li>
        <a href="<?php echo route("order") ?>"><i class="foot_i2"></i></a>
      </li>
      <li>
        <a href="<?php  echo route("cart") ?>"><i class="foot_i5"></i></a>
      </li>
      <!-- <li><a href="https://wbbff.cc/index.php/huodong/huodongindex"><i class="foot_i5"></i><span>促销</span></a></li> -->

      <!-- <li><a href=""><i class="foot_i3"></i><span>Поддержка</span></a></li> -->
      <li>
        <a href="<?php echo route("favorites") ?>"><i class="foot_i3"></i></a>
      </li>
      <li>
        <a href="<?php  echo route("profile") ?>"><i class="foot_i4"></i></a>
      </li>
    </ul>
    <div class="clear"></div>
  </div>
  <link rel="stylesheet" href="<?php echo asset("assets/weui.min.css")?>" />
  <link rel="stylesheet" href="<?php echo asset("assets/jquery-weui.min.css")?>" />
  <script src="<?php echo asset("assets/jquery-weui.js")?>"></script>
  <script type="text/javascript" src="<?php echo asset("assets/layer.js")?>"></script>
  <script type="text/javascript" src="<?php echo asset("assets/app.js")?>"></script>
  <script type="text/javascript" src="<?php echo asset("assets/jquery.scrollLoading.js")?>"></script>
  <script type="text/javascript">
    $(function () {
      $("img.js_imgload").scrollLoading();
    });
    //顶部菜单点击
    function top_menu() {
      if ($("#top_menu").is(":hidden")) {
        $("#top_menu").show();
      } else {
        $("#top_menu").hide();
      }
      $("#top_menu a").live("click", function () {
        $("#top_menu").hide();
      });
    }
    pe_loadscript("https://wbbff.cc/api.php?mod=cron");
  </script>
</body>

</html>