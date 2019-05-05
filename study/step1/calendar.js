window.onload = function()
{

	var oriCol=null;
	function  overTr(obj){
		oriCol=obj.bgColor;obj.bgColor='#0f0';
	}
	function outTr(obj){
		obj.bgColor=oriCol;
	}
	function overTh(obj) 
	{    
		oriCol=obj.bgColor;    
		obj.bgColor='red';
	}
	function outTh(obj){    
		obj.bgColor=oriCol;
	}

	/**
	 * [ajax description]
	 * @param  string  method   请求方法 get || post
	 * @param  string   url     请求地址 
	 * @param  string   data    请求数据 如：name=Tom&age=20
	 * @param  callable callback 匿名函数处理ajax响应的逻辑
	 * @param  string   dataType 指定响应数据类型
	 */
	function ajax(method,url,data,callback,dataType)
	{
		//1.创建ajax对象
		var ajax = createAjax();

		//依据请求方法处理url  请求头等信息
		if(method == 'get')
		{
			url = url+'?'+data;
			data = null;
		}else{
			//若为post请求需要 设置请求的内容格式
			ajax.setRequestHeader("content-type","application/x-www-form-urlencoded");
		}

		//禁用浏览器缓存
		ajax.setRequestHeader("If-Modified-since",0);

		//2.初始化请求
		ajax.open(method,url);

		//3.发起请求
		ajax.send(data);

		//4.给AJAX设置事件(这里最多感知4[1-4]个状态)
		ajax.onreadystatechange = function(){
			//5.获取响应
			if(ajax.readyState == 4 && ajax.status == 200){

				//依据数据格式调用不同的回调函数
				switch(dataType){
					case 'xml':
						callback(ajax.responseXML);
						break;
					case 'json':
						callback(JSON.parse(ajax.responseText));
						break;
					default:
						callback(ajax.responseText);

				}
			}
		}
	}


	/**
	 * 创建一个新的ajax 对象
	 * 
	 * @return Object ajax对象实例
	 */
	function createAjax()
	{
		//考虑浏览器兼容问题,依据判定条件实例化
		if(XMLHttpRequest)
		{
			//老版本IE浏览器
			return new XMLHttpRequeset();

		}else{
			//其它浏览器
			return  new ActiveXObject('Microsoft.XMLHTTP');
		}
	}
}