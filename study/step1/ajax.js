
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

function createAjax()
{
	if(XMLHttpRequest)
	{
		return new XMLHttpRequeset();
	}else{
		return  new ActiveXObject('Microsoft.XMLHTTP');
	}
}