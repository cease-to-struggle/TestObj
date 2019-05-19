<?php 
//var_dump(isset($_FILES));
if ($_FILES) {
	# code...
	$dest = './abc.txt';
	$tmp = $_FILES['myFile']['tmp_name'];
	move_uploaded_file($tmp,$dest);
}else{
	echo '
<form action="#" method="post" enctype="multipart/form-data">
	<input type="file" name="myFile" id="">
	<input type="submit" value="提交">
</form>';
}

