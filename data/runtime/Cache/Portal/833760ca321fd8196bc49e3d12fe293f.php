<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

	<html>

	<head>

		<title>找不到您要找的页面！</title>

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
	
			
		<style>
		.tc-main{background-color: #fff;overflow: hidden;width: 100%;}
		.tc-main .tc-box{width:550px;margin: 10px auto;}
		.col-xs-6{width:50%;float:left}
		.text
		{
			line-height:28px;
			font-family: microsoft yahei,microsoft jhenghei,verdana,tahoma;
			font-size:13px;
			color:#62261c;
			float:left;
			padding-top:10px;
		}
		.text a,.text a:link
		{
			color:#66261c;
			text-decoration:underline;
			font-weight:bold;
		}
		.text a:hover
		{
			text-decoration:none;
		}
		
		
		@media screen and (max-width:550px) {
		.tc-main .tc-box{width:100%;margin: 10px auto;}
		.xs-hidden{display:none;}
		.col-xs-6{width: 100%;text-align: center;}
		.text{float: none;}
		}
		</style>

	</head>

<body>
<div id="wrapper" class="home-page">

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
<div class="container tc-main">

	<div class="row">
    
    	<!--bof rightbox-->
    
    	<div class="col-xs-12">

			<div class="tc-box">

				<div style="width:100%; height:100%;">
                    <div style="padding:50px 0px;overflow:hidden;">
                        <div class="col-xs-6 xs-hidden">
                        <img src="/public/images/404/nu.gif" class="img-responsive pull-right">
                        </div>
                        <div class="col-xs-6">
                            <img src="/public/images/404/err_404.gif" class="img-responsive">
                            <br>
                            <div class="text">莫有办法,找不到这个页面<br>回到 <a href="<?php echo ($site_host); ?>">官网首页</a></div>
                        </div>
                    </div>
                </div>
                
		    </div>	    

		</div>
        
        <!--eof rightbox-->
		
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
</body>

</html>