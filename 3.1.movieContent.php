<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>胶圈 - 影片详情</title>
		
		<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" 
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
		<!-- 这是我用来覆盖的css样式 -->
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
		<link rel="stylesheet" type="text/css" href="css/3.movieContent.css"/>
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
		      <a class="navbar-brand" href="#">胶圈 - 影片详情</a>
		    </div>
		
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="1.main.html">首页<!-- <span class="sr-only">(current)</span> --></a></li>
				<li><a href="1.main.html#hotMovie">热映</a></li>
				<li><a href="1.main.html#news">影讯</a></li>
				<li><a href="1.main.html#rand">排行榜</a></li>
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
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="我想看什么?">
		        </div>
		        <button type="submit" class="btn btn-default">搜索</button>
				</form>
				
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div>
		</nav>
		
		<!-- 栅格系统div-->
		<div class="container">
		<!-- 划分一行 -->
			<div class="row">
				<!-- 左侧 合并9格 -->
				<div class="col-sm-9">
					<div id="content">
						<h3>少年的你 NAME (2020)</h3>
						<!-- 在左侧内划分新一行 -->
						<div class="row">
							<!-- 左侧为图片 合并3格 -->
							<div class="col-sm-3">
								<div class="article1">
									<img src="img/p485887754.jpg" class="articleImg">
								</div>
							</div>
							<!-- 右侧为文案 合并9格 -->
							<div class="col-sm-9">
								<div class="article2">
									<p>导演: 赵婷</p>
									<p>编剧: 赵婷 / 杰西卡·布鲁德</p>
									<p>主演: 弗兰西斯·麦克多蒙德 / 大卫·斯特雷泽恩 / 德里克·贾尼斯 / 泰·斯特雷泽恩 / 卡特·克利福德 / 更多...</p>
									<p>类型: 剧情</p>
									<p>制片国家/地区: 美国 / 德国</p>
									<p>语言: 英语</p>
									<p>上映日期: 2020-09-11(威尼斯电影节) / 2021-01-29(美国) / 2021-02-19(美国网络)</p>
									<p>片长: 108分钟</p>
									<p>又名: 游牧人生(台) / 浪迹天地(港) / 游牧之地</p>
								</div>
							</div>
							<p> 这里再加点东西</p>
						</div><!-- 左侧内第一行的结束 -->
					</div>
				</div><!-- content -->
				
				<!-- 右侧 合并3格 -->
				<div class="col-sm-3 Adv">
					<div class="articleAdv">
						<br><br>
						<!-- 广告图片 -->
						<img src="img/p2549177902.jpg" class="advPhoto">
					</div>
				</div>
				
			</div><!-- 第一行结束 -->
			
			
			<!-- 划分第二行 -->
			<div class="row">
				<!-- 第二行左侧 -->
				<div class="col-sm-9">
					<h4>剧情简介</h4>
					<hr >
					<p class="introWords">&nbsp &nbsp &nbsp &nbsp基于Jessica Bruder所著书籍《Nomadland: Surviving America in the Twenty-First Century》，讲述一个60多岁的女人在经济大萧条中失去了一切，她作为一个居住在货车里的现代游牧民，开始了穿越美国西部的旅程。</p>
					<h4>演员表</h4>
					<hr >
					<img src="img/zdy.webp" alt="..." class="actorPhoto">
					<img src="img/zdy.webp" alt="..." class="actorPhoto">		
					<br>
					<span class="actorName">周冬雨</span>
					<span class="actorName">another</span>
					<h4>获奖情况</h4>
					<hr >
					<p class="introWords">第78届金球奖 电影类 最佳剧情片</p>
					<p class="introWords">第93届奥斯卡金像奖 最佳影片(提名) 莫莉耶·艾舍尔 / 赵婷 / 弗兰西斯·麦克多蒙德 / 丹·简维 / 彼得·斯皮尔斯</p>
					<h4>视频和图片</h4>
					<hr >
					<img src="wampthemes/classic/img/gifLogo.gif" class="moviePhoto">
					<img src="wampthemes/classic/img/gifLogo.gif" class="moviePhoto">
					<img src="wampthemes/classic/img/gifLogo.gif" class="moviePhoto">
					<img src="wampthemes/classic/img/gifLogo.gif" class="moviePhoto">
					<img src="wampthemes/classic/img/gifLogo.gif" class="moviePhoto">
				</div>
				<!-- 第二行右侧-->
				<div class="col-sm-3 Adv">
					<h4 class="h44">影片资源</h4>
					<p class="introWords">资源链接1</p>
					<p class="introWords">资源链接2</p>
					<p class="introWords">资源链接3</p>
					<p class="introWords">资源链接4</p>
				</div>
			</div>
			
			<!-- 划分第三行 -->
			<div class="row">
				<!-- 第三行左侧 -->
				<div class="col-sm-9">
					<!-- 影评部分div -->
					<div class="filmContent">
						<h4>影评</h4>
						<hr >
						<!-- 内容整体div -->
						<div class="filmContent">
							<!-- 一号影评 -->
							<div class="comment1">
								<!-- 小标题 -->
								<div class="filmRT">
									<h5>用户：XX</h5>
								</div>
								<!-- 影评内容 -->
								<div class="filmRC">
									<p>
										<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe distinctio qui neque doloremque maxime numquam quod voluptatem non animi aspernatur placeat magni est eveniet. Amet facilis itaque rem eveniet ex!</span>
									</p>
								</div>
							</div>
							<hr style="border:1 dashed #987cb9" width="90%" color=#e2e2e2 SIZE=1 >
							<!-- 二号影评 -->
							<div class="comment1">
								<!-- 小标题 -->
								<div class="filmRT">
									<h5>用户：XX</h5>
								</div>
								<!-- 影评内容 -->
								<div class="filmRC">
									<p>
										<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe distinctio qui neque doloremque maxime numquam quod voluptatem non animi aspernatur placeat magni est eveniet. Amet facilis itaque rem eveniet ex!</span>
									</p>
								</div>
							</div>
							<hr style="border:1 dashed #987cb9" width="90%" color=#e2e2e2 SIZE=1 >
							<!-- 三号影评 -->
							<div class="comment1">
								<!-- 小标题 -->
								<div class="filmRT">
									<h5>用户：XX</h5>
								</div>
								<!-- 影评内容 -->
								<div class="filmRC">
									<p>
										<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe distinctio qui neque doloremque maxime numquam quod voluptatem non animi aspernatur placeat magni est eveniet. Amet facilis itaque rem eveniet ex!</span>
									</p>
								</div>
							</div>
							<hr style="border:1 dashed #987cb9" width="90%" color=#e2e2e2 SIZE=1 >
						</div>
					</div>
				</div>
				<!-- 3右侧 -->
			</div>
		</div><!-- container -->
	</body>
</html>
