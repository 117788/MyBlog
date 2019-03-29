<?php /*a:3:{s:61:"D:\wamp64\www\MyBlog\application\admin\view\project\edit.html";i:1553698746;s:59:"D:\wamp64\www\MyBlog\application\admin\view\common\top.html";i:1553833963;s:60:"D:\wamp64\www\MyBlog\application\admin\view\common\left.html";i:1553834037;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>编辑项目 - Mr.Wang - Blog</title>
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
		<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
		<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
		<!-- 最新的 Bootstrap4 核心 JavaScript 文件 -->
		<script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<!--引入cdn图标-->
		<link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
		<!-- popper.min.js 用于弹窗、提示、下拉菜单 -->
		<script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
		<!-- 最新的 Bootstrap4 核心 JavaScript 文件 -->
		<script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>

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
									<a href="<?php echo url('project/lst'); ?>">项目管理</a>
								</li>
								<li class="active">编辑项目</li>
							</ul>
						</div>
						<!-- /Page Breadcrumb -->

						<!-- Page Body -->
						<div class="page-body">

							<div class="row">
								<div class="col-lg-12 col-sm-12 col-xs-12">
									<div class="widget">
										<div class="widget-header bordered-bottom bordered-blue">
											<span class="widget-caption">编辑项目</span>
										</div>
										<div class="widget-body">

											<div id="horizontal-form">
												<form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
													<input type="hidden" name="id" value="<?php echo htmlentities($project['id']); ?>" />
													<div class="form-group">
														<label for="title" class="col-sm-2 control-label no-padding-right">项目名称</label>
														<div class="col-sm-6">
															<input class="form-control" id="title" placeholder="项目名称" name="name" type="text" value="<?php echo htmlentities($project['name']); ?>">
														</div>
													</div>
													<div class="form-group">
														<label for="info" class="col-sm-2 control-label no-padding-right">项目简介</label>
														<div class="col-sm-6">
															<input class="form-control" id="info" placeholder="项目简介" name="info" type="text" value="<?php echo htmlentities($project['info']); ?>">
														</div>
													</div>
													<div class="form-group">
														<div id="element_id">
															<div style="display: block;overflow: hidden;margin-left: 135px;">
																<label for="title" class="col-sm-2 control-label no-padding-right">
																	<span style="margin-right: 10px;">一级标签</span>
															<select class="tag1" name="tag1" style="width: 100px;">
																<option value="<?php echo htmlentities($project['tag1']); ?>" selected><?php echo htmlentities($project['tag1']); ?></option>
															</select>
															</label>
															</div>

															<div style="display: block; overflow: hidden;margin-left: 135px;">
																<label for="title" class="col-sm-2 control-label no-padding-right">
																	<span style="margin-right: 10px;">二级标签</span>
															<select class="tag2" name="tag2" style="width: 100px;">
																<option value="<?php echo htmlentities($project['tag2']); ?>" selected><?php echo htmlentities($project['tag2']); ?></option>
															</select>
															</label>
															</div>

														</div>

													</div>
													<div class="form-group">
														<div class="layui-upload">
															<label for="pic" class="col-sm-2 control-label no-padding-right">项目图片</label>
															<div class="col-sm-6">
																<button type="button" class="layui-btn layui-btn-normal layui-input-inline " id="pic">添加图片</button>
																<img src="http://localhost/myblog/public/static/<?php echo htmlentities($project['img']); ?>" id="project_img"  width="100" height="100" style="float: right;" >
																<div class="layui-form-mid layui-word-aux  " style="float: right;">头像的尺寸限定150x150px,大小在50kb以内</div>
																<div >
																	<img src="" id="img_sel">
																</div>

															</div>

														</div>

													</div>
													
													<div class="form-group">
														<label for="state" class="col-sm-2 control-label no-padding-right">是否原创</label>
														<div class="col-sm-6">
															<label>
                                    							<input class="checkbox-slider colored-darkorange" name="original"  type="checkbox" <?php if($project['original']  == 1): ?>checked<?php endif; ?>>
                                    							<span class="text"></span>
                                 							</label>
														</div>
													</div>
													<div class="form-group">
														<label for="state" class="col-sm-2 control-label no-padding-right">是否完成</label>
														<div class="col-sm-6">
															<label>
                                    							<input class="checkbox-slider colored-blue" name="complete"  type="checkbox"<?php if($project['complete'] == 1): ?>checked<?php endif; ?>>
                                    							<span class="text"></span>
                                 							</label>
														</div>
													</div>
													<div class="form-group">
														<label for="gitUrl" class="col-sm-2 control-label no-padding-right">GitBook链接</label>
														<div class="col-sm-6">
															<input class="form-control" id="gitUrl" placeholder="GitBook链接" name="gitUrl" type="text" value="<?php echo htmlentities($project['gitUrl']); ?>">
														</div>
														<p class="help-block col-sm-4 red">* 必填</p>
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
			<script src="http://localhost/myblog/public/static/cxSelect/js/jquery.cxselect.js"></script>
			<script type="text/javascript">
				layui.config({
					base: 'http://localhost/myblog/public/static/layui/third/' //layui自定义layui组件目录
				}).use(['form', 'croppers'], function() {
					var $ = layui.jquery,
						form = layui.form,
						croppers = layui.croppers,
						layer = layui.layer;

					//创建一个头像上传组件
					croppers.render({
						elem: '#pic',
						saveW: 150 //保存宽度
							,
						saveH: 150,
						mark: 186 / 105
							,
						area: '900px' //弹窗宽度
							,
						url: "<?php echo url('project/upload'); ?>" //图片上传接口返回和（layui 的upload 模块）返回的JOSN一样
							,
						done: function(url) { //上传完毕回调
							console.log(url);
							$("#project_img").attr('src', url);
						}
					});

				});
			</script>
			<script type="text/javascript">
				$(function() {
					$('#toSave').click(function() {
						$.ajax({
							url: "<?php echo url('project/edit'); ?>",
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
										title: '添加项目失败',
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
			<script type="text/javascript">
				$(function() {
					$('#element_id').cxSelect({
						url: 'http://localhost/MyBlog/public/static/cxSelect/js/tag.json', // 提示：如果服务器不支持 .json 类型文件，请将文件改为 .js 文件
						selects: ['tag1', 'tag2'], // selects 为数组形式，请注意顺序
					});
				});
			</script>
	</body>

</html>