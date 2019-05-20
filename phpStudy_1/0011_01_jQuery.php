.prevAll()  //取得前面所有具有指定特征的同级元素  取值顺序从选定元素开始
.prevUntil(selector)  //向前到指定的元素为止
.nextAll()
.nextUntil(selector)
.parentsUntil()

.end()  //恢复节点到操作前的状态 如果没有改变则不做任何操作

.slice(start end)  start 为负值则从尾部开始取

以选定的元素为中心，往内查找可以通过find、children方法。
如果往上查找，也就是查找当前元素的父辈祖辈元素，jQuery提供了closest()方法，这个方法类似parents但是又有一些细微的区别，属于使用频率很高的方法

.parents()和.closest()是有点相似的，都是往上遍历祖辈元素，但是两者还是有区别的，否则就没有存在的意义了

	起始位置不同：.closest开始于当前元素 .parents开始于父元素
	遍历的目标不同：.closest要找到指定的目标，.parents遍历到文档根元素，closest向上查找，直到找到一个匹配的就停止查找，parents一直查找到根元素，并将匹配的元素加入集合
	结果不同：.closest返回的是包含零个或一个元素的jquery对象，parents返回的是包含零个或一个或多个元素的jquery对象

.data(key[,value])  获取或设置元素中data-*属性值  数值存储在JQuery 缓存中
	当使用.data()获取值时，jQuery会首先尝试将获取的字符串值转化成JS类型，包括布尔值，null，数字，对象，数组： 
	若值是”true|false”，则返回相应的布尔值； 
	若值是”null”，则返回null； 
	若值是纯数字构成的字符串（+data + ”” === data），则返回相应的数字（+data）； 
	若值是由(?:\{[\s\S]*\}|\[[\s\S]*\])$，比如”{key:value}“或[1,2,3]，则尝试使用jQuery.parseJSON解析之；
	 
	否则返回字符串值 如果就是想获取字符串值而不想获得自动转换的值，可以使用.attr(“data-”+key)来获取相应的值：

	需要注意的是，data()的值进行修改并不会影响到DOM元素上的data-*属性的改变。data()的本质其实是将一个 “cache” 附加到了对象上，并使用了一个特殊的属性名称。
	所以上述代码中，虽然对div进行了data()赋值操作，但HTML代码中div的data-appid的值仍然为123，因为data()只是修改了缓存的那个值，此时进行$('#myDiv').data("appid")的操作，输出的结果为666.
