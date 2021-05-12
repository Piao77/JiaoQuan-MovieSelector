<html>
<head>
	<meta charset="utf-8">
	<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" 
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- 这是我用来覆盖的css样式 -->
	<link rel="stylesheet" type="text/css" href="css/main.css"/>
	<link rel="stylesheet" type="text/css" href="css/messages.css"/>
	<!-- jq的引入 *这里引用错了就会导致下拉菜单失败-->
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
	crossorigin="anonymous"></script>
		
	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" 
	integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	
	<!-- 导航栏名字 导航名-样式名字:inverse反显 default默认 -->
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	     
		  <!-- 网站图标 -->
		  <span class="glyphicon glyphicon-film">
		  </span>
	      <a class="navbar-brand" href="#">胶圈 - 电影查询系统</a>
	    </div>
	
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="1.main.html">首页<!-- <span class="sr-only">(current)</span> --></a></li>
	
			<li><a href="#hotMovie">热映</a></li>
			<li><a href="#news">影讯</a></li>
			<li><a href="#rand">排行榜</a></li>
			<li><a href="">影评</a></li>
			<li><a href="">留言板</a></li>
			<li><a href="2.movieClass.html">影片分类</a></li>
			
			
			<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">我的
			  <span class="caret"></span>
			  </a>
	          <ul class="dropdown-menu">
				<li><a href="http://localhost/5.0.loginIndex.php">注册登录</a></li>		       
				<li><a href="http://localhost/5.3.1.index2.php">个人主页</a></li>
			  </ul>
	        </li>
	      </ul>
		  
			<!-- 搜索框 -->
			<form class="navbar-form navbar-right">
				<a href="http://localhost/4.find.php"><input type="button" class="btn btn-default" value="搜索" ></input></a>
				
			</form>
			
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div>
	</nav>
	
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
	if(isset($_GET['msId'])){
		$id=$_GET['msId'];
		$sql = "select * from messages where msId=".$id;
		//echo $sql;
		if($results = mysqli_query($link,$sql)){
			$result = mysqli_fetch_assoc($results);
			echo '<div class="container">
					<div class="row">
						<div class="col-sm-12">';
						
			echo $result['uName'].":".$result['msTitle']."<hr />"; 			//是这里设置样式！
			echo $result['msContent'];
			
			echo '</div>
				</div>
			</div>';
		}else{
			echo mysqli_error($link);
		}
	}else{
		echo "id Error";
	}
	mysqli_close($link);
?>

</body>
</html>
