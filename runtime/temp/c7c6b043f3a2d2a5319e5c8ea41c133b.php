<?php /*a:1:{s:61:"D:\wamp64\www\MyBlog\application\index\view\board\editor.html";i:1553218775;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">

		<!-- Include external CSS. -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

		<!-- Include Editor style. -->
		<link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
		<link href="https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/css/froala_style.min.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<!-- Create a tag that we will use as the editable area. -->
		<!-- You can use a div tag as well. -->
		<textarea></textarea>

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

				$('textarea').froalaEditor({
					language: 'zh_cn',
					heightMin: 100,
					heightMax: 300,
					placeholderText: '',
					pastePlain: true,
					theme: 'gray',
					toolbarButtons: ['emoticons'],
					imageDefaultWidth: 100,
				})
			});
		</script>
	</body>

</html>