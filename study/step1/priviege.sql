//添加权限
//grant 权限 on 库.表 to '用户'@'主机' identified by '密码';
grant select,insert on test.* to 'user'@'%' identified by '4311';

# 删除权限
# revoke 权限 on 库.表 from '用户'@'主机';
revoke select on test.* from 'user'@'%';