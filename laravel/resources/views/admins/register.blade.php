<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>用户注册页面</title>
<link href="admins/css/register_css.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="admins/js/register_view.js" ></script>
<script language="javascript" src="admins/js/register_ajax.js" ></script>

  </head>
<body>
<div id="main_layer" align="center">
 <form method="post" action="{{route('regForm')}}" id="form1">
     <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
     <!-- 头部图片开始--> 
   <div id="register_view_layer_17" ><img src="admins/images/logo_rg.gif" /></div>
     <!-- 头部图片结束-->
   <!--注册层开始-->
   <div id="register_view_layer">
        <!--“创建您的账号”开始 -->
          <div id="register_view_layer_18"><br /><br /><img src="admins/images/create_account.jpg"  /> </div>
        <!--“创建您的账号”结束 -->
      <!-- 账号 开始-->
       <div id="register_view_layer_1" class="register_view_layer_1">
              <div id="register_view_layer_1_1" class="register_view_layer_1_left">账号:<input type="text" id="userLoginName" name="user_loginName" onBlur="verificationYonghuming()"  /> <input type="button" value="检测" class="Ibutton"  onclick="ajax(document.getElementById('userLoginName').value)" /></div>
        <div id="register_view_layer_1_2" class="verification" align="left">*</div>
        
       </div>
       <!-- 账号 结束-->
       <!-- 密码 开始-->
       <div id="register_view_layer_2"  class="register_view_layer_1">
            <div id="register_view_layer_2_1" class="register_view_layer_1_left" >密码:<input type="password" id="userLoginPassword" name="user_loginPassword" onBlur="verificationMima()"  /></div>
        <div id="register_view_layer_2_2" class="verification" align="left" >*</div>
       </div>
       <!-- 密码 结束-->
       <!-- 确认 开始-->
       <div id="register_view_layer_3" class="register_view_layer_1">
            <div id="register_view_layer_3_1"  class="register_view_layer_1_left"> 确认:<input type="password" id="user_loginPassword_1" name="user_loginPassword_1" onBlur="verificationMimaQueren()"  /></div>
        <div id="register_view_layer_3_2" class="verification" align="left"></div>
       </div>
       <!-- 确认 结束-->
       <!-- "个人信息设置" 开始-->
       <div id="register_view_layer_19"><img src="admins/images/personal_infomation.jpg" /></div>
       <!-- "个人信息设置" 结束-->
        <!-- 真实姓名 开始-->
       <div id="register_view_layer_10" >
              <div id="register_view_layer_10-1" class="register_view_layer_1_left">真实姓名:<input type="text" name="user_name"  /></div>
          <div id="register_view_layer_10_2" class="verification" align="left"></div>
         </div>
       <!--真实姓名 结束 -->
       <!--性别 开始 -->
       <div id="register_view_layer_4" class="register_view_layer_1">
        性别:<input type="radio" name="user_sex" value="1"   checked="checked" />男&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="user_sex" value="0" />女      
       </div>
       <!--性别 结束 -->
       <!--年龄 开始 -->
       <div id="register_view_layer_5" class="register_view_layer_1">
           <div id="register_view_layer_5_1" class="register_view_layer_1_left">年龄:<input type="text" name="user_age" id="userAge" onBlur="verificationN()"  /></div>
         <div id="register_view_layer_5_2" class="verification" align="left">*</div>
       </div>
       <!--年龄 结束 -->
        <!--邮编 开始 -->
       <div id="register_view_layer_8" class="register_view_layer_1">
            <div id="register_view_layer_8_1" class="register_view_layer_1_left">生日:<input type="text" name="birthday" /></div>
        <div id="register_view_layer_8_2" class="verification" align="left"></div>
       </div>
       <!--邮编 结束 -->
       <!--Tel 开始 -->
       <div id="register_view_layer_6" class="register_view_layer_1">
           <div id="register_view_layer_6_1" class="register_view_layer_1_left">&nbsp;TEL:<input type="text" name="user_tel" id="userTel" onBlur="verificationTel()" /></div>
             <div id="register_view_layer_6_2" class="verification" align="left">*</div>
       </div>
       <!--Tel 结束 -->
       <!--住址  开始-->
       <div id="register_view_layer_7" class="register_view_layer_1">
           <div id="register_view_layer_7_1" class="register_view_layer_1_left">住址:<input class="spe" type="text" name="user_address" placeholder="填写格式：省份-城市-区域" /></div>
         <div id="register_view_layer_7_2" class="verification" align="left"></div>
       </div>
       <!--住址 结束 -->

       <!-- 邮箱 开始-->
       <div id="register_view_layer_12" class="register_view_layer_1">
            <div id="register_view_layer_12_1" class="register_view_layer_1_left">  邮箱:<input type="text" name="user_eMail" id="userEmail"  onblur="verificationYouxiang()" /></div>
          <div id="register_view_layer_12_2" class="verification" align="left">*</div>
         </div>
       <!--邮箱 结束 -->
       <!--密保问题开始 -->
       <div id="register_view_layer_13" class="register_view_layer_1">
           <div id="register_view_layer_13_1" class="register_view_layer_1_left">密保问题:<select  name="question[]"   onBlur="verificationQuestion()"><option value="" selected>--请选择问题--</option>
                   @foreach($questions as $question)
                       <option value="{{$question->id}}" >{{$question->question}}</option>
                   @endforeach
               </select></div>
           <div id="register_view_layer_13_3" class="register_view_layer_1_left">答&nbsp;&nbsp;&nbsp;&nbsp;案:<input type="text" name="answer[]"   onBlur="verificationAnswer()"/></div>
           <div id="register_view_layer_13_2" class="verification" align="left"></div>
       </div>
       <div id="register_view_layer_13" class="register_view_layer_1">
           <div id="register_view_layer_11_1" class="register_view_layer_1_left">密保问题:<select  name="question[]"   onBlur="verificationQuestion()"><option value="" selected>--请选择问题--</option>    @foreach($questions as $question)
                       <option value="{{$question->id}}" >{{$question->question}}</option>
                   @endforeach</select></div>
           <div id="register_view_layer_11_3" class="register_view_layer_1_left">答&nbsp;&nbsp;&nbsp;&nbsp;案:<input type="text" name="answer[]"   onBlur="verificationAnswer()"/></div>
           <div id="register_view_layer_11_2" class="verification" align="left"></div>
       </div>
       <!--密保问题结束 -->

<!--        "注册验证" 开始
<div id="register_view_layer_19"><img src="admins/images/validate.jpg" /></div>
"注册验证" 结束 -->
  <!--      验证码 开始
         <div id="register_view_layer_15" >
         <div id="register_view_layer_15_2"><img src="{{captcha_src()}}" id="vimg" width="80px" height="15px" onClick="this.src='/captcha'+'/'+Math.random()" /><a href="javascript:getVimg()">看不清换一张！</a></div>
         <div id="register_view_layer_15_1">输入你看到的字符:<input type="text" id="code" name="code" size="20"  /><span style="color:#FF0000"> *</span></div>      
         </div>
         验证码 结束  
          -->       <!--”创建您的账号“ 开始 -->     
       <div id="register_view_layer_20"><img src="admins/images/create_account.jpg" /></div>
       <!--”创建您的账号“ 结束 -->
       <!-- 创建账号 开始-->  
       <div id="register_view_layer_16">
          <input type="button"  onclick="sumbit()" value="注册账号" class="layer_16_inputButton"  />
       </div>
         <!-- 创建账号 结束-->  
  </div>
  </form>
</div>
</body>
</html>
