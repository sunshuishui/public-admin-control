<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>管理页面</title>

<script src="<?=base_url()?>js/prototype.lite.js" type="text/javascript"></script>
<script src="<?=base_url()?>js/moo.fx.js" type="text/javascript"></script>
<script src="<?=base_url()?>js/moo.fx.pack.js" type="text/javascript"></script>
<style>
body {
	font:12px Arial, Helvetica, sans-serif;
	color: #000;
	background-color: #EEF2FB;
	margin: 0px;
}
#container {
	width: 182px;
}
H1 {
	font-size: 12px;
	margin: 0px;
	width: 182px;
	cursor: pointer;
	height: 30px;
	line-height: 20px;	
}
H1 a {
	display: block;
	width: 182px;
	color: #000;
	height: 30px;
	text-decoration: none;
	moz-outline-style: none;
	background-image: url(<?=base_url()?>images/menu_bgS.gif);
	background-repeat: no-repeat;
	line-height: 30px;
	text-align: center;
	margin: 0px;
	padding: 0px;
}
.content{
	width: 182px;
	height: 26px;
	
}
.MM ul {
	list-style-type: none;
	margin: 0px;
	padding: 0px;
	display: block;
}
.MM li {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	list-style-type: none;
	display: block;
	text-decoration: none;
	height: 26px;
	width: 182px;
	padding-left: 0px;
}
.MM {
	width: 182px;
	margin: 0px;
	padding: 0px;
	left: 0px;
	top: 0px;
	right: 0px;
	bottom: 0px;
	clip: rect(0px,0px,0px,0px);
}
.MM a:link {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	background-image: url(<?=base_url()?>images/menu_bg1.gif);
	background-repeat: no-repeat;
	height: 26px;
	width: 182px;
	display: block;
	text-align: center;
	margin: 0px;
	padding: 0px;
	overflow: hidden;
	text-decoration: none;
}
.MM a:visited {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	background-image: url(<?=base_url()?>images/menu_bg1.gif);
	background-repeat: no-repeat;
	display: block;
	text-align: center;
	margin: 0px;
	padding: 0px;
	height: 26px;
	width: 182px;
	text-decoration: none;
}
.MM a:active {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	color: #333333;
	background-image: url(<?=base_url()?>images/menu_bg1.gif);
	background-repeat: no-repeat;
	height: 26px;
	width: 182px;
	display: block;
	text-align: center;
	margin: 0px;
	padding: 0px;
	overflow: hidden;
	text-decoration: none;
}
.MM a:hover {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	line-height: 26px;
	font-weight: bold;
	color: #006600;
	background-image: url(<?=base_url()?>images/menu_bg2.gif);
	background-repeat: no-repeat;
	text-align: center;
	display: block;
	margin: 0px;
	padding: 0px;
	height: 26px;
	width: 182px;
	text-decoration: none;
}
</style>
</head>

<body>
<table width="100%" height="280" border="0" cellpadding="0" cellspacing="0" bgcolor="#EEF2FB">
  <tr>
    <td width="182" valign="top"><div id="container">
      <h1 class="type"><a href="javascript:void(0)">关于</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?=base_url()?>images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="<?=site_url('about/editlist/all')?>" target="main">企业介绍</a></li>
          <li><a href="<?=site_url('about/editlist/lc')?>" target="main">公司历程</a></li>
          <li><a href="<?=site_url('about/editlist/ms')?>" target="main">服务模式</a></li>
          <li><a href="<?=site_url('about/editlist/wh')?>" target="main">公司文化</a></li>
          <li><a href="<?=site_url('about/editlist/ai')?>" target="main">爱在溢起</a></li>
          <li><a href="<?=site_url('about/editlist/hezuo')?>" target="main">合作伙伴</a></li>
          <li><a href="<?=site_url('about/editlist/yjy')?>" target="main">研究院</a></li>
          <li><a href="<?=site_url('about/editlist/peixun')?>" target="main">培训基地</a></li>
          <li><a href="<?=site_url('magazine/mlist')?>" target="main">杂志</a></li>
        </ul>
      </div>
      <h1 class="type"><a href="javascript:void(0)">资本</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?=base_url()?>images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="<?=site_url('about/project/about_ziben')?>" target="main">关于资本</a></li>
          <li><a href="<?=site_url('about/project/core_strength')?>" target="main">核心竞争力</a></li>
          <li><a href="<?=site_url('about/project/investment_strategy')?>" target="main">投资策略</a></li>
          <li><a href="<?=site_url('about/project/funds_series')?>" target="main">基金系列</a></li>
          <li><a target="main" href="<?=site_url('about/project/track_record')?>">过往案例</a></li>
        </ul>
      </div>
      <h1 class="type"><a href="javascript:void(0)">资产</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?=base_url()?>images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="<?=site_url('about/project/about_zichan')?>" target="main">关于资产</a></li>
          <li><a href="<?=site_url('shop/slist')?>" target="main">购物中心品牌</a></li>
          <li><a href="<?=site_url('about/project/full_model')?>" target="main">全产业链模式</a></li>
          <li><a target="main" href="<?=site_url('ourproject/olist')?>">我们的项目</a></li>
          <li><a target="main" href="<?=site_url('about/project/externally_work_together')?>">合作伙伴</a></li>
        </ul>
      </div>
      <h1 class="type"><a href="javascript:void(0)">建筑</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?=base_url()?>images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="<?=site_url('about/buildlist/about_build')?>" target="main">关于建筑</a></li>
          <li><a href="<?=site_url('about/buildlist/core_advantage')?>" target="main">核心优势</a></li>
          <li><a href="<?=site_url('works/wlist')?>" target="main">设计作品</a></li>
          <li><a href="<?=site_url('about/buildlist/our_college')?>" target="main">学院</a></li>
          <li><a href="<?=site_url('about/buildlist/work_together')?>" target="main">合作伙伴</a></li>
        </ul>
      </div>
       <h1 class="type"><a href="javascript:void(0)">核心团队</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?=base_url()?>images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="<?=site_url('team/tlist')?>" target="main">成员列表</a></li>
          <li><a href="<?=site_url('team/add')?>" target="main">成员添加</a></li>
        </ul>
      </div>
      <h1 class="type"><a href="javascript:void(0)">公司荣誉</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?=base_url()?>images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="<?=site_url('rongyu/jlist')?>" target="main">奖项项目</a></li>
          <li><a href="<?=site_url('rongyu/qlist')?>" target="main">所获荣誉</a></li>
        </ul>
      </div>
       <h1 class="type"><a href="javascript:void(0)">文章管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?=base_url()?>images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="<?=site_url('article/alist')?>" target="main">文章列表</a></li>
          <li><a href="<?=site_url('article/add')?>" target="main">文章添加</a></li>
        </ul>
      </div>
      <h1 class="type"><a href="javascript:void(0)">基金</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?=base_url()?>images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
		  <li><a href="<?=site_url('jijin/index')?>" target="main">基金管理</a></li>
        </ul>
      </div>
      <h1 class="type"><a href="javascript:void(0)">公开课</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?=base_url()?>images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
		  <li><a href="<?=site_url('publicclass/intro')?>" target="main">介绍</a></li>
          <li><a href="<?=site_url('publicclass/plist')?>" target="main">列表</a></li>
        </ul>
      </div>
      <h1 class="type"><a href="javascript:void(0)">招贤纳士</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?=base_url()?>images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          <li><a href="<?=site_url('job/shehui')?>" target="main">社会招募</a></li>
          <li><a href="<?=site_url('job/xyzm')?>" target="main">校园招募</a></li>
          <li><a href="<?=site_url('job/jiangxuejin')?>" target="main">三益奖学金</a></li>
        </ul>
      </div>
    </div>
        <h1 class="type"><a href="javascript:void(0)">联系我们</a></h1>
      <div class="content">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="<?=base_url()?>images/menu_topline.gif" width="182" height="5" /></td>
            </tr>
          </table>
        <ul class="MM">
            <li><a href="<?=site_url('contactus/cedit')?>" target="main">编辑办事处</a></li>
          <li><a href="<?=site_url('contactus/clist')?>" target="main">添加办事处</a></li>
        </ul>
      </div>
        <h1 class="type"><a href="javascript:void(0)">用户管理</a></h1>
      <div class="content">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="<?=base_url()?>images/menu_topline.gif" width="182" height="5" /></td>
            </tr>
          </table>
        <ul class="MM">
            <li><a href="<?=site_url('userinfo/userlist')?>" target="main">用户管理</a></li>
            <li><a href="<?=site_url('apply/alist')?>" target="main">在线申请列表</a></li>
        </ul>
      </div>
      </div>
        <script type="text/javascript">
		var contents = document.getElementsByClassName('content');
		var toggles = document.getElementsByClassName('type');
	
		var myAccordion = new fx.Accordion(
			toggles, contents, {opacity: true, duration: 400}
		);
		myAccordion.showThisHideOpen(contents[0]);
	</script>
    </td>
  </tr>
</table>
</body>
</html>
