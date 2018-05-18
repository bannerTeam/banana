<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:40:"template/datll_wapian/html/vod\play.html";i:1526055467;s:62:"D:\wamp\www\banana\template\datll_wapian\html\public\head.html";i:1526009054;s:62:"D:\wamp\www\banana\template\datll_wapian\html\public\foot.html";i:1526015417;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="cache-control" content="no-siteapp">
	
<script>var maccms={"path":"","mid":"<?php echo $maccms['mid']; ?>","url":"<?php echo $maccms['site_url']; ?>","wapurl":"<?php echo $maccms['site_wapurl']; ?>","mob_status":"<?php echo $maccms['mob_status']; ?>"};</script>	
<link rel='stylesheet' id='main-css'  href='<?php echo $maccms['path_tpl']; ?>css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='<?php echo $maccms['path_tpl']; ?>css/index.css' type='text/css' media='all' />
<link rel='stylesheet' id='main-css'  href='<?php echo $maccms['path_tpl']; ?>css/play.css' type='text/css' media='all' />
	
<script src="<?php echo $maccms['path_tpl']; ?>js/jquery.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>js/jquery.lazyload.js"></script>
<script src="<?php echo $maccms['path_tpl']; ?>js/jquery.autocomplete.js"></script>
<script src="<?php echo $maccms['path']; ?>static/js/jquery.autocomplete.js"></script><!--内置js插件-->
<script src="<?php echo $maccms['path']; ?>static/js/home.js"></script><!--内置js插件-->
	
	
<script type='text/javascript' src='<?php echo $maccms['path_tpl']; ?>js/jquery.min.js?ver=0.5'></script>
<meta name="keywords" content=">在线播放<?php echo $obj['vod_name']; ?> <?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?> - 高清资源 - <?php echo $maccms['site_name']; ?>">
<meta name="description" content=">在线播放<?php echo $obj['vod_name']; ?> <?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?> - 高清资源 - <?php echo $maccms['site_name']; ?>">
	
	
<title>在线播放<?php echo $obj['vod_name']; ?> <?php echo $obj['vod_play_list'][$param['sid']]['urls'][$param['nid']]['name']; ?> - 高清资源 - <?php echo $maccms['site_name']; ?></title>
<link rel="Shortcut Icon" href="<?php echo $maccms['path_tpl']; ?>/template/qwysmb-html/images/favicon.png">
<link rel="Bookmark" href="<?php echo $maccms['path_tpl']; ?>/template/qwysmb-html/images/favicon.png">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<style>
.w-newfigure{list-style:none; float:left;}
.list{ margin-left:-40px;}
	
@media screen and (min-width:1200px){
	.bofangdiv{height: 540px;}
	}
	
	 ul, li, h2 {
    margin: 0px;
    padding: 0px;
    list-style: none;
}
</style>
</head>
<body class="page-template page-template-pages page-template-posts-play page-template-pagesposts-play-php page page-id-16">

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
<div class="single-post">
<section class="container">
    <div class="content-wrap">
    	<div class="content">
<div id="bof">
<script type="text/javascript" language="javascript" src="js/all-top.js"></script>
<div class="sptitle"><h2 class="single-strong">正在播放:在线播放<?php echo $obj['vod_name']; ?></h2></div>
<div class="bofangdiv">
  
	<?php echo $player_data; ?>
        <?php echo $player_js; ?>

</div>
<p style="background-color: #1db69a;color: #FFFFFF;padding-top: 0.4rem; padding-left: 0.75rem; padding-right: 0.75rem;margin:0; font-size: .7rem; font-size: 14px;padding-bottom: 0.35rem;text-align:center;">如等待10秒以上播放器还没出现请从新点击播放或者刷新即可观看</p>
</div>
<div class="am-cf"></div>
<div class="am-panel am-panel-default">
<div class="am-panel-bd">
<script type="text/javascript">
function xldata(urls){
	var videourls = document.getElementById('video');
	var xlqieh = document.getElementById('videourlgo');
	videourls.src = urls+xlqieh.href;
}
</script>
      	<div class="juji">
		<ul class="juji-hd">
			<?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): ?>
			<li <?php if(($param['sid']==$key)): ?>class="active"<?php else: endif; ?> ><?php echo $vo['player_info']['show']; ?></li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
			
		<ul class="juji-bd">
		<?php if(is_array($obj['vod_play_list']) || $obj['vod_play_list'] instanceof \think\Collection || $obj['vod_play_list'] instanceof \think\Paginator): if( count($obj['vod_play_list'])==0 ) : echo "" ;else: foreach($obj['vod_play_list'] as $key=>$vo): if(is_array($vo['urls']) || $vo['urls'] instanceof \think\Collection || $vo['urls'] instanceof \think\Paginator): if( count($vo['urls'])==0 ) : echo "" ;else: foreach($vo['urls'] as $key=>$vo2): ?>
		   <li <?php if($param['sid'] == $vo['sid'] && $param['nid'] == $vo2['nid']): ?> style="display:block"<?php endif; ?> >
		   <a href="<?php echo mac_url_vod_play($obj,['sid'=>$vo['sid'],'nid'=>$vo2['nid']]); ?>" target="_self" class="am-btn am-btn-default lipbtn"><?php echo $vo2['name']; ?></a>
			</li>
			 <?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
			
			</ul>
	</div>
<div style="clear: both;"></div>
<p class="jianjie"><h3 class="single-strong">简介</h3><p class="item-desc js-close-wrap" ><span style="font-size:12px"> <?php echo $obj['vod_content']; ?>
	</span></p>
<div style="clear: both;"></div> 
<div id="xuji"></div>
<div class="video-list view-font">
<div class="dianshijua" id="dianshijuid">
</div>
 </div>
</div>
</div>
<br/>
<div class="article-actions clearfix">
 <div class="shares">
        <strong>分享到：</strong>
        <a href="javascript:;" data-url="www.wapianwang.com/vod-play-id-10131-src-1-num-1.html" class="share-weixin" title="分享到微信"><i class="fa"></i></a><a target="_blank" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=www.wapianwang.com/vod-play-id-10131-src-1-num-1.html&title=头号玩家在线观看&desc=挖片网,最新电影,电视剧,综艺节目,全部免费观看!" class="share-qzone" title="分享到QQ空间"><i class="fa"></i></a><a target="_blank" href="http://service.weibo.com/share/share.php?title=头号玩家在线观看&url=www.wapianwang.com/vod-play-id-10131-src-1-num-1.html&source=bookmark&pic=http://pic.china-gif.com/pic/upload/vod/2018-03/15224343768.jpg" class="share-tsina" title="分享到新浪微博"><i class="fa"></i></a><a target="_blank" href="http://share.v.t.qq.com/index.php?c=share&a=index&url=www.wapianwang.com/vod-play-id-10131-src-1-num-1.html&title=头号玩家在线观看"  class="share-tqq" title="分享到腾讯微博"><i class="fa"></i></a><a target="_blank" href="http://connect.qq.com/widget/shareqq/index.html?url=www.wapianwang.com/vod-play-id-10131-src-1-num-1.html&desc=挖片网,最新电影,电视剧,综艺节目,全部免费观看!&summary=头号玩家在线观看&site=zeshlife&pics=http://pic.china-gif.com/pic/upload/vod/2018-03/15224343768.jpg
" class="share-sqq" title="分享到QQ好友"><i class="fa"></i></a><a target="_blank" href="http://widget.renren.com/dialog/share?srcUrl=http://pic.china-gif.com/pic/upload/vod/2018-03/15224343768.jpg&resourceUrl=www.wapianwang.com/vod-play-id-10131-src-1-num-1.html&title=头号玩家在线观看&description=挖片网,最新电影,电视剧,综艺节目,全部免费观看!" class="share-renren" title="分享到人人网"><i class="fa"></i></a><a target="_blank" href="http://www.douban.com/share/service?image=http://pic.china-gif.com/pic/upload/vod/2018-03/15224343768.jpg&href=www.wapianwang.com/vod-play-id-10131-src-1-num-1.html&name=头号玩家在线观看&text=挖片网,最新电影,电视剧,综艺节目,全部免费观看!" class="share-douban" title="分享到豆瓣网"><i class="fa"></i></a>
    </div>   
 <a href="javascript:;" class="action-rewards" etap="rewards">打赏</a>
    </div> 
</div>
    	</div>
<div class="sidebar">
<div class="widget widget-textasst">
	<a class="style01" href="http://wpa.qq.com/msgrd?v=3&uin=776774592&site=qq&menu=yes" target="_blank">
		<strong>热度</strong><h2><em id="hits"><?php echo $obj['vod_hits']; ?></em></h2><p></p></a>
	</div>
<div class="widget widget-textasst"><a class="style02" href="" target="_blank"><strong>关注微信</strong><div class="article-wechats"> </br> <img src="<?php echo $maccms['path_tpl']; ?>images/qrcode.png"></div> </a></div>
<div class="widget widget-textasst"></div></div>
</section>
</div>

	
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

<div class="rewards-popover-mask" etap="rewards-close"></div>
	<div class="rewards-popover">
		<h3>觉得本站还不错就打赏一下吧！</h3>
				<div class="rewards-popover-item">
			<h4>支付宝扫一扫打赏</h4>
			<img src="images/zfb.png">
		</div>
						<div class="rewards-popover-item">
			<h4>微信扫一扫打赏</h4>
			<img src="<?php echo $maccms['path_tpl']; ?>images/wx.png">
		</div>
				<span class="rewards-popover-close" etap="rewards-close"></span>
	</div> 
<script type="text/javascript">
$(function(){
    function jujis(jujiTit,on,jujiCon){
        $(jujiTit).children().hover(function(){
            $(this).addClass(on).siblings().removeClass(on);
            var index = $(jujiTit).children().index(this);
           	$(jujiCon).children().eq(index).show().siblings().hide();
    	});
	};
    jujis(".juji-hd","active",".juji-bd");
});
</script>
</body>
</html>