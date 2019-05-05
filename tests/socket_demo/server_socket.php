<?php
//创建服务端的socket的套接流,net协议为IPv4,protocol协议为TCP
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

/*绑定接收的套接流主句，与客户端相对应*/
if(socket_bind($socket,'127.0.0.1','9999')==false)
{
	echo 'server bind fail:'.socket_strerror(socket_last_error());
}

//监听套接流
if (socket_listen($socket,4) == false) {
	# code...
	echo 'server listen fail:'.socket_strerror(socket_last_error());
}

//服务器无限获取客户端传过来的数据
do{
	/*接收客户端歘过来的信息*/
	$acc = socket_accept($socket);

	if ($acc !== false) {
		# code...
		/*读取客户端传过来的资源，并转化为字符串*/
		/*socket_read的作用就是读出socket_accept()的资源并把它转化为字符串*/
		$str = socket_read($acc, 1024);
		$return =  'server receives is:'.$str.PHP_EOL; //PHP_EOL为php的换行预定义常量
		echo $return;
		if ($str != false) {
			# code...
			/*向socket_accept的套接流写入信息，也就是回馈信息给socket_bind()所绑定的主机客户端*/
			/*socket_write的作用是向socket_create的套接流写入信息，或者向socket_accept的套接流写入信息*/
			socket_write($acc, $return,strlen($return));
		}else{

			echo 'socket_read is fail';

		}
	}
	socket_close($acc);

}while(true);

socket_close($socket);
