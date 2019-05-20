页面载入事件：完成html元素，外部资源文件加载完成
	window.onload
页面就绪事件： 完成html元素触发
	$(document).ready(function(){

	});
	$().ready(function(){

	});
	$(function(){

	});
基本选择器：
ID：$('#id') || 类选择$('.class')  || 标签$('div')
分组选择：
$('selector1,selector2,selector3')  选择器间用逗号隔开
层级选择：
	后代
	$('selector1 selector2') 选择器之间使用空格隔开
	子元素
	$('selector1>selector2')
	相邻选择器
	$('selector1+selector2')
	弟选择器
	$('selector1~selector2')
简单选择器
    :first  匹配第一个元素（$("ul li:first") 不管多少个ul 只取第一个ul的第一个li元素）
    :last   匹配最后一个元素
    :even   匹配偶数元素 索引从0开始
    :odd    匹配奇数元素
    :eq()   匹配指定索引的元素
    :gt()   匹配索引大于某值的元素
    :lt()   匹配索引小于某值得元素
    :not()  淘汰某个元素
    :header  所有的标题元素
内容选择器
	:contains('text_content')  包含特定内容的元素
	:has()   包含某个特定元素的元素
	:empty   匹配内容为空的元素
	:parent  匹配非空元素
可见性选择器
	:hidden
	:visible
子元素选择器
	:first-child   ($("ul li:first") 如果有多个ul  则取出所有ul下的第一个li)
	:last-child
	:nth-child(even)
	:nth-child(odd)
	:only-child
表单元素选择器
	:input   匹配所有表单元素(textarea 和select)
	:button
	:checkbox
	:file
	:image
	:password
	:reset
	:radio
	:submit
	:text
表单属性选择器
	:disabled
	:enabled
	:selected
	:checked
属性选择器
	[attr]    匹配含有某个属性的元素  $('input[name]')
	[attr=value]
	[attr != value]
	[attr ^= value]
	[attr $= value]
	[attr *= value]
	[attr][attr]   同时包含多个属性的选择器表达式
查找节点  对jQuery对象进一步筛选匹配
	A.eq(index)
	A.not()
	A.next()
	A.prev()
	A.siblings() 兄弟   $('A~B')弟选择器
	A.parent()
	A.parents()
	A.children()
	A.find()  //匹配A的某个后代元素


jQuery 对象  可以通过索引获取DOM对象
DOM对象不能直接使用jQuery 方法  可以使用万能方法$(DOM对象) 转换成jQuery 对象

属性操作
    标签属性 
    .attr(name)  获取标签属性名为name的值
    .attr(name,value)  设置name属性的值为value
    .attr({
    	name1:value1,
    	name2：value2
    })  批量设置属性值
	
	普通元素内容操作
	.text()       读取元素内容
	.text(文本)   写入元素内容
	普通元素html内容
	.html()       读取html元素
	.html(文本)   写入html元素
	表单元素的值
	.val()   读取表单元素值
	.val(文本)  写入填写value信息

坐标属性操作
	.offset();  获取元素坐标值
	.offset({
		left：value1,
		top:value2
	})   设置元素坐标值


尺寸信息操作
	.width()
	.width(value)
	.height()
	.height(value)

样式属性操作
	.css(name)
	.css(name,value)  value为"" 表示移除样式
	.css({
		name:value
	})
	.removeAttr('style')

类属性操作
	.removeClass(类名)
	.hasClass()
	.addClass()  //添加外部样式或者内部样式  优先级小于.css()的内联(行内)样式
	.toggleClass() 切换类样式

内部插入节点
	A.append(B)  <=> B.appendTo(A)   把B追加到A内部
	A.prepend(B) <=> B.prependTo(A)  把B插入到A内部作为第一个元素

外部插入节点
	A.before(B) <=> B.insertBefore(A)  把B插入到A元素之前
	A.after(B) <=> B.insertAfter(A)   把B插入到A元素之后

删除元素
	A.remove()  //包括自身的彻底移除，包括绑定事件和数据
	A.empty()  //只是清空元素内部,自身保留,绑定事件保留，可能引起内存问题，谨慎使用
	A.detach()  //移除对象 只是显示效果没了，但内存中仍然存在，可用append()加回

克隆节点
	A.clone()  返回当前对象的副本   默认不复制事件
	A.clone(true)   复制节点且复制事件  js原生绑定事件不会被复制

替换节点
	A.replaceAll(B)
	B.replaceWith(B)

包裹节点
	A.wrap(B)  用B依次包裹A节点(多次)
	A.wrapAll(B)   用B包裹多有的A节点(一次)
	A.unwrap(B)    拆包  移除包裹着A的父元素B
	A.wrapInner(B)   用B包裹元素A的内容

遍历节点
	A.each(functon(i,dom){
		直接操作dom  或者  $(dom) 转换成jQuery对象
	})

自定义动画
	A.animate({对象}[,speed][,callback])

隐藏和显示
	A.hidden([,speed][,callback])
	A.show([,speed][,callback])	
	A.toggle([,speed][,callback])

下拉和上划
	A.slideDown([,speed][,callback])
	A.slideUp([,speed][,callback])
	A.slideToggle([,speed][,callback])

淡入和淡出
	A.fadeIn([,speed][,callback])
	A.fadeOut([,speed][,callback])
	A.fadeTo(speed,opacity)  opacity取值范围0-1
	若设置过透明度  则淡入只能达到设定的透明度

自定义添加jquery函数
	jQuery.fn.extend({
		funcName:function(){

		}
	})

ajax请求
	$.ajax({
		
	});参数: async cache content-type complete data dataType success type url 等21个各种参数  方法多用于进行请求定制
	$.get(url,data,callback,dataType);
	$.post(url,data,callback,dataType);

处理跨域请求
	php 代理跨域
	jsonp 利用同源策略漏洞  img script src属性不受同源限制
	cors设置响应头

	jsonp接收的响应是普通文本  需要进行一次转换处理
	xml格式字符串  可直接使用万能方法$()转换成jQuery对象  进行操作  $(xml).find().html()

load载入方法
	.load(请求地址)  发起一个异步请求，并把响应的地址填充到选中元素的内容中

jQuery UI库
	.draggable()  .sortable()
	



