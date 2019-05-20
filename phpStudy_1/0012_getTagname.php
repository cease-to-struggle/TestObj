<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<style type="text/css">
		.test{
			color:red
		};
	</style>
	<script type="text/javascript" src="./tools/jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
		$(function(){
			var dom = $('#test1');
			var dom1 = $('p')
			console.log(dom.prevAll('p:first').text());
			console.log(dom.prevUntil('p').text());
			console.log(dom);
			console.log(dom[0].tagName);
			console.log(dom.get(0).tagName);//获取的名字都是大写
			dom1.addClass('test')
		});
	</script>
</head>
<body>
	<div>
		<p>aaa</p>
		<p>abc</p>
		<p>123</p>
		<div>xxx</div>
		<span>yyy</span>
		<div id="test1">
			
		</div>
	</div>
</body>
</html>