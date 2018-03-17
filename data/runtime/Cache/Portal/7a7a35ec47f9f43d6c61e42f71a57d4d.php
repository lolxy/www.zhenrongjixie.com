<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>联系我们 <?php echo ($site_name); ?></title>
<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
<meta name="description" content="<?php echo ($site_seo_description); ?>">
<?php  function _sp_helloworld(){ echo "hello ThinkCMF!"; } function _sp_helloworld2(){ echo "hello ThinkCMF2!"; } function _sp_helloworld3(){ echo "hello ThinkCMF3!"; } ?>
<?php $portal_index_lastnews="1,2"; $portal_hot_articles="1,2"; $portal_last_post="1,2"; $tmpl=sp_get_theme_path(); $default_home_slides=array( array( "slide_name"=>"ThinkCMFX2.2.0发布啦！", "slide_pic"=>$tmpl."Public/assets/images/demo/1.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.2.0发布啦！", "slide_pic"=>$tmpl."Public/assets/images/demo/2.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.2.0发布啦！", "slide_pic"=>$tmpl."Public/assets/images/demo/3.jpg", "slide_url"=>"", ), ); ?> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Set render engine for 360 browser -->
<meta name="renderer" content="webkit">
<!-- No Baidu Siteapp-->
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<!-- HTML5 shim for IE8 support of HTML5 elements -->
<!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
<link rel="icon" href="/themes/simplebootx/Public/assets/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/themes/simplebootx/Public/assets/images/favicon.ico" type="image/x-icon">
<link href="/themes/simplebootx/Public/assets/css/type.css" rel="stylesheet"/> 
<link href="/themes/simplebootx/Public/assets/css/style.css" rel="stylesheet"/>
    <link href="/themes/simplebootx/Public/assets/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
	<!--[if IE 7]>
	<link rel="stylesheet" href="/themes/simplebootx/Public/assets/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
<style>
#backtotop{position: fixed;bottom: 50px;right:20px;display: none;cursor: pointer;font-size: 50px;z-index: 9999;}
#backtotop:hover{color:#333}
</style>
	
<script src="http://api.map.baidu.com/api?v=1.3"></script>
<style>
img {
	max-width: none;
}
</style>
</head>
<body class="body-white">
<?php echo hook('body_start');?>
<div id="top">
   <div class="t_heard">
        <div class="logo"><a href="/"><img src="<?php echo sp_get_image_url($site_logo);?>"/></a></div>
        <div class="heard_r">
             <div class="phone_top clearfix"> 
                  <div class="phone_heard">
                   <span>热线电话：<?php echo ($hotTell); ?></span>
                   <span></span>
                  </div> 
              <!--<dl class="select_lag"> 
                <a href="">中文</a>&nbsp;|&nbsp;<a href="">ENGLISH</a>				
              </dl> -->
             </div> 
            <div class="search_box">
            <span class="left l_bg"></span>
            <span class="right r_bg"></span>
                <div class="search">
                <form name=search_form action="<?php echo leuu('portal/search/index');?>" method=post>
                <input id="catid" name="catid" type="hidden" value="7">
                <input id="q" class="enter" name="keyword" onFocus="if(this.value=='…'){this.value='';}else{this.select();}this.style.color='black';"  value="<?php echo I('get.keyword');?>" style="width:181px;" placeholder="请输入产品名称">
                <input class="sb" name="Input" type="submit" value="" style="width:21px;height:23px;">
                </form>
                </div>
            </div>
        </div>
   </div>
 
   <div class="menu">
      <div class="menu_nav">
         <?php
 $effected_id="main-menu"; $filetpl="<a href='\$href' target='\$target'>\$label</a>"; $foldertpl="<a href='\$href' target='\$target' class='dropdown-toggle' data-toggle='dropdown'>\$label <b class='caret'></b></a>"; $ul_class="dropdown-menu" ; $li_class="li-class" ; $style="nav"; $showlevel=6; $dropdown='dropdown'; echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); ?>
      </div>
   </div> 
</div>
<div class="clear"></div>
<div id="warp_main">
  <?php $slides=sp_getslide("contact_ads"); ?>
<div class="main_banner">
<?php if(is_array($slides)): foreach($slides as $k=>$vo): if($k == 0): ?><img src="<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>" alt=""><?php endif; endforeach; endif; ?>
</div>
<div class="main_contact">
  <div class="main_con_tit">
    <div class="main_tit">
      <div class="main_tit_l"> <span>联系我们 / </span> <span class="pro_tit">CONTACT</span> </div>
      <div class="main_tit_r">
        <div class="home_tit"> <span class="home">当前位置：</span>
          <ul>
            <li class="h"><a href="/">首页</a> </li>
            <li>联系我们</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div style="width:1110px; margin:0px auto; overflow:hidden;">
    <div id="example-one">
      <ul class="nav">
        <li class="nav-one"><a href="<?php echo leuu('page/index',array('id'=>5));?>"      
          <?php if($id == 5): ?>class="current"<?php endif; ?>
          >联系我们</a></li>
        <li class="nav-one"><a href="<?php echo leuu('page/index',array('id'=>4));?>"      
          <?php if($id == 4): ?>class="current"<?php endif; ?>
          >在线留言</a></li>
      </ul>
    </div>
  </div>
  <div class="warp_contact_con clearfix">
    <div class="contact_box clearfix">
      <h3><?php echo ($companyName); ?></h3>
      <div class="contact_txt_r">
        <ul class=" list-paddingleft-2">
          <li>
            <p>地 &nbsp;址：<?php echo ($address); ?></p>
          </li>
          <li>
            <p>电 &nbsp;话：<?php echo ($hotTell); ?>/<?php echo ($tell); ?></p>
          </li>
          <li>
            <div>传 &nbsp;真：<?php echo ($fax); ?></div>
          </li>
          <li>
            <p>总经理：<?php echo ($zongjingli); ?> &nbsp;<?php echo ($mobilePhone); ?></p>
          </li>
          <li>
            <p>邮 &nbsp;编：<?php echo ($zcode); ?></p>
          </li>
          <li>
            <p>E-mail：<?php echo ($email); ?></p>
          </li>
        </ul>  
      </div>
      <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
      <meta name="keywords" content="百度地图,百度地图API，百度地图自定义工具，百度地图所见即所得工具" />
      <meta name="description" content="百度地图API自定义地图，帮助用户在可视化操作下生成百度地图" />
      <title>百度地图API自定义地图</title>
      <style type="text/css">
    html,body{margin:0;padding:0;}
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
</style>
      <div style="width:1100px;height:350px;border:#ccc solid 1px;" id="dituContent"></div>
      <script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(119.339491,26.079642);//定义一个中心点坐标
        map.centerAndZoom(point,18);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
	map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"<?php echo ($companyName); ?>",content:"地址：<?php echo ($address); ?>",point:"119.339491|26.079642",isOpen:1,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
		 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
			
			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script> 
    </div>
  </div>
</div>
<?php echo hook('footer');?>
<div id="footer">
  <div class="footer_con clearfix">
    <div class="footer_logo"><img src="/themes/simplebootx/Public/assets/picture/footer_logo.png"/></div>
    <div class="footer_r">
      <p>版权所有 福州振荣机械输送设备有限公司</p>
      <p>Copyright © 2018 http://www.zhenrongjixie.com/ All Rights Reserved <?php echo ($site_icp); ?></p>
      <p>网站制作及维护：<a href="www.ftde360.com" target="_blank">方头大耳</a>●领先的企业互联网应用方案提供商</p>
    </div>
  </div>
</div>
<div id="backtotop"> 
	<i class="fa fa-arrow-circle-up"></i> 
</div>
<?php echo ($site_tongji); ?> 
<script type="text/javascript">
//全局变量
var GV = {
    ROOT: "/",
    WEB_ROOT: "/",
    JS_ROOT: "public/js/"
};
</script>
<script src="/themes/simplebootx/Public/assets/js/jquery.min.js"></script> 
<script src="/themes/simplebootx/Public/assets/js/jquery.hammer-full.min.js"></script>
<script src="/public/js/wind.js"></script>
<script src="/themes/simplebootx/Public/assets/simpleboot/bootstrap/js/bootstrap.min.js"></script>
<script src="/public/js/frontend.js"></script>  
  
<script>
var textobj=document.getElementById('questionBankName');

$(function(){
  ;(function($){
	$.fn.totop=function(opt){
		var scrolling=false;
		return this.each(function(){
			var $this=$(this);
			$(window).scroll(function(){
				if(!scrolling){
					var sd=$(window).scrollTop();
					if(sd>100){
						$this.fadeIn();
					}else{
						$this.fadeOut();
					}
				}
			});
			
			$this.click(function(){
				scrolling=true;
				$('html, body').animate({
					scrollTop : 0
				}, 500,function(){
					scrolling=false;
					$this.fadeOut();
				});
			});
		});
	};
})(jQuery); 
	
 $("#backtotop").totop();
});
</script>


</body>
</html>