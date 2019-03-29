<?php /*a:3:{s:58:"D:\wamp64\www\MyBlog\application\admin\view\admin\add.html";i:1553394227;s:59:"D:\wamp64\www\MyBlog\application\admin\view\common\top.html";i:1553833963;s:60:"D:\wamp64\www\MyBlog\application\admin\view\common\left.html";i:1553834037;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>管理员列表 - Mr.Wang - Blog</title>

		<meta name="description" content="Dashboard">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!--Basic http://localhost/myblog/public/static/admin/styles-->
		<link href="http://localhost/myblog/public/static/admin/style/bootstrap.css" rel="stylesheet">
		<link href="http://localhost/myblog/public/static/admin/style/font-awesome.css" rel="stylesheet">
		<link href="http://localhost/myblog/public/static/admin/style/weather-icons.css" rel="stylesheet">

		<!--Beyond http://localhost/myblog/public/static/admin/styles-->
		<link id="beyond-link" href="http://localhost/myblog/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
		<link href="http://localhost/myblog/public/static/admin/style/demo.css" rel="stylesheet">
		<link href="http://localhost/myblog/public/static/admin/style/typicons.css" rel="stylesheet">
		<link href="http://localhost/myblog/public/static/admin/style/animate.css" rel="stylesheet">
		<link href="http://localhost/myblog/public/static/layui/css/layui.css" rel="stylesheet">
		<!--引入public目录中的ico图标-->
		<link rel="shortcut icon" href="http://localhost/myblog/public/static/admin/images/favicon.ico">
	</head>

	<body>
		<!-- 头部 -->
	<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                            <img src="http://localhost/myblog/public/static/admin/images/logo2.png" alt="" style="    margin-left: -10px;">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="http://localhost/myblog/public/static/admin/images/cat.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo htmlentities(app('request')->session('username')); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/logout'); ?>">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('admin/edit',array('id'=>app('request')->session('uid'))); ?>">
                                            修改资料
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>


		<!-- /头部 -->

		<div class="main-container container-fluid">
			<div class="page-container">·
				<!-- Page Sidebar -->
				<div class="page-sidebar" id="sidebar">
					<!-- Page Sidebar Header-->
					<div class="sidebar-header-wrapper">
						<input class="searchinput" type="text" disabled="disabled">
					</div>
					<!-- /Page Sidebar Header -->
					 <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">管理员</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('admin/lst'); ?>">
                                    <span class="menu-text">
                                        管理员列表                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">文章管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('article/lst'); ?>">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-comment"></i>
                            <span class="menu-text">评论管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('comment/lst'); ?>">
                                    <span class="menu-text">
                                        文章评论                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('board/lst'); ?>">
                                    <span class="menu-text">
                                        留言板                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-flag"></i>
                            <span class="menu-text">项目管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('project/lst'); ?>">
                                    <span class="menu-text">
                                        项目列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-book"></i>
                            <span class="menu-text">日志管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('diary/lst'); ?>">
                                    <span class="menu-text">
                                        日志列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-calendar"></i>
                            <span class="menu-text">随笔管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('essay/lst'); ?>">
                                    <span class="menu-text">
                                        随笔列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 
                    
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text">系统</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('about/edit'); ?>">
                                    <span class="menu-text">
                                        关于                                  </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('links/lst'); ?>">
                                    <span class="menu-text">
                                       友情链接                                  </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>                        
                    
                                           
                    
                </ul>
                <!-- /Sidebar Menu -->
            </div>
					<!-- /Page Sidebar -->
					<!-- Page Content -->
					<div class="page-content">
						<!-- Page Breadcrumb -->
						<div class="page-breadcrumbs">
							<ul class="breadcrumb">
								<li>
									<a href="#">后台</a>
								</li>
								<li>
									<a href="<?php echo url('admin/lst'); ?>">管理员管理</a>
								</li>
								<li class="active">添加管理员</li>
							</ul>
						</div>
						<!-- /Page Breadcrumb -->

						<!-- Page Body -->
						<div class="page-body">

							<div class="row">
								<div class="col-lg-12 col-sm-12 col-xs-12">
									<div class="widget">
										<div class="widget-header bordered-bottom bordered-blue">
											<span class="widget-caption">新增管理员</span>
										</div>
										<div class="widget-body">

											<div id="horizontal-form">
												<form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
													<div class="form-group">
														<label for="username" class="col-sm-2 control-label no-padding-right">管理员登录名</label>
														<div class="col-sm-6">
															<input class="form-control" id="username" placeholder="登录名" name="name" type="text" >
														</div>
														<p class="help-block col-sm-4 red">* 必填</p>
													</div>

													<div class="form-group">
														<label for="password" class="col-sm-2 control-label no-padding-right">管理员密码</label>
														<div class="col-sm-6">
															<input class="form-control" id="password" placeholder="密码" name="password" type="text" >
														</div>
														<p class="help-block col-sm-4 red">* 必填</p>
													</div>
													<div class="form-group">
														<label for="name" class="col-sm-2 control-label no-padding-right">管理员昵称</label>
														<div class="col-sm-6">
															<input class="form-control" id="name" placeholder="昵称" name="username" type="text" >
														</div>
														<p class="help-block col-sm-4 red">* 必填</p>
													</div>
													<div class="form-group">
														<label for="email" class="col-sm-2 control-label no-padding-right">管理员邮箱</label>
														<div class="col-sm-6">
															<input class="form-control" id="email" placeholder="邮箱" name="email" type="text" >
														</div>
														<p class="help-block col-sm-4 red">* 必填</p>
													</div>
													<div class="form-group">
														<label for="desca" class="col-sm-2 control-label no-padding-right">管理员描述</label>
														<div class="col-sm-6">
															<input class="form-control" id="desca" placeholder="描述" name="info" type="text" >
														</div>
														<p class="help-block col-sm-4 red">* 必填</p>
													</div>

													<div class="form-group">
														<div class="layui-upload">
															<label for="pic" class="col-sm-2 control-label no-padding-right">管理员头像</label>
															<div class="col-sm-6">
																<button type="button" class="layui-btn layui-btn-normal" id="pic">添加图片</button>
																<p class="help-block col-sm-4 red" style="float: right;">点击图片放大预览</p>
																<div id="img_sel">

																</div>
																<button type="button" class="layui-btn" id="test8" style="margin-top: 10px;" >上传</button>
																<p class="help-block col-sm-4 red" style="float: right;">* 请点击上传</p>
															</div>

														</div>

													</div>
													<div class="form-group">
														<div class="col-sm-offset-2 col-sm-10">
															<button type="submit" class="btn btn-default" id="toSave">保存信息</button>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
						<!-- /Page Body -->
					</div>
					<!-- /Page Content -->
				</div>
			</div>

			<!--Basic Scripts-->
			<script src="http://localhost/myblog/public/static/admin/style/jquery_002.js"></script>
			<script src="http://localhost/myblog/public/static/admin/style/bootstrap.js"></script>
			<script src="http://localhost/myblog/public/static/admin/style/jquery.js"></script>
			<!--Beyond Scripts-->
			<script src="http://localhost/myblog/public/static/admin/style/beyond.js"></script>
			<script src="http://localhost/myblog/public/static/layui/layui.js"></script>
			<script>
				layui.use('upload', function() {
					var upload = layui.upload;
					var layer = layui.layer;
					var count = 0;
					//执行实例
					var uploadInst = upload.render({
						elem: '#pic' //绑定元素
							,
						url: "<?php echo url('admin/upload'); ?>" //上传接口
							,
						auto: false //选择文件后不自动上传

							,
						bindAction: '#test8',
						choose: function(obj) {
							//预读本地文件示例，不支持ie8
							obj.preview(function(index, file, result) { //在当前ID为“demo2”的区域显示图片
								count++;
								console.log(count);
								if(count > 1 )
								{
									layer.msg("只允许上传一张图片");
									error();
								}
								var files = obj.pushFile();
								layui.use(['jquery', 'layer'], function() {
									var $ = layui.$ //重点处
										,
										layer = layui.layer;
									$('#img_sel').append('<div class="image-container" id="container' + index + '"><div class="delete-css"><button id="upload_img_' + index + '" class="layui-btn layui-btn-danger layui-btn-xs">删除</button></div>' +
										'<img id="showImg' + index + '" style="width: 150px; margin:10px;cursor:pointer;"src="' + result + '" alt="' + file.name + '"></div>');

									$("#upload_img_" + index).bind('click', function() {
										delete files[index];
										$("#container" + index).remove();
									});
									//某图片放大预览
									$("#showImg" + index).bind('click', function() {
										var width = $("#showImg" + index).width();
										var height = $("#showImg" + index).height();
										var scaleWH = width / height;
										var bigH = 600;
										var bigW = scaleWH * bigH;
										if(bigW > 900) {
											bigW = 900;
											bigH = bigW / scaleWH;
										}

										// 放大预览图片
										layer.open({
											type: 1,
											title: false,
											closeBtn: 1,
											shadeClose: true,
											area: [bigW + 'px', bigH + 'px'], //宽高
											content: "<img width='" + bigW + "' height='" + bigH + "' src=" + result + " />"
										});
									});

								});

							});
						},

						done: function(res) {
							//上传完毕回调
							layer.msg('上传成功');

						},
						error: function() {
							//请求异常回调
							layer.msg('上传失败，请重试');
						}
					});
				});
			</script>
			<script type="text/javascript">
				$(function() {
					$('#toSave').click(function() {
						$.ajax({
							url: "<?php echo url('admin/add'); ?>",
							type: 'post',
							data: $('form').serialize(),
							dataType: 'json',
							success: function(data) {
								console.log(data);
								if(data.code == 1) {
									layer.msg(data.msg, {
										icon: 6,
										time: 2000
									}, function() {
										location.href = data.url;
									});
								} else {
									layer.open({
										title: '添加管理员失败',
										content: data.msg,
										icon: 5,
										anim: 6
									});
								}
							},
							error: function(data) {
								console.log(data);
								
							}
						});
						return false;
					});
				});
			</script>

	</body>

</html>