<?php /*a:3:{s:59:"D:\wamp64\www\MyBlog\application\admin\view\diary\edit.html";i:1553488985;s:59:"D:\wamp64\www\MyBlog\application\admin\view\common\top.html";i:1553398483;s:60:"D:\wamp64\www\MyBlog\application\admin\view\common\left.html";i:1553434825;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>修改日志 - Mr.Wang - Blog</title>
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
		<link rel="stylesheet" href="http://localhost/myblog/public/static/editor/editormd.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://localhost/myblog/public/static/froala_editor/css/froala_editor.css">
		<link rel="stylesheet" href="http://localhost/myblog/public/static/froala_editor/css/froala_style.css">
		<link rel="stylesheet" href="http://localhost/myblog/public/static/froala_editor/css/plugins/code_view.css">
		<link rel="stylesheet" href="http://localhost/myblog/public/static/froala_editor/css/plugins/colors.css">
		<link rel="stylesheet" href="http://localhost/myblog/public/static/froala_editor/css/plugins/emoticons.css">
		<link rel="stylesheet" href="http://localhost/myblog/public/static/froala_editor/css/plugins/image_manager.css">
		<link rel="stylesheet" href="http://localhost/myblog/public/static/froala_editor/css/plugins/image.css">
		<link rel="stylesheet" href="http://localhost/myblog/public/static/froala_editor/css/plugins/line_breaker.css">
		<link rel="stylesheet" href="http://localhost/myblog/public/static/froala_editor/css/plugins/table.css">
		<link rel="stylesheet" href="http://localhost/myblog/public/static/froala_editor/css/plugins/char_counter.css">
		<link rel="stylesheet" href="http://localhost/myblog/public/static/froala_editor/css/plugins/video.css">
		<link rel="stylesheet" href="http://localhost/myblog/public/static/froala_editor/css/plugins/fullscreen.css">
		<link rel="stylesheet" href="http://localhost/myblog/public/static/froala_editor/css/plugins/file.css">
		<link rel="stylesheet" href="http://localhost/myblog/public/static/froala_editor/css/plugins/quick_insert.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
		<script src="//at.alicdn.com/t/font_1105599_yb7x1srwrj.js" type="text/javascript" charset="utf-8"></script>
		<script src="//at.alicdn.com/t/font_1105571_bbt516qtuju.js" type="text/javascript" charset="utf-8"></script>
		<style type="text/css">
			.widget .radio {
				display: inline-block;
				float: left;
				margin-right: 10px;
			}
			
			.widget .radio span {
				font-size: 35px;
			}
			
			.icon {
				width: 1em;
				height: 1em;
				vertical-align: -0.15em;
				fill: currentColor;
				overflow: hidden;
			}
		</style>

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
                                    <img src="http://localhost/myblog/public/static/admin/images/newx.jpg">
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
                                            修改密码
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
                            <li>
                                <a href="<?php echo url('admin/lst'); ?>">
                                    <span class="menu-text">
                                        资料修改                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 
					 <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-list"></i>
                            <span class="menu-text">栏目管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('cate/lst'); ?>">
                                    <span class="menu-text">
                                        栏目列表                                    </span>
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
                                <a href="<?php echo url('article/lst'); ?>">
                                    <span class="menu-text">
                                        文章评论                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('article/lst'); ?>">
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
                                <a href="<?php echo url('article/lst'); ?>">
                                    <span class="menu-text">
                                        项目列表                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('article/lst'); ?>">
                                    <span class="menu-text">
                                        项目统计                                    </span>
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
                                <a href="<?php echo url('tags/lst'); ?>">
                                    <span class="menu-text">
                                        网站资料                                  </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('tags/lst'); ?>">
                                    <span class="menu-text">
                                        关于                                  </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('tags/lst'); ?>">
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
									<a href="<?php echo url('diary/lst'); ?>">日志管理</a>
								</li>
								<li class="active">修改日志</li>
							</ul>
						</div>
						<!-- /Page Breadcrumb -->

						<!-- Page Body -->
						<div class="page-body">

							<div class="row">
								<div class="col-lg-12 col-sm-12 col-xs-12">
									<div class="widget">
										<div class="widget-header bordered-bottom bordered-blue">
											<span class="widget-caption">修改日志</span>
										</div>
										<div class="widget-body">

											<div id="horizontal-form">
												<form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
													<input type="hidden" name="id" value="<?php echo htmlentities($diary['id']); ?>" />
													<div class="form-group">
														<label for="title" class="col-sm-2 control-label no-padding-right">日志标题</label>
														<div class="col-sm-6">
															<input class="form-control" id="title" placeholder="文章标题" name="title" type="text" value="<?php echo htmlentities($diary['title']); ?>">
														</div>
													</div>
													<div class="form-group">
														<label for="info" class="col-sm-2 control-label no-padding-right">日志简介</label>
														<div class="col-sm-6">
															<input class="form-control" id="info" placeholder="文章简介" name="info" type="text" value="<?php echo htmlentities($diary['info']); ?>">
														</div>
													</div>
													<div class="form-group">
														<label for="weather" class="col-sm-2 control-label no-padding-right">天气</label>

														<div class="col-sm-6 col-lg-7">
															<div class="radio">
																<label>
                                                        			<input name="weather" type="radio" value="icon-tianqi-qing" <?php if($diary['weather'] == 'icon-tianqi-qing'): ?>checked<?php endif; ?> >
                                                        			<span class="text" title="晴">
                                                        				<svg class="icon" aria-hidden="true">
    																		<use xlink:href="#icon-tianqi-qing"></use>
																		</svg>
                                                        			</span>
                                                    			</label>
															</div>
															<div class="radio">
																<label>
                                                        			<input name="weather" type="radio" value="icon-tianqi-yin" <?php if($diary['weather'] == 'icon-tianqi-yin'): ?>checked<?php endif; ?>>
                                                        			<span class="text" title="阴">
                                                        				<svg class="icon" aria-hidden="true">
    																		<use xlink:href="#icon-tianqi-yin"></use>
																		</svg>
                                                        			</span>
                                                    			</label>
															</div>
															<div class="radio">
																<label>
                                                        			<input name="weather" type="radio" value="icon-tianqi-duoyun" <?php if($diary['weather'] == 'icon-tianqi-duoyun'): ?>checked<?php endif; ?>>
                                                        			<span class="text" title="多云">
                                                        				<svg class="icon" aria-hidden="true">
    																		<use xlink:href="#icon-tianqi-duoyun"></use>
																		</svg>
                                                        			</span>
                                                    			</label>
															</div>
															<div class="radio">
																<label>
                                                        			<input name="weather" type="radio" value="icon-tianqi-xiaoyu" <?php if($diary['weather'] == 'icon-tianqi-xiaoyu'): ?>checked<?php endif; ?>>
                                                        			<span class="text" title="小雨">
                                                        				<svg class="icon" aria-hidden="true">
    																		<use xlink:href="#icon-tianqi-xiaoyu"></use>
																		</svg>
                                                        			</span>
                                                    			</label>
															</div>
															<div class="radio">
																<label>
                                                        			<input name="weather" type="radio" value="icon-tianqi-dayu"<?php if($diary['weather'] == 'icon-tianqi-dayu'): ?>checked<?php endif; ?> >
                                                        			<span class="text" title="大雨">
                                                        				<svg class="icon" aria-hidden="true">
    																		<use xlink:href="#icon-tianqi-dayu"></use>
																		</svg>
                                                        			</span>
                                                    			</label>
															</div>
															<div class="radio">
																<label>
                                                        			<input name="weather" type="radio" value="icon-tianqi-yujiaxue" <?php if($diary['weather'] == 'icon-tianqi-yujiaxue'): ?>checked<?php endif; ?>>
                                                        			<span class="text" title="雨夹雪">
                                                        				<svg class="icon" aria-hidden="true">
    																		<use xlink:href="#icon-tianqi-yujiaxue"></use>
																		</svg>
                                                        			</span>
                                                    			</label>
															</div>
															<div class="radio">
																<label>
                                                        			<input name="weather" type="radio" value="icon-tianqi-longjuanfeng"<?php if($diary['weather'] == 'longjuanfeng'): ?>checked<?php endif; ?> >
                                                        			<span class="text" title="龙卷风">
                                                        				<svg class="icon" aria-hidden="true">
    																		<use xlink:href="#icon-tianqi-longjuanfeng"></use>
																		</svg>
                                                        			</span>
                                                    			</label>
															</div>
															<div class="radio">
																<label>
                                                        			<input name="weather" type="radio" value="icon-tianqi-qingdumai"<?php if($diary['weather'] == 'icon-tianqi-qingdumai'): ?>checked<?php endif; ?> >
                                                        			<span class="text" title="轻度霾">
                                                        				<svg class="icon" aria-hidden="true">
    																		<use xlink:href="#icon-tianqi-qingdumai"></use>
																		</svg>
                                                        			</span>
                                                    			</label>
															</div>

														</div>
													</div>
													<div class="form-group">
														<label for="mood" class="col-sm-2 control-label no-padding-right">心情</label>
														<div class="col-sm-6">
															<div class="radio">
																<label>
                                                        			<input name="mood" type="radio" value="icon-smilecry" <?php if($diary['mood'] == 'icon-smilecry'): ?>checked<?php endif; ?>>
                                                        			<span class="text" title="笑哭">
                                                        				<svg class="icon" aria-hidden="true">
    																		<use xlink:href="#icon-smilecry"></use>
																		</svg>
                                                        			</span>
                                                    			</label>
															</div>
															<div class="radio">
																<label>
                                                        			<input name="mood" type="radio" value="icon-smile"<?php if($diary['mood'] == 'icon-smile'): ?>checked<?php endif; ?> >
                                                        			<span class="text" title="微笑">
                                                        				<svg class="icon" aria-hidden="true">
    																		<use xlink:href="#icon-smile"></use>
																		</svg>
                                                        			</span>
                                                    			</label>
															</div>
															<div class="radio">
																<label>
                                                        			<input name="mood" type="radio" value="icon-smile1" <?php if($diary['mood'] == 'icon-smile1'): ?>checked<?php endif; ?>>
                                                        			<span class="text" title="笑">
                                                        				<svg class="icon" aria-hidden="true">
    																		<use xlink:href="#icon-smile1"></use>
																		</svg>
                                                        			</span>
                                                    			</label>
															</div>
															<div class="radio">
																<label>
                                                        			<input name="mood" type="radio" value="icon-cool" <?php if($diary['mood'] == 'icon-icon-cool'): ?>checked<?php endif; ?>>
                                                        			<span class="text" title="酷~">
                                                        				<svg class="icon" aria-hidden="true">
    																		<use xlink:href="#icon-cool"></use>
																		</svg>
                                                        			</span>
                                                    			</label>
															</div>
															<div class="radio">
																<label>
                                                        			<input name="mood" type="radio" value="icon-love"<?php if($diary['mood'] == 'icon-love'): ?>checked<?php endif; ?> >
                                                        			<span class="text" title="爱你呦~">
                                                        				<svg class="icon" aria-hidden="true">
    																		<use xlink:href="#icon-love"></use>
																		</svg>
                                                        			</span>
                                                    			</label>
															</div>
															<div class="radio">
																<label>
                                                        			<input name="mood" type="radio" value="icon-sad"<?php if($diary['mood'] == 'icon-sad'): ?>checked<?php endif; ?> >
                                                        			<span class="text" title="伤心">
                                                        				<svg class="icon" aria-hidden="true">
    																		<use xlink:href="#icon-sad"></use>
																		</svg>
                                                        			</span>
                                                    			</label>
															</div>
															<div class="radio">
																<label>
                                                        			<input name="mood" type="radio" value="icon-null"<?php if($diary['mood'] == 'icon-null'): ?>checked<?php endif; ?> >
                                                        			<span class="text" title="面无表情">
                                                        				<svg class="icon" aria-hidden="true">
    																		<use xlink:href="#icon-null"></use>
																		</svg>
                                                        			</span>
                                                    			</label>
															</div>

														</div>
													</div>

													<div class="form-group">
														<div class="layui-upload">
															<label for="pic" class="col-sm-2 control-label no-padding-right">日志缩略图</label>
															<div class="col-sm-6">

																<button type="button" class="layui-btn layui-btn-normal" id="pic" >添加图片</button>
																<img src="http://localhost/myblog/public/static/<?php echo htmlentities($diary['img']); ?>"  width="100" height="100" style="float: right;" >
																
																<p class="help-block col-sm-4 red" style="float: right;">点击图片放大预览</p>
																<div id="img_sel">

																</div>
																<button type="button" class="layui-btn" id="test8" style="margin-top: 10px;">上传</button>
																<p class="help-block col-sm-4 red" style="float: right;">* 请点击上传</p>
															</div>

														</div>
													</div>

													<div class="form-group">
														<label for="text" class="col-lg-2 control-label no-padding-right">编辑日志</label>
														<div class="col-lg-9">
															<textarea id="editor"><?php echo htmlentities($diary['text']); ?></textarea>
															<input type="hidden" id="editorText" value=""  name="text"/>
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

			<!-- Include external JS libs. -->
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
			<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

			<!-- Include Editor JS files. -->
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/froala_editor.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/align.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/char_counter.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/code_beautifier.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/code_view.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/colors.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/draggable.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/emoticons.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/entities.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/file.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/font_size.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/font_family.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/fullscreen.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/image.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/image_manager.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/line_breaker.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/inline_style.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/link.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/lists.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/paragraph_format.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/paragraph_style.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/quick_insert.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/quote.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/table.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/save.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/url.min.js"></script>
			<script type="text/javascript" src="http://localhost/myblog/public/static/froala_editor/js/plugins/video.min.js"></script>

			<script src='http://localhost/myblog/public/static/froala_editor/js/languages/zh_cn.js'></script>
			
			<!--Basic Scripts-->
			<script src="http://localhost/myblog/public/static/admin/style/bootstrap.js"></script>
			<!--Beyond Scripts-->
			<script src="http://localhost/myblog/public/static/admin/style/beyond.js"></script>
			<script src="http://localhost/myblog/public/static/layui/layui.js"></script>
			<script type="text/javascript">
				$(function() {
					$('textarea#editor').froalaEditor({
						language: 'zh_cn',
						heightMin: 200,
						heightMax: 300,
						placeholderText: '不要忘了写日志哦~~',
						pastePlain: true,
						theme: 'dark',
						toolbarSticky: false,
					});
					
					$('#toSave').click(function() {
						var html = $('textarea#editor').froalaEditor('html.get');
						$('#editorText').val(html);
						$.ajax({
							url: "<?php echo url('diary/edit'); ?>",
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
										title: '修改日志失败',
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
			<script>
				layui.use('upload', function() {
					var upload = layui.upload;
					var layer = layui.layer;
					var count = 0;
					//执行实例
					var uploadInst = upload.render({
						elem: '#pic' //绑定元素
							,
						url: "<?php echo url('diary/upload'); ?>" //上传接口
							,
						auto: false //选择文件后不自动上传

							,
						bindAction: '#test8',
						choose: function(obj) {
							//预读本地文件示例，不支持ie8
							obj.preview(function(index, file, result) { //在当前ID为“demo2”的区域显示图片
								count++;
								console.log(count);
								if(count > 1) {
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
	</body>

</html>