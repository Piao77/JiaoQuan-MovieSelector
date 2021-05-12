
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
	error_reporting(0);
    $search = $_POST['search'];//接收搜索框中的内容为
    mysqli_query($link, "set names 'UTF-8'");//查询语句设置字符集
    $str ="select * from find where movieName like '%".$search."%'";  //查询语句
    $result = mysqli_query($link,$str);
	// $row=mysql_fetch_array($result);
	// while($row = )
    $arr=array();//定义数组arr
    while($row = mysqli_fetch_array($result))
    {
        $arr[] = $row;
    }
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>胶圈 - 搜索</title>
		
		<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" 
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
		<!-- 这是我用来覆盖的css样式 -->
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
		<link rel="stylesheet" type="text/css" href="css/3.movieContent.css"/>
		<link rel="stylesheet" type="text/css" href="css/4.find.css">
		<!-- jq的引入 *这里引用错了就会导致下拉菜单失败-->
		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
		crossorigin="anonymous"></script>
			
		<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" 
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
</head>
<body>
	
<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		     
			  <!-- 网站图标 -->
			  <span class="glyphicon glyphicon-film">
			  </span>
		      <a class="navbar-brand" href="#">胶圈 - 搜索</a>
		    </div>
		
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="1.main.php">首页<!-- <span class="sr-only">(current)</span> --></a></li>

				
				
				<li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">我的
				  <span class="caret"></span>
				  </a>
		          <ul class="dropdown-menu">
		            <li><a href="http://localhost/index.php">我的主页</a></li>
					<li><a href="http://localhost/register.php">注册账号</a></li>		         
				  </ul>
		        </li>
		      </ul>
			  
				<!-- 搜索框 -->
				<form class="navbar-form navbar-right" action="" method="post">
		        <div class="form-group">
		          <input type="text" class="form-control" name="search" placeholder="请输入电影名">
		        </div>
				<input type="submit" name="submit" value="搜索">
				
				<!-- 尝试 -->

				

				
				
				
				
				
				
				</form>
				
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div>
		</nav>
		


<?php
        foreach ($arr as $key=>$value)
             {
        ?>
        <div>						
			 <div class="thumbnail">
				<div class="caption">
					<img src="<?php echo $value['moviePhoto'];?>" alt="..." id="firstimg">
					<a href="<?php echo $value['movieAd'];?>" class="aName">           
						<?php echo $value['movieName'];?>
					</a>
					<p>
						<a href="<?php echo $value['movieAd'];?>" class="aName">
							<?php echo $value['actor1'];?><br>
							<?php echo $value['actor2'];?>
						</a>
					</p>
				</div>
			</div>
			<?php }?>	
		</div>
		
</body>
</html>