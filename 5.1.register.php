<html>
	<head>
		<meta charset = "utf-8">
		<title>注册 - 胶圈</title>
		<link rel="stylesheet" type="text/css" href="css/register.css"/>
	</head>
	<body>
		<p>注册 - 胶圈</p>
		<!-- 将表单信息提交给的文件的路径 -->
		<!-- 表单中的数据以post方法传递 -->
		<!-- _blank：打开新的页面 -->
		<form
			action = "5.2.addUser.php"  	
			method = "post"        		
			target = "_blank"   		
		>
			用户名：<input type = "text" name = "userName" placeholder="请输入英文ID"><br />
			&nbsp &nbsp密码：<input type = "password" name = "userPass1" placeholder="请输入数字密码"><br />
			&nbsp &nbsp验证：<input type = "password" name = "userPass2" placeholder="两次密码须一致"><br />
			&nbsp &nbsp性别：<input type = "text" name = "userSex" placeholder="请输入您的性别"><br />
			&nbsp &nbsp昵称：<input type = "text" name = "userName2" placeholder="请输入您的昵称"><br />
			&nbsp &nbsp &nbsp &nbsp <input type = "submit" name = "userSubmit" value = "注册" class="bottonLogin">	
		</form>
		<div>
			<p id="bottomText">欢迎注册胶圈账号！在这里你可以检索分享电影……</p>
		</div>
	</body>
</html>
