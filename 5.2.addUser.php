<meta charset ="utf-8">

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


<?php
	// var_dump($_POST); 					//用于检测是否执行成功
	if (isset($_POST['userSubmit'])){		//判断是否点击提交
		$userName = $_POST['userName'];
		$userPass1 = $_POST['userPass1'];   //将提交的信息赋值给变量
		$userPass2 = $_POST['userPass2'];
		$userSex = $_POST['userSex'];
		$userName2 = $_POST['userName2'];
		if(isset($userName)){				//判断用户名不为空
			if(isset($userPass1)
				&& isset($userPass2)
				&& $userPass1 === $userPass2){		//判断两次都输入了密码，且相同
					$sql = "INSERT INTO users(name,passwd,sex,name2) VALUES( '".$userName."','".$userPass1."','".$userSex."','".$userName2."' )";//将信息用INSERT命令存入数据库中的表users,name行和passwd行插入的值分别为后侧两值
					// echo $sql;					//用于检测是否可执行
					if(mysqli_query($link,$sql)){	//检测是否插入成功
						echo "注册成功！</br><a href = '5.3.1.index2.php' target = '_blank'>返回个人中心</a>";
						setcookie("name",$userName2);			
					}else{				
						echo "数据库出错了!注册失败！";
					}					
				}
				else{
					echo "密码输入有误!<br />";
					echo  "<a href='register.php'>请重新注册</a>";				
				}	
		}else{
			echo "用户名不能为空<br />";
			echo  "<a href='register.php'>请重新注册</a>";	
		}
	}else{
		echo "请您正确提交<br />";
		header("Location:register.php");	
	}

?>
<?php
mysqli_close($link);//关闭数据库连接
?>
