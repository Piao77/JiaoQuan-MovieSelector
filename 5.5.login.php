<html>
	<head>
		<meta charset = "utf-8">
		<title>登录 - 胶圈</title>
		<link rel="stylesheet" type="text/css" href="css/login.css"/>
	</head>
	<body>
		<p>登录 - 胶圈</p>
		<form
			action = "5.4.judgeUser.php"
			method = "post"
			target = "_blank"
		>
			用户名：<input type = "text" name = "userName" placeholder="全英文,长度1-10字符"><br />
			&nbsp &nbsp密码：<input type = "password" name = "userPass" placeholder="全数字,长度1-10字符"><br />
			&nbsp &nbsp &nbsp &nbsp <input type = "submit" name = "userSubmit" value = "    登录    " class="bottonLogin">	
		</form>
		<div>
			<p id="bottomText">登录后您就可以收藏您喜爱的电影，并且发表影评和留言了！</p>
		</div>
	</body>
</html>
