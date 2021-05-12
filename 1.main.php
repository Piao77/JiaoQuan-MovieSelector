<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>胶圈 - 影片查询系统</title>
		<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" 
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- 这是我用来覆盖的css样式 -->
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
	
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
				<li><a href="7.1.movieComment.php">影评</a></li>
				<li><a href="6.1.addContent.php">留言板</a></li>
				<li><a href="2.movieClass.php">影片分类</a></li>
				
				
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
		
	<!-- Bootstrap的栅格系统：要放在container容器内 -->
	<div class="container">
			<div class="row">
				
				
				
				
				
				<!--轮播图-->
								<div class="container" >
									<div class="carousel slide" id="slidershow" data-ride="carousel" data-interval="3000">
										<!--计数器-->
										<ol class="carousel-indicators">
											<li class="active" data-target="#slidershow" data-slide-to="0"></li>
											<li data-target="#slidershow" data-slide-to="1"></li>
											<li data-target="#slidershow" data-slide-to="2"></li>
										</ol>
										<!--图片容器-->
										<div class="carousel-inner">
											<div class="item active">
												<img src="img/bi.jpg"/>
												<!--添加对应标题和内容-->
												<div class="carousel-caption">
													<h4>图一</h4>
													<span>内容</span>
												</div>
											</div>
											<div class="item">
												<img src="img/za.jpg"/>
												<!--添加对应标题和内容-->
												<div class="carousel-caption">
													<h4>图二</h4>
												</div>
											</div>
											<div class="item">
												<img src="img/we.jpg"/>
												<!--添加对应标题和内容-->
												<div class="carousel-caption">
													<h4>电影名</h4>
												</div>
											</div>
											<!--轮播导航-->
											<a href="#slidershow" data-slide="prev" class="left carousel-control" role="button">
												<!-- <img class="glyphicon glyphicon-chevron-left"/> -->
											</a>
											<a href="#slidershow" data-slide="next" class="right carousel-control" role="button">
												<!-- <img class="glyphicon glyphicon-chevron-right"/> -->
											</a>
										</div>
									</div>
									
			</div>


				<!-- 划分列:左侧 合并九个单元格-->
				<div class="col-sm-9">
					
					<div class="row">
						
						
					  <nav class="navbar navbar-inverse">
					    <div class="container-fluid">
					      <div class="navbar-header">
							<p class="pcolor">热映影片</p>
					      </div><a class="pcolor2" href="2.movieClass.html" name="hotMovie">更多</a>
					    </div>
					  </nav>
					  
					  
					    <div class="thumbnail number1">
					      <img src="img/p2264377763.jpg" alt="..." id="firstimg">
					      <div class="caption">
					        <a href="3.movieContent.html" class="aName">夏洛特烦恼</a>
					        <p><a href="3.movieContent.html" class="aName">沈腾、马丽</a></p>
					      </div>
					    </div>
						
						<div class="thumbnail">
						  <img src="img/yxr.webp" alt="..." id="firstimg">
						  <div class="caption">
					        <a href="../" class="aName">隐形人</a>
					        <p><a href="../" class="aName">伊丽莎白·莫斯<br>奥利弗·杰森科恩</a></p>
						  </div>
						</div>
						
					<div class="thumbnail">
					  <img src="img/ssm.webp" alt="..." id="firstimg">
					  <div class="caption">
				        <a href="../" class="aName">绅士们</a>
				        <p><a href="../" class="aName">马修·麦康纳<br>查理·汉纳姆</a></p>
					  </div>
					</div>
						
					<div class="thumbnail">
					  <img src="img/wj.webp" alt="..." id="firstimg">
					  <div class="caption">
				        <a href="../" class="aName">玩具总动员4</a>
				        <p><a href="../" class="aName">汤姆·汉克斯<br>蒂姆·艾伦</a></p>
					  </div>
					</div>
					  
				    <div class="thumbnail">
				      <img src="img/trjta.webp" alt="..." id="firstimg">
				      <div class="caption">
				        <a href="../" class="aName">唐人街探案3</a>
				        <p><a href="../" class="aName">王宝强<br>刘昊然</a></p>
				      </div>
				    </div>
					  
						<div class="thumbnail">
						  <img src="img/wyzd.webp" alt="..." id="firstimg">
						  <div class="caption">
					        <a href="../" class="aName">无依之地</a>
					        <p><a href="../" class="aName">弗兰西斯·麦克多蒙德</a></p>
						  </div>
						</div>
					  
						<div class="thumbnail number1">
						  <img src="img/lzxw.webp" alt="..." id="firstimg">
						  <div class="caption">
					        <a href="../" class="aName">林中小屋</a>
					        <p><a href="../" class="aName">克里斯汀·康奈利<br>理查德·詹金斯</a></p>
						  </div>
						</div>
					  
						<div class="thumbnail">
						  <img src="img/p2572166063.jpg" alt="..." id="firstimg">
						  <div class="caption">
					        <a href="../" class="aName">少年的你</a>
					        <p><a href="../" class="aName">周冬雨、易烊千玺</a></p>
						  </div>
						</div>
					 
						<div class="thumbnail">
						  <img src="img/p2549177902.jpg" alt="..." id="firstimg">
						  <div class="caption">
					        <a href="../" class="aName">绿皮书</a>
					        <p><a href="../" class="aName">维果·莫腾森<br>马赫沙拉·阿里</a></p>
						  </div>
						</div>
					 
						<div class="thumbnail">
						  <img src="img/p457760035.jpg" alt="..." id="firstimg">
						  <div class="caption">
					        <a href="../" class="aName">泰坦尼克号</a>
					        <p><a href="../" class="aName">莱昂纳多·迪卡普里奥<br>凯特·温丝莱特</a></p>
						  </div>
						</div>
					 
						<div class="thumbnail">
						  <img src="img/p485887754.jpg" alt="..." id="firstimg">
						  <div class="caption">
					        <a href="../" class="aName">飞屋环游记</a>
					        <p><a href="../" class="aName">爱德华·阿斯纳<br>克里斯托弗·普卢默</a></p>
						  </div>
						</div>
					  
						<div class="thumbnail">
						  <img src="img/p480747492.jpg" alt="..." id="firstimg">
						  <div class="caption">
					        <a href="../" class="aName">肖申克的救赎</a>
					        <p><a href="../" class="aName">弗兰克·德拉邦特<br>蒂姆·罗宾斯</a></p>
						  </div>
						</div>
					  
					  
					</div>
					<!--详细内容: 在左侧的内部 划分一个新的行 -->
					<div class="row">

						
					</div>
			
				</div>
				
				
				<!-- 右侧 -->
				<div class="col-sm-3">
				<!-- 排行榜标题栏 -->
				<nav class="navbar navbar-inverse leadd">
				  <div class="container-fluid">
				    <div class="navbar-header">
						<a name="rand"></a>
				        <p class="phbcolor">排行榜</p>
				    </div>
				  </div>
				</nav>
				<!-- 排行榜 -->
					<div class="list-group">
<!-- 						<a href="#" class="list-group-item active whatt">
							排行榜
						</a> -->
						<a href="#" class="list-group-item">&nbsp 1&nbsp &nbsp &nbsp你好李焕英</a>
						<a href="#" class="list-group-item">&nbsp 2&nbsp &nbsp &nbsp隐形人</a>
						<a href="#" class="list-group-item">&nbsp 3&nbsp &nbsp &nbsp绅士们</a>
						<a href="#" class="list-group-item">&nbsp 4&nbsp &nbsp &nbsp唐人街探案3</a>
						<a href="#" class="list-group-item">&nbsp 5&nbsp &nbsp &nbsp夏洛特烦恼</a>
						<a href="#" class="list-group-item">&nbsp 6&nbsp &nbsp &nbsp玩具总动员4</a>
						<a href="#" class="list-group-item">&nbsp 7&nbsp &nbsp &nbsp无依之地</a>
						<a href="#" class="list-group-item">&nbsp 8&nbsp &nbsp &nbsp绿皮书</a>
						<a href="#" class="list-group-item">&nbsp 9&nbsp &nbsp &nbsp泰坦尼克号</a>
						<a href="#" class="list-group-item">&nbsp 10&nbsp &nbsp 少年的你</a>
						<a href="#" class="list-group-item">&nbsp 11&nbsp &nbsp 林中小屋</a>
						<a href="#" class="list-group-item">&nbsp 12&nbsp &nbsp 寂静岭</a>
					</div>
				</div>
			</div>
		
			<!-- 划分新行：此处为栅格第三行 -->
			<div class="row">
			<!-- 第三行左侧 -->
			<div class="col-sm-9">
				
				<div class="row">
					
					
					  <nav class="navbar navbar-inverse">
					    <div class="container-fluid">
					      <div class="navbar-header">
							<p class="pcolor">影讯</p>
					      </div><a class="pcolor2" href="2.movieClass.html" name="news">更多</a>
					    </div>
					  </nav>
				  
				  
				    <div class="thumbnail number1">
				      <img src="img/p2572166063.jpg" alt="..." id="firstimg">
				      <div class="caption">
				        <a href="../" class="aName">少年的你</a>
				        <p><a href="../" class="aName">周冬雨、易烊千玺</a></p>
				      </div>
				    </div>
					
					<div class="thumbnail">
					  <img src="img/p457760035.jpg" alt="..." id="firstimg">
					  <div class="caption">
				        <a href="../" class="aName">少年的你</a>
				        <p><a href="../" class="aName">周冬雨、易烊千玺</a></p>
					  </div>
					</div>
					
					<div class="thumbnail">
					  <img src="img/p2616355133.jpg" alt="..." id="firstimg">
					  <div class="caption">
				        <a href="../" class="aName">少年的你</a>
				        <p><a href="../" class="aName">周冬雨、易烊千玺</a></p>
					  </div>
					</div>
					
					<div class="thumbnail">
					  <img src="img/p480747492.jpg" alt="..." id="firstimg">
					  <div class="caption">
				        <a href="../" class="aName">少年的你</a>
				        <p><a href="../" class="aName">周冬雨、易烊千玺</a></p>
					  </div>
					</div>
				  
					<div class="thumbnail">
					  <img src="img/p2264377763.jpg" alt="..." id="firstimg">
					  <div class="caption">
				        <a href="../" class="aName">少年的你</a>
				        <p><a href="../" class="aName">周冬雨、易烊千玺</a></p>
					  </div>
					</div>
				  
					<div class="thumbnail">
					  <img src="img/p2516578307.jpg" alt="..." id="firstimg">
					  <div class="caption">
				        <a href="../" class="aName">少年的你</a>
				        <p><a href="../" class="aName">周冬雨、易烊千玺</a></p>
					  </div>
					</div>
				  
					<div class="thumbnail number1">
					  <img src="img/p485887754.jpg" alt="..." id="firstimg">
					  <div class="caption">
				        <a href="../" class="aName">少年的你</a>
				        <p><a href="../" class="aName">周冬雨、易烊千玺</a></p>
					  </div>
					</div>
				  
					<div class="thumbnail">
					  <img src="img/p2549177902.jpg" alt="..." id="firstimg">
					  <div class="caption">
				        <a href="../" class="aName">少年的你</a>
				        <p><a href="../" class="aName">周冬雨、易烊千玺</a></p>
					  </div>
					</div>
				 
					<div class="thumbnail">
					  <img src="img/p479682972.jpg" alt="..." id="firstimg">
					  <div class="caption">
				        <a href="../" class="aName">少年的你</a>
				        <p><a href="../" class="aName">周冬雨、易烊千玺</a></p>
					  </div>
					</div>
				 
					<div class="thumbnail">
					  <img src="img/p524964039.jpg" alt="..." id="firstimg">
					  <div class="caption">
				        <a href="../" class="aName">少年的你</a>
				        <p><a href="../" class="aName">周冬雨、易烊千玺</a></p>
					  </div>
					</div>
				 
					<div class="thumbnail">
					  <img src="img/p2616355133.jpg" alt="..." id="firstimg">
					  <div class="caption">
				        <a href="../" class="aName">少年的你</a>
				        <p><a href="../" class="aName">周冬雨、易烊千玺</a></p>
					  </div>
					</div>
				  
					<div class="thumbnail">
					  <img src="img/p457760035.jpg" alt="..." id="firstimg">
					  <div class="caption">
				        <a href="../" class="aName">少年的你</a>
				        <p><a href="../" class="aName">周冬雨、易烊千玺</a></p>
					  </div>
					</div>
				 
				 </div>
			</div>
			<!-- 第三行右侧 -->
			<div class="col-sm-3">
				<!-- panel面板1 -->
				 <div class="panel panel-default">
				 	<div class="panel-body">
				 	    欢迎您关注我们！<br><br>
						微信公众号：<a href="">胶圈公众号</a><br><br>
						新浪微博：<a href="">@胶圈电影网</a><br><br>
						邮箱：<a href="">123@qq.com</a><br><br>
						QQ：<a href="">客服①</a><br><br>
						微信：<a href="">客服②</a><br><br>
				 	</div>
				</div>
				<!-- panel面板2 -->
				<div class="panel panel-default">
				 	<div class="panel-body">
				 	    也许您对本网页有问题或建议！<br><br>
						请留言给我 ;）<br><br>
							<!-- 这里是留言框 -->
							<div class="input-group">
								<input type="text" class="form-control lastForm" placeholder="在这里写下您的建议吧…">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button">留言</button>
								</span>
							</div>
				 	</div>
				</div>
			</div>
		</div>		
		<!-- 第四行 底部广告图 -->
		<div class="row">
			<div class="col-sm-12">
				<a href="www.baidu.com" id="advertisement">
					<img src="img/adv-b.png" id="adimg">
				</a>
			</div>
		</div>
	</div>
	
	<!-- 回到顶部悬浮按钮 -->
	<div style="overflow: hidden;position: fixed;right: 10px;bottom: 20px;z-index: 10;">
	    <div style="overflow: hidden;">
	    	<div style="padding-top:20px;padding-right:50px;padding-bottom:50px">
				<a href="#" style="float: right; text-decoration: none;" class="btns">Back<br>to<br>top</a>
			</div>
	    </div>
    </div>

	<br>
	
	
	<!-- FOOTER部分 -->
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