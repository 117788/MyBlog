<?php /*a:1:{s:60:"D:\wamp64\www\MyBlog\application\index\view\board\index.html";i:1553680001;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>留言板 - Mr.Wang - Blog </title>
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
		<!-- Include Editor style. -->
		<link href='https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
		<link href='https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/css/froala_style.min.css' rel='stylesheet' type='text/css' />
		<!-- Include JS file. -->
		<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/js/froala_editor.min.js'></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

		<!-- Include Editor style. -->
		<link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
		<link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/css/froala_style.min.css" rel="stylesheet" type="text/css" />
		<style type="text/css">
			#main #warp {
				margin-top: 45px!important;
			}
			
			#main #banner_right {
				margin-top: 95px !important;
			}
			
			#main .board_table {
				background-color: #fff;
				padding: 10px;
				margin-bottom: 20px;
			}
			
			#main .board_info {
				display: inline-block;
			}
			
			#main .board img {
				margin-top: -40px;
				margin-right: 10px;
			}
			
			#main .board .board_info_review {
				background-color: #5957c2;
				width: 80%;
				height: 25px;
			}
			
			#main .board_info_text {
				margin-left: 20px!important;
			}
			
			#main .review {
				margin-left: 50px;
			}
			
			.website_data li {
				height: 40px;
				line-height: 15px;
			}
			
			#main .message_p {
				font-size: 20px;
				font-weight: 500;
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
							<a class="nav-link" href="<?php echo url('index/index'); ?>">首页</a>
						</li>
						<!-- Dropdown -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
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
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('diary/index'); ?>">日志</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('essay/index'); ?>">随笔</a>
						</li>
						<li class="nav-item active">
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
						<a class="breadcrumb-item" href="#">Blog</a>
						<a class="breadcrumb-item active" href="#">留言板</a>
					</nav>
					<!--面包屑导航结束-->

					<div class="board">
						<div class="board_table">
							<img src="http://localhost/myblog/public/static/index/img/photo.jpg" class="img-fluid rounded" />
							<div class="board_info">
								<div class="board_info_review">
									<p>游客 : 令狐冲 2019.3.20 | &nbsp;&nbsp;
										<a href="#">回复</a>
									</p>
								</div>
								<p class="board_info_text">这是评论内容，这是评论内容，这是评论内容，这是评论内容，这是评论内容</p>
							</div>

							<div class="review ">
								<img src="http://localhost/myblog/public/static/index/img/photo1.jpg" class="img-fluid rounded" />
								<div class="board_info">
									<div class="review_info board_info_review">
										<p>admin : admin 2019.3.20 | &nbsp;&nbsp;
											<a href="#">回复</a>
										</p>
									</div>
									<p class="review_text">这是回复内容，这是回复内容，这是回复内容，这是回复内容，这是回复内容</p>
								</div>

							</div>
						</div>
						<div class="board_table">
							<img src="http://localhost/myblog/public/static/index/img/photo.jpg" class="img-fluid rounded" />
							<div class="board_info">
								<div class="board_info_review">
									<p>游客 : 令狐冲 2019.3.20 | &nbsp;&nbsp;
										<a href="#">回复</a>
									</p>
								</div>
								<p>这是评论内容，这是评论内容，这是评论内容，这是评论内容，这是评论内容</p>
							</div>
						</div>
						<div class="board_table">
							<img src="http://localhost/myblog/public/static/index/img/photo.jpg" class="img-fluid rounded" />
							<div class="board_info">
								<div class="board_info_review">
									<p>游客 : 令狐冲 2019.3.20 | &nbsp;&nbsp;
										<a href="#">回复</a>
									</p>
								</div>
								<p class="board_info_text">这是评论内容，这是评论内容，这是评论内容，这是评论内容，这是评论内容</p>
							</div>

							<div class="review ">
								<img src="http://localhost/myblog/public/static/index/img/photo1.jpg" class="img-fluid rounded" />
								<div class="board_info">
									<div class="review_info board_info_review">
										<p>admin : admin 2019.3.20 | &nbsp;&nbsp;
											<a href="#">回复</a>
										</p>
									</div>
									<p class="review_text">这是回复内容，这是回复内容，这是回复内容，这是回复内容，这是回复内容</p>
								</div>

							</div>
						</div>
						<div class="board_table">
							<img src="http://localhost/myblog/public/static/index/img/photo.jpg" class="img-fluid rounded" />
							<div class="board_info">
								<div class="board_info_review">
									<p>游客 : 令狐冲 2019.3.20 | &nbsp;&nbsp;
										<a href="#">回复</a>
									</p>
								</div>
								<p>这是评论内容，这是评论内容，这是评论内容，这是评论内容，这是评论内容</p>
							</div>
						</div>
						<div class="board_table">
							<img src="http://localhost/myblog/public/static/index/img/photo.jpg" class="img-fluid rounded" />
							<div class="board_info">
								<div class="board_info_review">
									<p>游客 : 令狐冲 2019.3.20 | &nbsp;&nbsp;
										<a href="#">回复</a>
									</p>
								</div>
								<p class="board_info_text">这是评论内容，这是评论内容，这是评论内容，这是评论内容，这是评论内容</p>
							</div>

							<div class="review ">
								<img src="http://localhost/myblog/public/static/index/img/photo1.jpg" class="img-fluid rounded" />
								<div class="board_info">
									<div class="review_info board_info_review">
										<p>admin : admin 2019.3.20 | &nbsp;&nbsp;
											<a href="#">回复</a>
										</p>
									</div>
									<p class="review_text">这是回复内容，这是回复内容，这是回复内容，这是回复内容，这是回复内容</p>
								</div>

							</div>
						</div>
						<div class="board_table">
							<img src="http://localhost/myblog/public/static/index/img/photo.jpg" class="img-fluid rounded" />
							<div class="board_info">
								<div class="board_info_review">
									<p>游客 : 令狐冲 2019.3.20 | &nbsp;&nbsp;
										<a href="#">回复</a>
									</p>
								</div>
								<p>这是评论内容，这是评论内容，这是评论内容，这是评论内容，这是评论内容</p>
							</div>
						</div>

						<ul class="pagination d-flex justify-content-center">
							<li class="page-item">
								<a class="page-link" href="#">Previous</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">1</a>
							</li>
							<li class="page-item active">
								<a class="page-link" href="#">2</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">3</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">Next</a>
							</li>
						</ul>
						<p class="message_p">留下脚印吧,尽情吐槽~~</p>
						<div class="message_box">
							<form action="/action_page.php">
								<div class="row">
									<div class="input-group mb-3 col-xs-6 col-md-6 col-lg-6">
										<div class="input-group-prepend">
											<span class="input-group-text">昵称</span>
										</div>
										<input type="text" class="form-control" placeholder="昵称将会被显示(必填)" id="usr" name="username">
									</div>

									<div class="input-group mb-3 col-xs-6 col-md-6 col-lg-6">
										<div class="input-group-append">
											<span class="input-group-text">邮箱</span>
										</div>
										<input type="text" class="form-control" placeholder="邮箱不会被公开(必填)" id="mail" name="email">

									</div>

								</div>
								<div class="editor"></div>
								<button type="submit" class="btn btn-primary" style="margin-bottom: 20px; margin-top: 10px;">发表评论</button>

							</form>
						</div>

					</div>

				</div>
				<div class="col-lg-4 d-none d-sm-block" id="banner_right">
					<div class="website_data widget">
						<h2 class="title">网站统计</h2>
						<ul class="list-group">
							<li class="list-group-item list-group-item-success">运营时间:2年</li>
							<li class="list-group-item list-group-item-secondary">文章总数:200</li>
							<li class="list-group-item list-group-item-info">随笔总数:365</li>
							<li class="list-group-item list-group-item-warning">日志总数:150</li>
							<li class="list-group-item list-group-item-danger">评论总数:75</li>
							<li class="list-group-item list-group-item-dark ">留言板:66</li>
							<li class="list-group-item list-group-item-primary">最后发文:2019.3.21</li>
						</ul>
					</div>

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
		<!-- Include external JS libs. -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

		<!-- Include Editor JS files. -->

		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/js/froala_editor.pkgd.min.js"></script>
		<script src='http://localhost/myblog/public/static/froala_editor/js/languages/zh_cn.js'></script>
		<!-- Initialize the editor. -->
		<script>
			$(function() {
				$('div.editor').froalaEditor({
					language: 'zh_cn',
					heightMin: 100,
					heightMax: 600,
					placeholderText: '亲亲，这边建议您留下脚印呢~~',
					pastePlain: true,
					tooltips: false,
					theme: 'dark',
					quickInsertTags: [''],
					toolbarButtons: ['emoticons'],
					toolbarStickyOffset: 53,
				})
			});
		</script>
	</body>

</html>