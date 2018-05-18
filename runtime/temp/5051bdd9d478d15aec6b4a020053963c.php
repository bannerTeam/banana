<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:43:"template/datll_wapian/html/index\index.html";i:1526036741;s:65:"D:\wamp\www\banana\template\datll_wapian\html\public\include.html";i:1525950030;s:62:"D:\wamp\www\banana\template\datll_wapian\html\public\head.html";i:1526009054;s:62:"D:\wamp\www\banana\template\datll_wapian\html\public\foot.html";i:1526015417;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="cache-control" content="no-siteapp">
<title><?php echo $maccms['site_name']; ?>-高清云影视免费为大家提供最新最全的免费电影</title>

<meta name="keywords" content="<?php echo $maccms['site_keywords']; ?>">
<meta name="description" content=" <?php echo $maccms['site_description']; ?> ">
<link rel='stylesheet' id='main-css'  href='<?php echo $maccms['path_tpl']; ?>css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='<?php echo $maccms['path_tpl']; ?>css/index.css' type='text/css' media='all' />

<link rel="Shortcut Icon" href="<?php echo $maccms['path_tpl']; ?>/template/qwysmb-html/images/favicon.png">
<link rel="Bookmark" href="<?php echo $maccms['path_tpl']; ?>/template/qwysmb-html/images/favicon.png">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/jquery.banner.revolution.min.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/banner.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>css/slide.css" media="screen" />
</head>
<body class="home blog">
<header class="header">
  <div class="container">
    <h1 class="logo"><a href="/" title="<?php echo $maccms['site_name']; ?>"><img src="<?php echo $maccms['path_tpl']; ?>images/logo.png"><span><?php echo $maccms['site_name']; ?></span></a></h1>
    <div class="sitenav">
      <ul>
		  
        <li id="menu-item-18" class="menu-item"><a <?php if(($maccms['aid']==1)): ?> class="menu-itema-two"<?php else: endif; ?>   href="/">首页</a> </li>
		  <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li id="menu-item-<?php echo $vo['type_id']; ?>" class="menu-item"><a <?php if(($obj['type_name']==$vo['type_name'])): ?> class="menu-itema-two"<?php else: endif; ?> href="<?php echo mac_url_type($vo); ?>"><?php echo $vo['type_name']; ?></a></li>
		   <?php endforeach; endif; else: echo "" ;endif; ?>
       
      </ul>
    </div>
    <span class="sitenav-on"><i class="icon-list"></i></span> <span class="sitenav-mask"></span>
    <div class="accounts"> <a class="account-weixin" href="javascript:;"><i class="fa"></i>
      <div class="account-popover">
        <div class="account-popover-content"><img src="<?php echo $maccms['path_tpl']; ?>images/qrcode.png"></div>
      </div>
      </a> </div>
    <span class="searchstart-on"><i class="icon-search"></i></span> <span class="searchstart-off"><i class="icon-search"></i></span>
    <form class="searchform"  name="search" method="POST" action="<?php echo mac_url('vod/search'); ?>" method="post" id="search">
      <button tabindex="3" class="sbtn" type="submit"><i class="fa"></i></button>
      <input tabindex="2" class="sinput" name="wd" type="text" placeholder="输入关键字" value="">
    </form>
  </div>
</header>
<div class="header_end"></div>
<div id="homeso">
  <form method="post" id="soform" style="text-align: center;float: none"  name="search" action="<?php echo mac_url('vod/search'); ?>">
    <img id="imgsrc" style="margin:10px" src="<?php echo $maccms['path_tpl']; ?>images/sologo.png"><br>
    <br>
    <input tabindex="2" class="homesoin" id="sos" name="wd" type="text" placeholder="输入你要观看的视频" value="">
    <button id="button" tabindex="3" class="homesobtn" type="submit"><i class="fa">搜索</i></button>
  </form>
</div>
 

<!--幻灯片开始-->
<div id="wrapper">
  <div class="fullwidthbanner-container">
    <div class="fullwidthbanner">
      <ul>
        <?php $__TAG__ = '{"order":"desc","by":"level","level":"9","type":"all"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
        <li class="datll_li" data-transition="flyin" data-slotamount="15" data-masterspeed="300" data-link="<?php echo mac_url_vod_detail($vo); ?> "> <img src="<?php echo $vo['vod_pic_slide']; ?>" alt="<?php echo $vo['vod_name']; ?>" style="max-height: 460px;"/> </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
  </div>
</div>
<!--幻灯片结束-->
<section class="container">
  <div class="index_film">
    <div class="single-strong">热门推荐<!--<span class="chak"><a href="[matrix:link]">查看更多</a></span>--></div>
    <div class="m-g">
      <div class="b-listtab-main">
        <div>
          <div>
            <div class="s-tab-main">
              <ul class="list g-clear">
                <?php $__TAG__ = '{"num":"12","type":"all","by":"hits_day","order":"desc"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                <li class='item'> <a class='js-tongjic' href='<?php echo mac_url_vod_detail($vo); ?> ' title='<?php echo $vo['vod_name']; ?>'>
                  <div class='cover g-playicon'> <img src='<?php echo mac_url_img($vo['vod_pic']); ?>' alt='<?php echo $vo['vod_name']; ?>' /> <span class='pay'><?php echo $vo['type']['type_name']; ?></span> <span class='hint'><?php echo $vo['vod_remarks']; ?></span></div>
                  <div class='detail'>
                    <p class='title g-clear'> <span class='s1'><?php echo $vo['vod_name']; ?></span> <span class='s2'><?php echo $vo['vod_score']; ?></span></p>
                    <p class='star'><?php echo $vo['vod_actor']; ?> </p>
                  </div>
                  </a> </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__TAG__ = '{"parent":"current","order":"asc","by":"sort","mid":"1","id":"vo1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key % 2 );++$key;?>
  <div class="Film_list">
    <div class="single-strong">最新<?php echo $vo1['type_name']; ?> <span class="chak"><a href="<?php echo mac_url_type($vo); ?> ">查看更多</a></span></div>
    <div class="b-listtab-main">
      <div class="s-tab-main">
        <ul class="list g-clear">
          <?php $__TAG__ = '{"num":"10","type":"'.$vo1['type_id'].'","order":"desc","by":"time"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
          <li class='item'><a class='js-tongjic' href='<?php echo mac_url_vod_detail($vo); ?> ' title='<?php echo $vo['vod_name']; ?>'>
            <div class='cover g-playicon'> <img src='<?php echo mac_url_img($vo['vod_pic']); ?>' alt='<?php echo $vo['vod_name']; ?>' /> <span class='pay'><?php echo $vo['type']['type_name']; ?> </span><span class='hint'><?php echo $vo['vod_remarks']; ?></span> </div>
            <div class='detail'>
              <p class='title g-clear'> <span class='s1'><?php echo $vo['vod_name']; ?></span> <span class='s2'><?php echo $vo['vod_score']; ?></span></p>
              <p class='star'><?php echo $vo['vod_actor']; ?> </p>
            </div>
            </a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="hot_film">
    <div class="single-strong"><?php echo $vo1['type_name']; ?>排行榜</div>
	  
	  <?php if($vo1['type_id'] == 1): ?>
	  
	  <div class="hot_film_list">
		<?php $__TAG__ = '{"num":"22","type":"'.$vo['type_id'].'","order":"desc","by":"time"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<a href="<?php echo mac_url_vod_detail($vo); ?> "><span class=" <?php if(($key <=3)): ?>Serial_number<?php else: ?>Serial_numberh <?php endif; ?>"><?php echo $key; ?></span><span class="vodname"><?php echo $vo['vod_name']; ?></span><span class="list_score"><?php echo $vo['vod_score']; ?></span></a> <?php endforeach; endif; else: echo "" ;endif; ?>
	  </div>
	  
	  <?php else: ?>
	  
	   <div class="hot_film_list">
		<?php $__TAG__ = '{"num":"9","type":"'.$vo['type_id'].'","order":"desc","by":"time"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<a href="<?php echo mac_url_vod_detail($vo); ?> "><span class=" <?php if(($key <=3)): ?>Serial_number<?php else: ?>Serial_numberh <?php endif; ?>"><?php echo $key; ?></span><span class="vodname"><?php echo $vo['vod_name']; ?></span><span class="list_score"><?php echo $vo['vod_score']; ?></span></a> <?php endforeach; endif; else: echo "" ;endif; ?>
	  </div>
    <div class="single-strong">热播<?php echo $vo1['type_name']; ?></div>
    <div class="hot_film_list">
		<?php $__TAG__ = '{"num":"9","type":"'.$vo['type_id'].'","order":"desc","by":"time"}';$__LIST__ = model("Vod")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
		<a href="<?php echo mac_url_vod_detail($vo); ?> "><span class="<?php if(($key <= 3)): ?>Serial_number<?php else: ?>Serial_numberh <?php endif; ?>""><?php echo $key; ?></span><span class="vodname"><?php echo $vo['vod_name']; ?></span><span class="list_score"><?php echo $vo['vod_score']; ?>分</span></a>
		
		
		
		<?php endforeach; endif; else: echo "" ;endif; ?>
	  </div>
	  
	  <?php endif; ?>
   
  </div>
  <?php endforeach; endif; else: echo "" ;endif; ?>
  <div class="link1">
    <div class="single-strong">友情链接 <span class="chak_link">[ 申请友链联系QQ:<?php echo $maccms['site_qq']; ?> ]</span></div>
  </div>
  <div class="link">
  
    <?php $__TAG__ = '{"num":"10","type":"font"}';$__LIST__ = model("Link")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
       <a class="alink" href="<?php echo $vo['link_url']; ?>" target="_blank"> <?php echo $vo['link_name']; ?></a>
       
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
	
	
</section>

<div class="foornav"> 
	<a href="/"  class="menu-itema"><span><img src="<?php echo $maccms['path_tpl']; ?>images/index.png"/>首页</span></a>
	 <?php $__TAG__ = '{"ids":"parent","order":"asc","by":"sort","mid":"1"}';$__LIST__ = model("Type")->listCacheData($__TAG__); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
 
	<a href="<?php echo mac_url_type($vo); ?>" ><span><img src="<?php echo $maccms['path_tpl']; ?>images/video.png"/><?php echo $vo['type_name']; ?></span></a>
     <?php endforeach; endif; else: echo "" ;endif; ?>
 
</div>

<footer class="footer">
<div class="branding branding-black">
	<div class="container" style="text-align: center;">
		<h2> <?php echo $maccms['site_name']; ?>- 海量高清VIP视频免费观看       如有想看的视频没有的可联系我添加</h2>
						<a target="blank" class="gobtn" href="/">联系站长</a>	
			</div>
</div>
<p style="padding: 0 4px;">免责声明:本站所有视频均来自互联网收集而来，版权归原创者所有，如果侵犯了你的权益，请通知我们，我们会及时删除侵权内容，谢谢合作！<br/>&copy; 2017 <a href="/"><?php echo $maccms['site_name']; ?></a>&nbsp; <a href="http://www.miitbeian.gov.cn"><?php echo $maccms['site_icp']; ?></a><br/></p></footer>


<!--
*
*精仿挖片网免费模板
*
*采集联盟网络技术工作室
*
*作者：金刚狼
*
*qq：834023388
*
专业承接苹果cms 10x版本 模板制作
*
全网唯一官网http://shop.datll.com
*-->
 
<script type='text/javascript' src='<?php echo $maccms['path_tpl']; ?>js/main.js'></script> 
<!--<script type="text/javascript"> document.body.oncontextmenu=document.body.ondragstart= document.body.onselectstart=document.body.onbeforecopy=function(){return false;};
document.body.onselect=document.body.oncopy=document.body.onmouseup=function(){document.selection.empty();}; </script>-->
<?php echo $maccms['site_tj']; ?>
</body>
</html>