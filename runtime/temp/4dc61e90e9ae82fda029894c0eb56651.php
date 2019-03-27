<?php /*a:1:{s:60:"D:\wamp64\www\MyBlog\application\index\view\diary\index.html";i:1553684342;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title> 日志 - Mr.Wang - Blog </title>
		<!--width=device-width 表示宽度是设备屏幕的宽度;initial-scale=1 表示初始的缩放比例;shrink-to-fit=no 自动适应手机屏幕的宽度。-->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--引入public目录中的main.css文件-->
		<link rel="stylesheet" type="text/css" href="http://localhost/myblog/public/static/index/css/main.css" />
		<!--引入public目录中的初始化css文件-->
		<link rel="stylesheet" type="text/css" href="http://localhost/myblog/public/static/index/css/initial.css" />
		<!--引入public目录中的ico图标-->
		<link rel="shortcut icon" href="http://localhost/myblog/public/static/index/img/favicon.ico">
		<!--引入cdn图标-->
		<link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
		<!-- 新 Bootstrap4 核心 CSS 文件 -->
		<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
		<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
		<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
		<!-- popper.min.js 用于弹窗、提示、下拉菜单 -->
		<script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
		<!-- 最新的 Bootstrap4 核心 JavaScript 文件 -->
		<script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<script src="//at.alicdn.com/t/font_1105599_yb7x1srwrj.js" type="text/javascript" charset="utf-8"></script>
		<script src="//at.alicdn.com/t/font_1105571_bbt516qtuju.js" type="text/javascript" charset="utf-8"></script>
		<style type="text/css">
			#main .article ul li{
				margin-right: 60px;
			}
			#main #warp{
				margin-top: 45px!important;
			}
			#main #banner_right{
				margin-top: 95px !important;
			}
			.widget .radio {
				display: inline-block;
				float: left;
				margin-right: 10px;
			}
			
			#weather span,#mood span {
				font-size: 35px;
			}
			
			.icon {
				width: 1em;
				height: 1em;
				vertical-align: -0.15em;
				fill: currentColor;
				overflow: hidden;
			}
			#main .article_weather span, #main  .article_mood span{
				font-size: 17px;
			}
		</style>
	</head>

	<body>
		<!--导航栏开始-->
		<div class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" id="nav">
			<div class="container text-center">
				<a class="navbar-brand" href="#">Cat</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    				<span class="navbar-toggler-icon"></span>
  				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link " href="<?php echo url('index/index'); ?>">首页</a>
						</li>
						<!-- Dropdown -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">
								技术
							</a>
							<div class="dropdown-menu text-center" id="menu">
								<a class="dropdown-item" href="<?php echo url('technology/index',array('tag1'=>'前端')); ?>">前端</a>
								<a class="dropdown-item" href="<?php echo url('technology/index',array('tag1'=>'PHP')); ?>">PHP</a>
								<a class="dropdown-item" href="<?php echo url('technology/index',array('tag1'=>'Python')); ?>">Python</a>
								<a class="dropdown-item" href="<?php echo url('technology/index',array('tag1'=>'Linux')); ?>">Linux</a>
								<a class="dropdown-item" href="<?php echo url('technology/index',array('tag1'=>'Java')); ?>">Java</a>
								<a class="dropdown-item" href="<?php echo url('technology/index',array('tag1'=>'Android')); ?>">Android</a>
								<a class="dropdown-item" href="<?php echo url('technology/index',array('tag1'=>'C语言')); ?>">C语言</a>
								<a class="dropdown-item" href="<?php echo url('technology/index',array('tag1'=>'Security')); ?>">网络安全</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('project/index'); ?>">项目</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="<?php echo url('diary/index'); ?>">日志</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('essay/index'); ?>">随笔</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('board/index'); ?>">留言板</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('about/index'); ?>">关于</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--导航栏结束-->

		<!--主体内容开始-->
		<div id="main" class="container">
			<div class="row">
				
				<div class="col-xs-12 col-md-12 col-lg-8" id="warp">
					<!--面包屑导航开始-->
					<nav class="breadcrumb">
						<a class="breadcrumb-item " href="#">Blog</a>
						<a class="breadcrumb-item active" href="#">日志</a>
					</nav>
					<!--面包屑导航结束-->
					<?php if(is_array($diary) || $diary instanceof \think\Collection || $diary instanceof \think\Paginator): $i = 0; $__LIST__ = $diary;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<div class="article">
						<h3>
							<a href="<?php echo url('diary/show',array('id'=>$vo['id'])); ?>" class="article_title"><?php echo htmlentities($vo['title']); ?></a>
						</h3>
						<ul class="clearfix">
							<li class="article_author"><i class="fa fa-user"></i>&nbsp;<?php echo htmlentities($vo['author']); ?></li>
							<li class="article_time"><i class="fa fa-calendar"></i>&nbsp;<?php echo htmlentities(date("Y-m-d H:i:s",!is_numeric($vo['create_time'])? strtotime($vo['create_time']) : $vo['create_time'])); ?></li>
							<li class="article_weather"><i class="fa fa-list-alt"></i>&nbsp;
								<?php switch($vo['weather']): case "icon-tianqi-qing": ?>
								    	<span class="text" title="晴">
                                			<svg class="icon" aria-hidden="true">
    											<use xlink:href="#icon-tianqi-qing"></use>
											</svg>
                                		</span>
								    <?php break; case "icon-tianqi-yin": ?>
								    	<span class="text" title="阴">
                                			<svg class="icon" aria-hidden="true">
    											<use xlink:href="#icon-tianqi-yin"></use>
											</svg>
                                		</span>
								    <?php break; case "icon-tianqi-duoyun": ?>
								    	<span class="text" title="多云">
                                			<svg class="icon" aria-hidden="true">
    											<use xlink:href="#icon-tianqi-duoyun"></use>
											</svg>
                                		</span>
								    <?php break; case "icon-tianqi-xiaoyu": ?>
								    	<span class="text" title="小雨">
                                			<svg class="icon" aria-hidden="true">
    											<use xlink:href="#icon-tianqi-xiaoyu"></use>
											</svg>
                                		</span>
								    <?php break; case "icon-tianqi-dayu": ?>
								    	<span class="text" title="大雨">
                                			<svg class="icon" aria-hidden="true">
    											<use xlink:href="#icon-tianqi-dayu"></use>
											</svg>
                                		</span>
								    <?php break; case "icon-tianqi-yujiaxue": ?>
								    	<span class="text" title="雨夹雪">
                                			<svg class="icon" aria-hidden="true">
    											<use xlink:href="#icon-tianqi-yujiaxue"></use>
											</svg>
                                		</span>
								    <?php break; case "icon-tianqi-longjuanfeng": ?>
								    	<span class="text" title="龙卷风">
                                			<svg class="icon" aria-hidden="true">
    											<use xlink:href="#icon-tianqi-longjuanfeng"></use>
											</svg>
                                		</span>
								    <?php break; ?>
								    
								<?php endswitch; ?>
								
							</li>
							<li class="article_mood"><i class="fa fa-tags"></i>&nbsp;
								<?php switch($vo['mood']): case "icon-smilecry": ?>
								    	<span class="text" title="笑哭">
                                			<svg class="icon" aria-hidden="true">
    											<use xlink:href="#icon-smilecry"></use>
											</svg>
                                		</span>
								    <?php break; case "icon-smile": ?>
								    	<span class="text" title="微笑">
                                			<svg class="icon" aria-hidden="true">
    											<use xlink:href="#icon-smile"></use>
											</svg>
                                		</span>
								    <?php break; case "icon-smile1": ?>
								    	<span class="text" title="笑">
                                			<svg class="icon" aria-hidden="true">
    											<use xlink:href="#icon-smile1"></use>
											</svg>
                                		</span>
								    <?php break; case "icon-cool": ?>
								    	<span class="text" title="酷~">
                                			<svg class="icon" aria-hidden="true">
    											<use xlink:href="#icon-cool"></use>
											</svg>
                                		</span>
								    <?php break; case "icon-love": ?>
								    	<span class="text" title="爱你呦~">
                                			<svg class="icon" aria-hidden="true">
    											<use xlink:href="icon-love"></use>
											</svg>
                                		</span>
								    <?php break; case "icon-sad": ?>
								    	<span class="text" title="伤心">
                                			<svg class="icon" aria-hidden="true">
    											<use xlink:href="#icon-sad"></use>
											</svg>
                                		</span>
								    <?php break; case "icon-null": ?>
								    	<span class="text" title="面无表情">
                                			<svg class="icon" aria-hidden="true">
    											<use xlink:href="#icon-null"></use>
											</svg>
                                		</span>
								    <?php break; ?>
								    
								<?php endswitch; ?>
							</li>

						</ul>
						<div class="article_main clearfix">
							<div class="row">
								<div class="article_img col-sm-6 col-md-6 col-lg-4 hidden-xs">
									<a href="#"><img src="http://localhost/myblog/public/static/<?php echo htmlentities($vo['img']); ?>"></a>
								</div>
								<div class="article_text col-xs-12 col-sm-6  col-md-6 col-lg-8">
									<?php echo htmlentities($vo['info']); ?>
								</div>
								<a class="article_readAll" href="#">阅读全文</a>
							</div>

						</div>
					</div>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					
					<div class="d-flex justify-content-center" style="margin-top: -10px;">
							<?php echo $diary; ?>
					</div>
				</div>
				<div class="col-lg-4 d-none d-sm-block" id="banner_right">
					
					
					<div class="time_list widget">
						<h2 class="title">时间轴</h2>
						<ul class="list-group">
							<li class="list-group-item">
								<span><a href="#">2019(1)</a></span>
							</li>
							<li class="list-group-item">
								<span><a href="#">2019(2)</a></span>
							</li>
							<li class="list-group-item">
								<span><a href="#">2019(3)</a></span>
							</li>
							
						</ul>
					</div>
					
				</div>
			</div>

		</div>
		<!--主体内容结束-->
		<!--copyright开始-->
		<div id="copyright" >
			<p>copyright &nbsp;2019-2020 @
				<a href="#">wh241.com</a>
			</p>
		</div>
		<!--copyright结束-->

	</body>

</html>