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
	if (isset($_POST['userSubmit']))
	{		//判断是否点击提交
		$user_date = date("Y-m-d H-i-s");
		$user_favorite =$_POST['user_favorite'];
		$user_title = $_POST['user_title'];
		$user_name = $_POST['user_name'];
		if(isset($user_favorite))
		{				//判断用户名不为
					$sql = "INSERT INTO my_favorite(user_title,user_name,user_favorite,user_date) VALUES('".$user_title."','".$user_name."','".$user_favorite."','".$user_date."')";//将信息用INSERT命令存入数据库中的表users,name行和passwd行插入的值分别为后侧两值
					// echo $sql;					//用于检测是否可执行
					if(mysqli_query($link,$sql))
					{	//检测是否插入成功
						echo "收藏成功";		
					}
					else{				
						echo "数据库出错了!收藏失败！";
					}					
		}
		else
		{
					echo "收藏有误!<br />";
					echo  "<a href='register.php'>请重新收藏</a>";				
		}	
	}
	else
	{
		echo "请您正确收藏<br />";
		header("Location:register.php");	
	}

?>
<?php
mysqli_close($link);//关闭数据库连接
?>
