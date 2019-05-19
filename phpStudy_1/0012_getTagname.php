<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<script type="text/javascript" src="./tools/jquery-1.8.3.min.js"></script>
	<script type="text/javascript">
		$(function(){
			var dom = $('#test1');
			console.log(dom.prev('p').text());
			console.log(dom);
			console.log(dom[0].tagName);
			console.log(dom.get(0).tagName);//获取的名字都是大写
		});
	</script>
</head>
<body>
	<div>
		<p>abc</p>
		<div id="test1">
			
		</div>
	</div>
</body>
</html>