<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title><?php echo ($post_title); ?> <?php echo ($site_name); ?></title>
<meta name="keywords" content="<?php echo ($post_keywords); ?>" />
<meta name="description" content="<?php echo ($post_excerpt); ?>">
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
	
</head>
<body class="">
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
  <?php $slides=sp_getslide("case_ads"); ?>
  <div class="main_banner">
    <?php if(is_array($slides)): foreach($slides as $k=>$vo): if($k == 0): ?><img src="<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>" alt=""><?php endif; endforeach; endif; ?>
  </div>
  <div class="main_con_tit">
    <div class="main_tit clearfix">
      <div class="main_tit_l"> <span>案例展示 / </span> <span class="pro_tit">CASE</span> </div>
      <div class="main_tit_r clearfix">
        <div class="home_tit"> <span class="home">当前位置：</span>
          <?php $breadcrumb = sp_get_breadcrumb($trem_id); ?>
          <ul>
            <li class="h"><a href="/">首页</a> </li>
            <?php if(is_array($breadcrumb)): $i = 0; $__LIST__ = $breadcrumb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo leuu('list/index',array('id'=>$vo['term_id']));?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            <li><?php echo ($post_title); ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div style="width:1110px; margin:0px auto; overflow:hidden;">
    <div id="example-one">
      <ul class="nav">
        <?php $caseLists = sp_sql_posts_paged_bycatid($term_id,"order:post_date DESC;"); ?>
        <?php if(is_array($caseLists['posts'])): $i = 0; $__LIST__ = $caseLists['posts'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="nav-one"><a href="<?php echo leuu('article/index',array('id'=>$vo['object_id'],'cid'=>$vo['term_id']));?>" 
            <?php if($vo['object_id'] == $id): ?>class="current"<?php endif; ?>
            ><?php echo ($vo["post_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
  </div>
  <div class="main_project">
    <div class="main_prj_box clearfix ">
      <div class="case_deta"> <?php echo ($post_content); ?> </div>
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