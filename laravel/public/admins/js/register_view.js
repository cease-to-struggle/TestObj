// JavaScript Document

function verificationYonghuming(){
	
	var txt=document.getElementById("userLoginName").value;
	
	if(txt=="" || txt==null){
		document.getElementById("register_view_layer_1_2").innerHTML="用户名不可为空!";
		}
		else{
			document.getElementById("register_view_layer_1_2").innerHTML="";
		return true;	
	     }
}
function verificationMima(){
	var txt=document.getElementById("userLoginPassword").value;
	
	if(txt=="" || txt==null){
		document.getElementById("register_view_layer_2_2").innerHTML="密码不可为空!";
		}
		else{
			document.getElementById("register_view_layer_2_2").innerHTML="";
		return true;	
	     }
	
	}
	


function verificationMimaQueren(){
	var txt=document.getElementById("user_loginPassword_1").value;
	var tx=document.getElementById("userLoginPassword").value;
	if(txt=="" || txt==null || txt !== tx){
		document.getElementById("register_view_layer_3_2").innerHTML="密码不一致!";
		}
		else{
			document.getElementById("register_view_layer_3_2").innerHTML="";
		return true;	
	     }
	
}
 	function  verificationN(){
		 var txt=document.getElementById("userAge").value;
	 if(txt=="" || txt==null){
		 document.getElementById("register_view_layer_5_2").innerHTML="年龄不能为空！"; 
	 }
	 else if(!isNaN(txt)){
		  
		 document.getElementById("register_view_layer_5_2").innerHTML="";   
		 return true;
		 }
		 else{
		 document.getElementById("register_view_layer_5_2").innerHTML="年龄必须为数字!";   
			 return false;
			 }
		
		}
function verificationTel(){
	
	 var txt=document.getElementById("userTel").value;
	 if(txt=="" || txt==null){
		 document.getElementById("register_view_layer_6_2").innerHTML="电话不能为空！"; 
	 }
	 
	 else if(!isNaN(txt)){
		 document.getElementById("register_view_layer_6_2").innerHTML="";   
		 return true;
		 }
		 else{
		 document.getElementById("register_view_layer_6_2").innerHTML="联系方式必须为数字!";   
			 return false;
			 }
}

function verificationAddress()
{

}
function verificationYouxiang(){
	
	var txt=document.getElementById("userEmail").value;
	if(!/(\S)+[@]{1}(\S)+[.]{1}(\w)+/.test(txt)){
		document.getElementById("register_view_layer_12_2").innerHTML="请输入有效的邮箱名！";
		return false;
		}
		else{
			
			document.getElementById("register_view_layer_12_2").innerHTML="";
			return true;
			}
                   
}
function verificationQuestion(){
	document.getElementsByName()
}

function verificationAnswer(){

}


function getVimg()
{
  document.getElementById( "vimg" ).src = "/captcha"+'/'+Math.random();
}

function sumbit(){
      
		  document.getElementById("form1").submit();
		  
	

	}
	
function yonghumingOnFocus(){
		
		document.getElementById("register_view_layer_1_3").style.display="block";
		}
function mimaOnFocus(){
		document.getElementById("register_view_layer_2_3").style.display="block";
	}
