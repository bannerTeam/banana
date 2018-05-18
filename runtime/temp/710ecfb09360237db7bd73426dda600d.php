<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:42:"template/datll_wapian/html/vod\search.html";i:1526008994;s:65:"D:\wamp\www\banana\template\datll_wapian\html\public\include.html";i:1525950030;s:62:"D:\wamp\www\banana\template\datll_wapian\html\public\head.html";i:1526009054;s:64:"D:\wamp\www\banana\template\datll_wapian\html\public\paging.html";i:1525940190;s:62:"D:\wamp\www\banana\template\datll_wapian\html\public\foot.html";i:1526015417;}*/ ?>


<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="cache-control" content="no-siteapp">
 <title><?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?>搜索结果 - <?php echo $maccms['site_name']; ?></title>
    <meta name="keywords" content="<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?>搜索结果" />
    <meta name="description" content="<?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?>搜索结果" />
 <link rel='stylesheet' id='main-css'  href='<?php echo $maccms['path_tpl']; ?>css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='<?php echo $maccms['path_tpl']; ?>css/index.css' type='text/css' media='all' />

<link rel="Shortcut Icon" href="<?php echo $maccms['path_tpl']; ?>/template/qwysmb-html/images/favicon.png">
<link rel="Bookmark" href="<?php echo $maccms['path_tpl']; ?>/template/qwysmb-html/images/favicon.png">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/jquery.banner.revolution.min.js"></script>
<script type="text/javascript" src="<?php echo $maccms['path_tpl']; ?>js/banner.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $maccms['path_tpl']; ?>css/slide.css" media="screen" />
<link rel='stylesheet' id='main-css'  href='<?php echo $maccms['path_tpl']; ?>css/movie.css' type='text/css' media='all' />

</head>
<body class="page-template page-template-pages page-template-posts-film page-template-pagesposts-film-php page page-id-9">

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

	
<div class="header_end"></div>
<section class="container">
  <div class="fenlei">
    <div class="b-listfilter" style="padding: 0px;">
      <style>
#noall{
	background-color: #aik651;
    color: #fff;
}
</style>
<div class="bread-crumb-nav fn-clear">
    <ul class="bread-crumbs">
        <li class="home"><a href="<?php echo $maccms['path']; ?>">首页</a></li>
        <li>搜索" <strong style="color:#4c8fe8;"><?php echo $param['wd']; ?><?php echo $param['actor']; ?><?php echo $param['director']; ?><?php echo $param['area']; ?><?php echo $param['lang']; ?><?php echo $param['year']; ?><?php echo $param['class']; ?></strong>" 结果 " <strong style="color:#4c8fe8" class="mac_total"></strong>" 个资源</li>
        <li class="back"><a href="javascript:MAC.GoBack()">返回上一页</a></li>
    </ul>
</div>
      
    </div>
  </div>
  <div class="m-g">
    <div class="b-listtab-main">
      <div>
        <div>
          <div class="s-tab-main">
            <ul class="list g-clear">
					
					 <?php $__TAG__ = '{"num":"48","paging":"yes","pageurl":"vod\/search","order":"desc","by":"time"}';$__LIST__ = model("Vod")->listCacheData($__TAG__);$__PAGING__ = mac_page_param($__LIST__['total'],$__LIST__['limit'],$__LIST__['page'],$__LIST__['pageurl'],$__LIST__['half']); if(is_array($__LIST__['list']) || $__LIST__['list'] instanceof \think\Collection || $__LIST__['list'] instanceof \think\Paginator): $key = 0; $__LIST__ = $__LIST__['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                  <li class='item'>
                    <a class='js-tongjic' href='<?php echo mac_url_vod_detail($vo); ?> ' title='<?php echo $vo['vod_name']; ?>'>
                      <div class='cover g-playicon'>
                        <img src='<?php echo mac_url_img($vo['vod_pic']); ?>' alt='<?php echo $vo['vod_name']; ?>' />
                        <span class='pay'><?php echo $vo['type']['type_name']; ?></span>
                        <span class='hint'><?php echo $vo['vod_remarks']; ?></span></div>
                      <div class='detail'>
                        <p class='title g-clear'>
                          <span class='s1'><?php echo $vo['vod_name']; ?></span>
                          <span class='s2'><?php echo $vo['vod_score']; ?></span></p>
                        <p class='star'><?php echo $vo['vod_actor']; ?> </p></div>
                    </a>
                  </li>
                     <?php endforeach; endif; else: echo "" ;endif; ?>
				    
				  </ul>
          </div>
        </div>
      </div>
       <?php if($__PAGING__['record_total'] > 0): ?>
<div class="mac_pages">
    <div class="page_tip">共<?php echo $__PAGING__['record_total']; ?>条数据,当前<?php echo $__PAGING__['page_current']; ?>/<?php echo $__PAGING__['page_total']; ?>页</div>
    <div class="page_info">
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],1); ?>" title="首页">首页</a>
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_prev']); ?>" title="上一页">上一页</a>
        <?php if(is_array($__PAGING__['page_num']) || $__PAGING__['page_num'] instanceof \think\Collection || $__PAGING__['page_num'] instanceof \think\Paginator): if( count($__PAGING__['page_num'])==0 ) : echo "" ;else: foreach($__PAGING__['page_num'] as $key=>$num): if($__PAGING__['page_current'] == $num): ?>
        <a class="page_link page_current" href="javascript:;" title="第<?php echo $num; ?>页"><?php echo $num; ?></a>
        <?php else: ?>
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],$num); ?>" title="第<?php echo $num; ?>页" ><?php echo $num; ?></a>
        <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_next']); ?>" title="下一页">下一页</a>
        <a class="page_link" href="<?php echo mac_url_page($__PAGING__['page_url'],$__PAGING__['page_total']); ?>" title="尾页">尾页</a>

        <input class="page_input" type="text" placeholder="页码"  id="page" autocomplete="off" style="width:40px">
        <button class="page_btn mac_page_go" type="button" data-url="<?php echo $__PAGING__['page_url']; ?>" data-total="<?php echo $__PAGING__['page_total']; ?>" data-sp="<?php echo $__PAGING__['page_sp']; ?>" >GO</button>
    </div>
</div>
<?php else: ?>
<div class="wrap">
    <h1>没有找到匹配数据</h1>
</div>
<?php endif; ?>

<style>
	.mac_pages{    line-height: 30px;
    height: auto;
    text-align: center;
    text-overflow: ellipsis;
    display: block;}
	.mac_pages .page_tip{}
	.mac_pages .page_info{}
	.mac_pages .page_info .page_link{    color: #1db69a;
    padding: 1px 9px 1px 9px;
    border: 1px solid #1db69a;
    border-radius: 2px;
    white-space: nowrap;}
	.mac_pages .page_info .page_current{font-style: normal;
    background-color: #1db69a;
    color: #fff;
    padding: 2px 5px 2px 5px;
    border-radius: 2px;
    white-space: nowrap;}
	.mac_pages .page_info .page_input{}
	.mac_pages .page_info .page_btn{    font-style: normal;
    background-color: #1db69a;
    color: #fff;
    padding: 2px 5px 2px 5px;
    border-radius: 2px;
    white-space: nowrap;}

</style>
    </div>
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

</body>
</html>
 <script>
        $('.mac_total').html('<?php echo $__PAGING__['record_total']; ?>');
    </script>
<!--精仿挖片网免费模板
采集联盟网络技术工作室
作者：金刚狼
qq：834023388
专业承接苹果cms 10x版本 模板制作
全网唯一官网http://shop.datll.com-->