<html>
<head>
<meta charset="utf-8">
<title>胶圈 - 个人中心</title>
<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" 
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- 这是我用来覆盖的css样式 -->
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
		<link rel="stylesheet" type="text/css" href="css/index2.css"/>
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
		  <span class="glyphicon glyphicon-film omgd">
		  </span>
	      <a class="navbar-brand" href="#">胶圈 - 个人中心</a>
	    </div>
	
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="1.main.php">首页<!-- <span class="sr-only">(current)</span> --></a></li>
			<li><a href="#hotMovie">热映</a></li>
			<li><a href="#news">影讯</a></li>
			<li><a href="#rand">排行榜</a></li>
			<li><a href="7.1.movieComment.php">影评</a></li>
			<li><a href="6.1.addContent.php">留言板</a></li>
			<li><a href="2.movieClass.php">影片分类</a></li>
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

<?php
if(isset($_COOKIE['name'])){
	echo "<div class='container'><div class='col-sm-4'><div class='jumbotron'><h2>欢迎您！".$_COOKIE['name2'];
	echo "</h2><br><h4>开始您的电影之旅…</h4><br><br>";
	echo "	<p>
				<a class='btn btn-primary btn-lg' href='1.main.php' role='button'><span class='glyphicon glyphicon-home'>
				回到主页&nbsp</span>
				</a><br><br>
				<a class='btn btn-primary btn-lg' href='1.main.php' role='button'><span class='glyphicon glyphicon-search'>
				电影分类&nbsp</span>
				</a><br><br>
				<a class='btn btn-primary btn-lg' href='8.1.2.showFavorite.php' role='button'><span class='glyphicon glyphicon-star-empty'>
				我的收藏&nbsp</span>
				</a><br><br>
				<a class='btn btn-primary btn-lg' href='1.main.php' role='button'><span class='glyphicon glyphicon-pencil'>
				写点影评&nbsp</span>
				</a><br><br>
				<a class='btn btn-primary btn-lg' href='1.main.php' role='button'><span class='glyphicon glyphicon-pencil'>
				写点留言&nbsp</span>
				</a><br><br>
				<a class='btn btn-primary btn-lg' href='1.main.php' role='button'><span class='glyphicon glyphicon-envelope'>
				我的回复&nbsp</span>
				</a><br><br>
			</p>
			</div></div>";
	echo "<br />";
	echo "<div class='col-sm-8'>
		  <div class='rightContent'>

			<h3>猜您喜欢</h3>
			<hr>
			<div class='row'>
			  <div class='col-xs-6 col-md-3 rightbox'>
			    <a href='#' class='thumbnail'>
			      <img src='img/tcjmzp4.webp' alt='...'>
			    </a>
			  </div>
			  
			  <div class='col-xs-6 col-md-3 rightbox'>
			    <a href='#' class='thumbnail'>
			      <img src='img/yxrp1.webp' alt='...'>
			    </a>
			  </div>
			  
			  <div class='col-xs-6 col-md-3 rightbox'>
			    <a href='#' class='thumbnail'>
			      <img src='img/tcjmzp3.webp' alt='...'>
			    </a>
			  </div>
			  
			  <div class='col-xs-6 col-md-3 rightbox'>
			    <a href='#' class='thumbnail'>
			      <img src='img/yxrp2.webp' alt='...'>
			    </a>
			  </div>
			  
			</div>
		</div>
		
		<br>	
		
		<div class='rightContent2'>
		
			<div class='quiet'><h3>热门影评</h3></div><br><br>
			<hr>
			<div class='row'>
			  <div class='col-xs-6 col-md-3 rightbox2'>
			    <p class='hotcomment'><a href=''>它代表了最好的皮克斯，也代表了最坏的皮克斯</a></p>
			  </div></div><hr>
			  
			<div class='row'>
			  <div class='col-xs-6 col-md-3 rightbox2'>
			     <p class='hotcomment'><a href=''>人的恐惧也是带有偏见的</a></p>
			  </div></div><hr>
			  
			<div class='row'>
			  <div class='col-xs-6 col-md-3 rightbox2'>
			     <p class='hotcomment'><a href=''>空间的窥视与凝视</a></p>
			  </div></div><hr>
			  
			<div class='row'>
			  <div class='col-xs-6 col-md-3 rightbox2'>
			     <p class='hotcomment'><a href=''>人生的过程就是一个摆脱institutionalization(体制化)的过程</a></p>
			  </div></div><hr>
			  
			  <div class='row'>
			    <div class='col-xs-6 col-md-3 rightbox2'>
			      <p class='hotcomment'><a href=''>它代表了最好的皮克斯，也代表了最坏的皮克斯</a></p>
			    </div></div><hr>
			    
			    
			  
			</div>
		</div>
		
	</div>
</div>";


}else{
	echo "<a href = '5.0.loginIndex.php'></a>";
}
?>
<hr />
</body>
</html>
