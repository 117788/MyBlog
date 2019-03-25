<?php /*a:3:{s:58:"D:\wamp64\www\MyBlog\application\admin\view\diary\lst.html";i:1553507585;s:59:"D:\wamp64\www\MyBlog\application\admin\view\common\top.html";i:1553398483;s:60:"D:\wamp64\www\MyBlog\application\admin\view\common\left.html";i:1553434825;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>日志列表 - Mr.Wang - Blog</title>

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
		<!--引入public目录中的ico图标-->
		<link rel="shortcut icon" href="http://localhost/myblog/public/static/admin/images/favicon.ico">
		<script src="//at.alicdn.com/t/font_1105599_yb7x1srwrj.js" type="text/javascript" charset="utf-8"></script>
		<script src="//at.alicdn.com/t/font_1105571_bbt516qtuju.js" type="text/javascript" charset="utf-8"></script>
		<style type="text/css">
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
			<div class="page-container">
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
								<li >日志管理</li>
								<li class="active">日志列表</li>
							</ul>
						</div>
						<!-- /Page Breadcrumb -->

						<!-- Page Body -->
						<div class="page-body">

							<button type="button" tooltip="添加文章" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('diary/add'); ?>'"> <i class="fa fa-plus"></i> Add
</button>
							<div class="row">
								<div class="col-lg-12 col-sm-12 col-xs-12">
									<div class="widget">
										<div class="widget-body">
											<div class="flip-scroll">
												<table class="table table-bordered table-hover">
													<thead class="">
														<tr>
															<th class="text-center">ID</th>
															<th class="text-center">日志标题</th>
															<th class="text-center">发布时间</th>
															<th class="text-center">缩略图</th>
															<th class="text-center">天气</th>
															<th class="text-center">心情</th>
															<th class="text-center">操作</th>
														</tr>
													</thead>
													<tbody>
														<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
														<tr>
															<td align="center"><?php echo htmlentities($vo['id']); ?></td>
															<td align="center"><?php echo htmlentities($vo['title']); ?></td>
															<td align="center"><?php echo htmlentities(date("Y-m-d H:i:s",!is_numeric($vo['create_time'])? strtotime($vo['create_time']) : $vo['create_time'])); ?></td>
															<td align="center">
																<?php if($vo['img'] != ''): ?>
																<img src="http://localhost/myblog/public/static/<?php echo htmlentities($vo['img']); ?>" width="50" height="50" /> <?php else: ?> 暂无缩略图 <?php endif; ?>
															</td>
															<td align="center" id="weather">
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
															</td>
															<td align="center" id="mood">
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
															</td>
															
															<td align="center">
																<a href="<?php echo url('diary/edit',array('id'=>$vo['id'])); ?>" class="btn btn-primary btn-sm shiny">
																	<i class="fa fa-edit"></i> 编辑
																</a>

																<a href="#" onClick="warning('确实要删除吗', '<?php echo url("diary/del",array('id'=>$vo['id'])); ?>')" class="btn btn-danger btn-sm shiny">
																	<i class="fa fa-trash-o"></i> 删除
																</a>

															</td>
														</tr>

														<?php endforeach; endif; else: echo "" ;endif; ?>
													</tbody>

												</table>

											</div>

											<div style="text-align: right;margin-top: 10px;">
												<?php echo $list; ?>
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

	</body>

</html>