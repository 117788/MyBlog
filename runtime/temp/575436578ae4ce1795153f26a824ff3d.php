<?php /*a:1:{s:58:"D:\wamp64\www\MyBlog\application\index\view\index\add.html";i:1553337230;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>Mr.Wang - Blog </title>
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
		<link rel="stylesheet" href="http://localhost/myblog/public/static/editor/examples/css/style.css" />
		<link rel="stylesheet" href="http://localhost/myblog/public/static/editor/editormd.min.css" />

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
							<a class="nav-link active" href="<?php echo url('index/index'); ?>">首页</a>
						</li>
						<!-- Dropdown -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
								技术
							</a>
							<div class="dropdown-menu text-center" id="menu">
								<a class="dropdown-item" href="<?php echo url('technology/index'); ?>">前端</a>
								<a class="dropdown-item" href="<?php echo url('technology/index'); ?>">PHP</a>
								<a class="dropdown-item" href="<?php echo url('technology/index'); ?>">Python</a>
								<a class="dropdown-item" href="<?php echo url('technology/index'); ?>">Linux</a>
								<a class="dropdown-item" href="<?php echo url('technology/index'); ?>">Java</a>
								<a class="dropdown-item" href="<?php echo url('technology/index'); ?>">Android</a>
								<a class="dropdown-item" href="<?php echo url('technology/index'); ?>">C语言</a>
								<a class="dropdown-item" href="<?php echo url('technology/index'); ?>">网络安全</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('project/index'); ?>">项目</a>
						</li>
						<li class="nav-item">
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

				<div class="col-xs-12 col-md-12 col-lg-10" id="warp">
					<nav class="breadcrumb">
						<a class="breadcrumb-item" href="#">Blog</a>
						<a class="breadcrumb-item active" href="#">首页</a>

					</nav>
					<form action="<?php echo url('index/add'); ?>" method="post">

						<button type="submit" class="btn btn-default">提交文章</button>
						<div id="test-editormd">
							<textarea style="display:none;"></textarea>
							<!-- 第二个隐藏文本域，用来构造生成的HTML代码，方便表单POST提交，这里的name可以任意取，后台接受时以这个name键为准 -->
							<textarea class="editormd-html-textarea" name="html"></textarea>
						</div>
					</form>

				</div>
				<div class="col-lg-2 d-none d-sm-block" id="banner_right">

				</div>
			</div>

		</div>
		<!--主体内容结束-->
		<!--copyright开始-->
		<div id="copyright">
			<p>copyright &nbsp;2019-2020 @
				<a href="#">wh241.com</a>
			</p>
		</div>
		<!--copyright结束-->
		<script src="http://localhost/myblog/public/static/editor/editormd.js"></script>
		<script type="text/javascript">
			var testEditor;
			$(function() {
				testEditor = editormd("test-editormd", {
					width: "90%",
					height: 1600,
					emoji: true,
					previewTheme: "dark", //预览主题
					path: "http://localhost/myblog/public/static/editor/lib/",
				});

			});
		</script>

	</body>

</html>