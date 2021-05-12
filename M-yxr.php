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
				<li><a href="6.1.addContent.php">留言板</a></li>
				<li><a href="2.movieClass.php">影片分类</a></li>
				
				
				<li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">我的
				  <span class="caret"></span>
				  </a>
		          <ul class="dropdown-menu">
		            <li><a href="http://localhost/index.php">我的主页</a></li>
					<li><a href="http://localhost/re.php">注册账号</a></li>		         
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
						<h3>隐形人 The Invisible Man (2020)</h3>
						<!-- 在左侧内划分新一行 -->
						<div class="row">
							<!-- 左侧为图片 合并3格 -->
							<div class="col-sm-3">
								<div class="article1">
									<img src="img/yxr.webp" class="articleImg">
								</div>
							</div>
							<!-- 右侧为文案 合并9格 -->
							<div class="col-sm-9">
								<div class="article2">
									<p>导演: 雷·沃纳尔</p>
									<p>编剧: 雷·沃纳尔 / 赫伯特·乔治·威尔斯</p>
									<p>主演: 伊丽莎白·莫斯 / 奥利弗·杰森-科恩 / 阿尔迪斯·霍吉 / 迈克尔·多曼 / 斯托姆·瑞德 / 更多...</p>
									<p>类型: 科幻 / 惊悚 / 恐怖</p>
									<p>官方网站: www.theinvisiblemanmovie.com</p>
									<p>制片国家/地区: 加拿大 / 澳大利亚 / 美国</p>
									<p>语言: 英语</p>
									<p>上映日期: 2020-12-04(中国大陆) / 2020-02-28(美国)</p>
									<p>片长: 124分钟</p>
									<p>又名: 隐身人 / 隐形客(港)</p>
								</div>
							</div>
							
						</div><!-- 左侧内第一行的结束 -->
					</div>
				</div><!-- content -->
				
				<!-- 右侧 合并3格 -->
				<div class="col-sm-3 Adv">
					<div class="articleAdv">
						<br><br>
						<!-- 广告图片 -->
						<img src="img/adv.png" class="advPhoto">
					</div>
				</div>
				
			</div><!-- 第一行结束 -->
			
			
			<!-- 划分第二行 -->
			<div class="row">
				<!-- 第二行左侧 -->
				<div class="col-sm-9">
					<h4>剧情简介</h4>
					<hr >
					<p class="introWords">&nbsp &nbsp &nbsp &nbsp西西莉亚（伊丽莎白·莫斯 Elisabeth Moss 饰）再也想不到，曾经将自己迷得神魂颠倒的英俊男人阿德里安（奥利弗·杰森-科恩 Oliver Jackson-Cohen 饰），如今会成为噩梦的始作俑者。在和自己恋爱后没多久，阿德里安便开始对西西莉亚进行精神和肉体上的双重控制，终于，忍无可忍的西西莉亚在一天深夜用安定将阿德里安迷晕，成功的逃出了魔窟。 
　　之后，西西莉亚震惊的收到了阿德里安自杀的消息了，她几乎不敢相信，这个魔头真的从自己的生活中彻彻底底的消失了。西西莉亚的疑虑并不是空穴来风，在她生活的角角落落中，似乎都有一个无形的影子在窥视着她，企图触碰她。</p>
					<h4>演员表</h4>
					<hr >
					<div>
						<div>
							<img src="img/yxrAc1.webp" alt="..." class="actorPhoto">
							<img src="img/yxrAc2.webp" alt="..." class="actorPhoto">		
							<img src="img/yxrAc3.webp" alt="..." class="actorPhoto">	
							<br>
						</div>
						<div>
							<span class="actorName">雷·沃纳尔</span>
							<span class="actorName">伊丽莎白·莫斯</span>
							<span class="actorName">奥利弗·杰森</span>
						</div>
					</div>
					<div>
						<h4>获奖情况</h4>
						<hr >
						<p class="introWords">第68届美国音效剪辑协会奖 金卷轴奖 最佳配乐剪辑(提名)</p>
						<p class="introWords">第26届美国评论家选择电影奖 最佳视觉效果(提名)</p>
						<p class="introWords">第33届芝加哥影评人协会奖 最佳视觉效果</p>
					</div>
					<h4>相关图片</h4>
					<hr >
					<img src="img/yxrp1.webp" class="moviePhoto">
					<img src="img/yxrp2.webp" class="moviePhoto">
					<img src="img/yxrp3.webp" class="moviePhoto">
					<img src="img/yxrp4.webp" class="moviePhoto">
				</div>
				<!-- 第二行右侧-->
				<div class="col-sm-3 Adv">
					<h4 class="h44">影片资源</h4><br>
					<a class="introWords" href="https://www.iqiyi.com/v_1pyu7okzcwg.html">爱奇艺资源链接</a><br>
					<p>（单片付费）</p><br>
					<a class="introWords" href="https://v.qq.com/x/cover/mzc00200076t50s.html">腾讯视频资源链接</a><br>
					<p>（单片付费）</p><br>
				</div>
			</div>
			
			<!-- 划分第三行 -->
			<div class="row">
				<!-- 第三行左侧 -->
				<div class="col-sm-12">
					<!-- 影评部分div -->
					<br>
					<div style="text-align: center;"><p>请支持正版影视资源</p></div>
					<br>
				</div>
			</div>
		</div><!-- container -->
		<footer style="background-color: #222222;color: #FFFFFF;">
			<br>
			<h6>
			胶圈&nbsp - &nbsp影片查询网站：提供新影视资源均系收集各大网站，本网站只提供web页面浏览服务，并不提供影片资源存储<br>也不参与任何视频录制、上传
			若本站收集的影片无意侵犯版权，请联系我的邮箱地址：446745773@qq.com，我们将在第一时间删除相应资源
			</h6>
			<br>
		</footer>
	</body>
</html>
