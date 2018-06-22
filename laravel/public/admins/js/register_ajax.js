// JavaScript Document
var ajax = function(option)
{

			

    var request;
	var txt;
    var createRequest = function()
    {
		
        //var request;
        if (window.XMLHttpRequest)
        {
            request = new XMLHttpRequest();
        }
        else
        {
            try
            {
                request = new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch (e)
            {
                request = new ActiveXObject("Msxml2.XMLHTTP");
            }
        }
        return request;
    }
	
	
	
    var sendRequest = function()
    {
        request = createRequest();
		//确认XMLHTtpRequest对象创建成功      
		if (!request) {      
			alert("XMLHttpRequest对象创建失败!!");      
			return;      
		}  
     
//        request.open("post", option.url, true);
//        request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
//        request.onreadystatechange = ResponseRequest;
//        request.send(option.param); 

		request.onreadystatechange = ResponseRequest;
	
        request.open("post","verificationYonghuming.asp?userName="+option, true);
		
        request.send(null); 
		
    }

    var ResponseRequest = function()
    {

        if (request.readyState == 4)
        {  
		
            if (request.status == 200)
            { 
				txt=request.responseText;
			
			   if(option =="" || option == null){
				   alert("不能为空,请重新输入您要注册的账号！");
			      }
			   else
			   {
				  if(txt=="0"){
					  alert("有效用户名");
				  }else{
					   alert("用户名已存在！");
						
					   }
					
			}
				//alert(txt);
            }
			else
			{	
				alert("出错了！request.status！=200");
			}
          
           
        }
		else
		{
			//alert("出错了！request.status！=4");
			
		}
    }
   
	sendRequest();
	
	
	
}



