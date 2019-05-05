<?php
// error_log ( string $错误消息 [, int $错误消息类型 = 0 [, string $存储目标]] )
//错误类型  0：发送至php.ini 中指定的error_log 位置; 1：发送到指定的邮件位置; 3：记录在指定的文件位置
//错误类型默认为0;
//
//无法连接到数据库服务器，直接记录到php.ini 中的error_log指定位置
error_log("无法连接到数据库服务器服务器");

//可以发送邮件，但是php.ini必须配置过邮件系统
error_log('可以用邮件报告错误，让运维人员半夜起床干活',1 ,'liwenkai@phpxy.com');

//记录在指定的位置
error_log("我是一个错误哟", 3, "d:/test/my-errors.log");