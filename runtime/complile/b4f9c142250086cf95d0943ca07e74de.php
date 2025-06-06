<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<title>{sort:title}</title>
<meta name="keywords" content="{sort:keywords}">
<meta name="description" content="{sort:description}">
<link rel="stylesheet" type="text/css" href="{pboot:sitetplpath}/css/style.css?t=1625543438" />
<script type="text/javascript" src="{pboot:sitetplpath}/js/jquery-2.2.4.min.js?t=1625450386"></script>
<link rel="stylesheet" type="text/css" href="{pboot:sitetplpath}/css/style_1.css?t=1625450374" />
<link rel="stylesheet" type="text/css" href="{pboot:sitetplpath}/css/ytuser.css?t=1625450374" />
</head>

<body class="">
<div class="heanav">
  <header id="header"> <a href="{pboot:sitedomain}" class="logo"> <img src="{pboot:sitelogo}" class="logo" alt="{pboot:pagetitle}"></a>
    <nav class="links">
      <ul>
        <li><a href="{pboot:sitedomain}" {pboot:if(0=='{sort:scode}')}class='active'{/pboot:if}>首页</a></li>
        {pboot:nav num=10 parent=0}
        <li><a href="[nav:link]" {pboot:if('[nav:scode]'=='{sort:tcode}')}class="active"{/pboot:if}>[nav:name]</a></li>
        {/pboot:nav}
      </ul>
    </nav>
    <nav class="main">
      <ul>
        <li class="search"><a class="fa-search" href="#search">Search</a>
          <form action="{pboot:scaction}" method="get" role="search" id="search">
            <input type="text" name="keyword" placeholder="输入内容回车搜索">
          </form>
        </li>
        <li class="menu"><a class="fa-bars" href="#menu">Menu</a></li>
      </ul>
    </nav>
  </header>
</div>
<div class="position">当前位置：{pboot:position separator=>> }</div>
<div id="wrapper">
  <div id="main">
    <article class="post">
      <header>
        <div class="title">
          <h1>留言</h1>
        </div>
      </header>
      <div id="divCommentPost" class="cpost">
        <form action="{pboot:msgaction}" method="post" class="row gtr-uniform">
          <div class="col-6 col-12-xsmall">
            <input type="text" name="name" id="name" value="" placeholder="称呼">
          </div>
          <div class="col-6 col-12-xsmall">
            <input type="text" name="tel" id="tel" value="" placeholder="手机">
          </div>
          <div class="col-12">
            <textarea name="content" id="content" placeholder="留言内容" rows="6"></textarea>
          </div>
          <div class="col-12">
            <ul class="actions">
              <li>
                <input class="primary" type="submit" value="提交" id="tj"/>
              </li>
            </ul>
          </div>
        </form>
      </div>
    </article>
  </div>
  <section id="sidebar">
    <section id="intro"><a href="{pboot:sitedomain}" class="logo"><img src="{pboot:sitetplpath}/images/face.jpg"></a>
      <header>
        <h2>cocojiang的博客</h2>
      </header>
    </section>
<dl class="function" id="divContorPanel">
      <dt style="display:none;"></dt>
      <dd class="function_c">
        <div>
          <p>QQ：{pboot:companyqq}<br />
          </p>
          <p>邮箱：{pboot:companyemail}<br />
        </div>
      </dd>
    </dl>
    <dl class="function" id="side-tui-article-item">
      <dt class="function_t">推荐文章</dt>
      <dd class="function_c">
        <div>
          {pboot:list num=4 scode=* order=visits}
          <article class="mini-post">
            <header>
              <h3><a href="[list:link]">[list:title]</a> </h3>
              <time class="published" datetime="[list:date style=Y-m-d]">[list:date style=Y-m-d]</time>
              <a class="author"><img src="{pboot:sitetplpath}/images/dfboy.png" alt="admin"></a> </header>
          </article>
          {/pboot:list}
        </div>
      </dd>
    </dl>
    <dl class="function" id="side-hot-view-item">
      <dt class="function_t">热门文章</dt>
      <dd class="function_c">
        <ul>
          {pboot:list num=4 scode=* order=date}
          <li>
            <article>
              <header>
                <h3><a href="[list:link]">[list:title]</a></h3>
                <time class="published" datetime="[list:date style=Y-m-d]">[list:date style=Y-m-d]</time>
              </header>
            </article>
          </li>
          {/pboot:list}
        </ul>
      </dd>
    </dl>
    <dl class="function" id="divTags">
      <dt class="function_t">标签列表</dt>
      <dd class="function_c">
        <ul>
          {pboot:tags}
          <li><a href="[tags:link]">[tags:text]</a></li>
          {/pboot:tags}
        </ul>
      </dd>
    </dl>
    <section id="footer">
      <p class="copyright">{pboot:sitecopyright}<br>
      <span><a href="https://beian.miit.gov.cn/" rel="nofollow" target="_blank">{pboot:siteicp}</a></span>
      <span><a href="{pboot:sitedomain}/sitemap.xml" target="_blank">XML地图</a></span>
      <span>技术支持：<a href="https://www.ifyzx.com" target="_blank">枫雨在线</a></span>
      <span>{pboot:sitestatistical}</span>
      </p>
</section>
  </section>
</div>
<section id="menu">
  <section>
    <form action="{pboot:scaction}" method="get" role="search" class="search">
      <input type="text" name="keyword" placeholder="输入内容回车搜索">
    </form>
  </section>
  <section>
    <ul class="links">
      <li><a href="{pboot:sitedomain}">首页</a></li>
      {pboot:nav num=10 parent=0}
      <li><a href="[nav:link]">[nav:name]</a></li>
	  {/pboot:nav}
    </ul>
  </section>
</section>
<script>

    $(function() {

        var surl = location.href;

        var surl2 = $(".breadcrumbs a:eq(1)").attr("href");

        $("#header nav ul li a").each(function() {

            if ($(this).attr("href") == surl || $(this).attr("href") == surl2) $(this).addClass(

                "active")

        });

    });

</script> 
<script type="text/javascript" src="{pboot:sitetplpath}/js/browser.min.js?t=1625450376"></script>
<script type="text/javascript" src="{pboot:sitetplpath}/js/breakpoints.min.js?t=1625450376"></script>
<script type="text/javascript" src="{pboot:sitetplpath}/js/util.js?t=1625450384"></script>
<script type="text/javascript" src="{pboot:sitetplpath}/js/main.js?t=1625450382"></script>
<div class="Jz52-gotop fas fa-angle-double-up"><span class="label">返回顶部</span></div>
<script>
	$(function(){
		$('#tj').click(function(){
			//alert(1)
			if($('#name').val()==''){alert('请输入您的姓名！'); $("#name").focus(); return false;}
			if ($("#tel").val() == "") { alert("请输入你的手机！"); $("#tel").focus(); return false; } 
			if (!$("#tel").val().match(/^(((13[0-9]{1})|(14[0-9]{1})|(15[0-9]{1})|(16[0-9]{1})|(17[0-9]{1})|(18[0-9]{1})|(19[0-9]{1}))+\d{8})$/)) { alert("手机号码格式不正确！"); $("#tel").focus(); return false;} 
			if($('#content').val()==''){alert('请输入留言内容！');return false;}
		})
	})
</script>
</body>
</html>
<?php return array (
  0 => '/www/wwwroot/www.cocojiang.com/template/default/html/head.html',
  1 => '/www/wwwroot/www.cocojiang.com/template/default/html/left.html',
  2 => '/www/wwwroot/www.cocojiang.com/template/default/html/foot.html',
  3 => '/www/wwwroot/www.cocojiang.com/template/default/html/menu.html',
); ?>