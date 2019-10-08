<?php 
is_file($filename);
file_exists($filename);//判断文件是否存在
filemtime($filename);//判断文件的最终修改时间
filesize($filename);//判断文件大小
basename($path);//用于获取path字符串的文件名
dirname();
realpath($filename);//获取绝对路径  不存在返回false
fopen($filename,$code);//打开文件,返回资源
fclose($handle);//关闭文件
fwrite($handle,$data);//写入文件 需要打开文件生成资源$handle
file_put_contents($filename,$data);//写入数据到文件  不需要打开文件  如果文件不存在则创建文件  如果文件存在则覆盖
fgetc($handle);//读取数据  每次读取1个字节
fgets($handle,$len);//每次读取$len-1个字节，省略表示是1024，如果遇到换行回车，则结束读取
//fgetstring($handle,$len);//每次读取$len-1个字节，遇到换行回车，不结束读取
file($filename);//将文件每一行，转换为数组的一个元素
readfile($filename);//读取文件内容  直接放入缓存中
file_get_contents($filename);//用于读取文件的全部内容，并返回
copy($filename,$dest);//拷贝文件，同时可以进行改名
unlink($filename);//删除文件
fseek($handle,$n,$whence);//从$whence处开始移动指针$n个位置
ftell($handle);//获取当前指针
flock($handle,$type);//文件上锁/解锁
mkdir($path,$mode,$recursive);
opendir($folder);//打开文件夹
closedir($handle);//关闭文件夹
rename();
rmdir($folder);//删除文件夹
readdir($folder);//读取文件夹内容，每次只读一个条目，不可读取子文件夹的内容
scandir($folder);//一次性读取当前文件内容，并以数组形式返回
is_dir();


