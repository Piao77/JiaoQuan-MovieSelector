<meta charset="utf-8">

<!-- 连接数据库部分 -->
<?php
$dbHost = "localhost";//服务器名
$dbUser = "root";
$dbPass = "123";
$dbName = "test";//数据库名
$link = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);//创建连接
if ($link->connect_error) {//检测连接
    die("连接失败: " . $link->connect_error);
} 
?>

<!-- 检测信息部分 -->
<?php
	session_start();
	if(isset($_POST['userSubmit'])){		//判断是否点击提交
		$username = $_POST['userName'];
		$userpass = $_POST['userPass'];
		if(isset($username) && isset($userpass)){
			$sql = "SELECT passwd FROM users WHERE name='".$username."'";
			if(!mysqli_query($link,$sql)){
				echo "SQL语句有误";
			}else{
				$pass1 = mysqli_fetch_row(mysqli_query($link,$sql))[0];
				$pass2 = $userpass;
				if($pass1 === $pass2){
					echo "登录成功<br>";
					$_SESSION['name'] = $username;	
					echo "返回<a href='5.3.1.index2.php'>个人中心</a>";			//why?
				}
				else{
					echo "用户名或密码错误，请<a href='login.php'>重新登录</a>";
				}
			}
		}else{
			echo "用户名或密码为空，请<a href='login.php'>重新输入</a>";
		}
	}
	mysqli_close($link);
?>
