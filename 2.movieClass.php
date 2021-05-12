<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>胶圈 - 影片分类</title>
		<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" 
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- 这是我用来覆盖的css样式 -->
		<link rel="stylesheet" type="text/css" href="css/movieClass.css"/>
	
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
		      <a class="navbar-brand" href="#">胶圈 - 影片分类</a>
		    </div>

				<!-- 搜索框 -->
				<form class="navbar-form navbar-right">
					<a href="http://localhost/4.find.php">
						<input type="button" class="btn btn-default" value="搜索" >
						</input>
					</a>
				</form>
				
				<p class="navbar-text navbar-right"><a href="1.main.php" class="navbar-link">回到主页 </a></p>
				
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div>
		</nav>
		
		<!-- 标签栏 -->
		<ol class="breadcrumb">
		  <li><a href="#kb" class="breadcrumbA">&nbsp &nbsp 恐怖 &nbsp </a></li>
		  <li><a href="#xj" class="breadcrumbA">&nbsp 喜剧 &nbsp </a></li>
		  <li><a href="#xy" class="breadcrumbA">&nbsp 悬疑 &nbsp </a></li>
		  <li><a href="#jq" class="breadcrumbA">&nbsp 剧情 &nbsp </a></li>
		  <li><a href="#dz" class="breadcrumbA">&nbsp 动作 &nbsp </a></li>
		  <li><a href="#aq" class="breadcrumbA">&nbsp 爱情 &nbsp </a></li>
		  <li><a href="#kh" class="breadcrumbA">&nbsp 科幻 &nbsp </a></li>
		  <li><a href="#dh" class="breadcrumbA">&nbsp 动画 &nbsp </a></li>
		  <li><a href="#yy" class="breadcrumbA">&nbsp 音乐 &nbsp </a></li>
		  <li><a href="#zz" class="breadcrumbA">&nbsp 战争 &nbsp </a></li>
		  <li><a href="#wx" class="breadcrumbA">&nbsp 武侠 &nbsp </a></li>
		  <li><a href="#zn" class="breadcrumbA">&nbsp 灾难 &nbsp </a></li>
		  <li><a href="#qh" class="breadcrumbA">&nbsp 奇幻 &nbsp </a></li>
		  <li><a href="#jl" class="breadcrumbA">&nbsp 记录 &nbsp </a></li>
		  <li><a href="#dsj" class="breadcrumbA">&nbsp 电视剧 &nbsp </a></li>
		  <li><a href="#qt" class="breadcrumbA">&nbsp 其他 &nbsp </a></li>
		</ol>
		
		
	<!-- Bootstrap的栅格系统：要放在container容器内 -->
	<div class="container">
			<div class="row">

				<!-- 划分列:左侧 合并九个单元格-->
				<div class="col-sm-12">
					
					<div class="row">
						
						
					  <nav class="navbar navbar-inverse navbarClass">
					    <div class="container-fluid">
					      <div class="navbar-header">
							<a name="kb"></a>
							<p class="pcolor">恐怖</p>
					      </div>
					    </div>
					  </nav>
					  
					  
					    <div class="thumbnail number1">
					      <img src="img/yxr.webp" alt="..." id="firstimg">
					      <div class="caption">
					        <a href="M-yxr.php" class="aName">隐形人</a>
					        <p><a href="M-yxr.php" class="aName">伊丽莎白·莫斯<br>奥利弗·杰森科恩</a></p>
					      </div>
					    </div>
						
						<div class="thumbnail">
						  <img src="img/tcjmz.webp" alt="..." id="firstimg">
						  <div class="caption">
					        <a href="M-tcjmz.php" class="aName">逃出绝命镇</a>
					        <p><a href="M-tcjmz.php" class="aName">丹尼尔·卡卢亚<br>艾莉森·威廉姆斯</a></p>
						  </div>
						</div>
						
						<div class="thumbnail">
						  <img src="img/jjl.webp" alt="..." id="firstimg">
						  <div class="caption">
					        <a href="../" class="aName">寂静岭</a>
					        <p><a href="../" class="aName">拉达·米切尔<br>肖恩·宾</a></p>
						  </div>
						</div>
						
						<div class="thumbnail">
						  <img src="img/lzxw.webp" alt="..." id="firstimg">
						  <div class="caption">
					        <a href="../" class="aName">林中小屋</a>
					        <p><a href="../" class="aName">克里斯汀·康奈利<br>理查德·詹金斯</a></p>
						  </div>
						</div>
					  
						<div class="thumbnail">
						  <img src="img/1408.webp" alt="..." id="firstimg">
						  <div class="caption">
					        <a href="../" class="aName">幻影凶间1408</a>
					        <p><a href="../" class="aName">约翰·库萨克<br>塞缪尔·杰克逊</a></p>
						  </div>
						</div>
					  
						<div class="thumbnail">
						  <img src="img/jchy.webp" alt="..." id="firstimg">
						  <div class="caption">
					        <a href="../" class="aName">解除好友2：暗网</a>
					        <p><a href="../" class="aName">科林·伍德尔<br>斯蒂芬妮·诺格拉斯</a></p>
						  </div>
						</div>
					    
						<div class="thumbnail">
						  <img src="img/shwj.webp" alt="..." id="firstimg">
						  <div class="caption">
						    <a href="../" class="aName">生化危机</a>
						    <p><a href="../" class="aName">米拉·乔沃维奇<br>米歇尔·罗德里格兹</a></p>
						  </div>
						</div>
											  
						<div class="thumbnail">
						  <img src="img/sl.webp" alt="..." id="firstimg">
						  <div class="caption">
						    <a href="../" class="aName">闪灵</a>
						    <p><a href="../" class="aName">杰克·尼科尔森<br>谢莉·杜瓦尔</a></p>
						  </div>
						</div>
						
					</div>

				</div>
				
				
			
				
			</div>
		
			<!-- 划分新行：此处为栅格第2行 -->
			<div class="row">
			<!-- 第2行左侧 -->
			<div class="col-sm-12">
				
				<div class="row">
					
					
					  <nav class="navbar navbar-inverse navbarClass">
					    <div class="container-fluid">
					      <div class="navbar-header">
							<a name="xj"></a>
							<p class="pcolor">喜剧</p>
					      </div>
					  </nav>
				  
				  
				    <div class="thumbnail number1">
				      <img src="img/trjta.webp" alt="..." id="firstimg">
				      <div class="caption">
				        <a href="../" class="aName">唐人街探案3</a>
				        <p><a href="../" class="aName">王宝强<br>刘昊然</a></p>
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
					  <img src="img/jx.webp" alt="..." id="firstimg">
					  <div class="caption">
				        <a href="../" class="aName">极限逃生</a>
				        <p><a href="../" class="aName">林允儿<br>曹政奭</a></p>
					  </div>
					</div>
					
					<div class="thumbnail">
					  <img src="img/wbsys.webp" alt="..." id="firstimg">
					  <div class="caption">
				        <a href="../" class="aName">我不是药神</a>
				        <p><a href="../" class="aName">徐峥<br>王传君</a></p>
					  </div>
					</div>
				  
					<div class="thumbnail">
					  <img src="img/ss.webp" alt="..." id="firstimg">
					  <div class="caption">
				        <a href="../" class="aName">三傻大闹宝莱坞</a>
				        <p><a href="../" class="aName">阿米尔·汗<br>卡琳娜·卡普尔</a></p>
					  </div>
					</div>
				  
				  <div class="thumbnail">
				    <img src="img/myzw.webp" alt="..." id="firstimg">
				    <div class="caption">
				      <a href="../" class="aName">沐浴之王</a>
				      <p><a href="../" class="aName">彭昱畅<br>乔杉</a></p>
				    </div>
				  </div>
				  
				  <div class="thumbnail">
				    <img src="img/xxdtq.webp" alt="..." id="firstimg">
				    <div class="caption">
				      <a href="../" class="aName">羞羞的铁拳</a>
				      <p><a href="../" class="aName">艾伦<br>马丽</a></p>
				    </div>
				  </div>
				  
					<div class="thumbnail">
					  <img src="img/wj.webp" alt="..." id="firstimg">
					  <div class="caption">
				        <a href="../" class="aName">玩具总动员4</a>
				        <p><a href="../" class="aName">汤姆·汉克斯<br>蒂姆·艾伦</a></p>
					  </div>
					</div>
				  

				 
				 </div>
			</div>
		</div>		

	
	<!-- 划分新行：此处为栅格第3行 -->
		<div class="row">
		<!-- 第3行左侧 -->
		<div class="col-sm-12">
			
			<div class="row">
				
				  <nav class="navbar navbar-inverse navbarClass">
				    <div class="container-fluid">
				      <div class="navbar-header">
						<a name="xy"></a>
						<p class="pcolor">悬疑</p>
				      </div>
				    </div>
				  </nav>

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
			   <img src="img/p2516578307.jpg" alt="..." id="firstimg">
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

	</div>		
	
	<!-- 划分新行：此处为栅格第4行 -->
		<div class="row">
		<!-- 第4行左侧 -->
		<div class="col-sm-12">
			
			<div class="row">
				
				
				  <nav class="navbar navbar-inverse navbarClass">
				    <div class="container-fluid">
				      <div class="navbar-header">
						<a name="jq"></a>
						<p class="pcolor">剧情</p>
				      </div>
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
				  <img src="img/p2516578307.jpg" alt="..." id="firstimg">
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
			  
			 
			 </div>
		</div>

	</div>		
	
	<!-- 划分新行：此处为栅格第5行 -->
		<div class="row">
		<!-- 第5行左侧 -->
		<div class="col-sm-12">
			
			<div class="row">
				
				
				  <nav class="navbar navbar-inverse navbarClass">
				    <div class="container-fluid">
				      <div class="navbar-header">
						<a name="dz"></a>
						<p class="pcolor">动作</p>
				      </div>
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
				  <img src="img/p2516578307.jpg" alt="..." id="firstimg">
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
			  
			 
			 </div>
		</div>
	
	</div>	
	
	<!-- 划分新行：此处为栅格第5行 -->
		<div class="row">
		<!-- 第5行左侧 -->
		<div class="col-sm-12">
			
			<div class="row">
				
				
				  <nav class="navbar navbar-inverse navbarClass">
				    <div class="container-fluid">
				      <div class="navbar-header">
						<a name="aq"></a>
						<p class="pcolor">爱情</p>
				      </div>
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
				  <img src="img/p2516578307.jpg" alt="..." id="firstimg">
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
			  
			 
			 </div>
		</div>
	
	</div>	
	
	<!-- 划分新行：此处为栅格第5行 -->
		<div class="row">
		<!-- 第5行左侧 -->
		<div class="col-sm-12">
			
			<div class="row">
				
				
				  <nav class="navbar navbar-inverse navbarClass">
				    <div class="container-fluid">
				      <div class="navbar-header">
						<a name="kh"></a>
						<p class="pcolor">科幻</p>
				      </div>
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
				  <img src="img/p2516578307.jpg" alt="..." id="firstimg">
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
			  
			 
			 </div>
		</div>
	
	</div>	
	
	<!-- 划分新行：此处为栅格第5行 -->
		<div class="row">
		<!-- 第5行左侧 -->
		<div class="col-sm-12">
			
			<div class="row">
				
				
				  <nav class="navbar navbar-inverse navbarClass">
				    <div class="container-fluid">
				      <div class="navbar-header">
						<a name="dh"></a>
						<p class="pcolor">动画</p>
				      </div>
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
				  <img src="img/p2516578307.jpg" alt="..." id="firstimg">
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
			  
			 
			 </div>
		</div>
	
	</div>	
	
	<!-- 划分新行：此处为栅格第5行 -->
		<div class="row">
		<!-- 第5行左侧 -->
		<div class="col-sm-12">
			
			<div class="row">
				
				
				  <nav class="navbar navbar-inverse navbarClass">
				    <div class="container-fluid">
				      <div class="navbar-header">
						<a name="yy"></a>
						<p class="pcolor">音乐</p>
				      </div>
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
				  <img src="img/p2516578307.jpg" alt="..." id="firstimg">
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
			  
			 
			 </div>
		</div>
	
	</div>	
	
	<!-- 划分新行：此处为栅格第5行 -->
		<div class="row">
		<!-- 第5行左侧 -->
		<div class="col-sm-12">
			
			<div class="row">
				
				
				  <nav class="navbar navbar-inverse navbarClass">
				    <div class="container-fluid">
				      <div class="navbar-header">
						<a name="zz"></a>
						<p class="pcolor">战争</p>
				      </div>
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
				  <img src="img/p2516578307.jpg" alt="..." id="firstimg">
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
			  
			 
			 </div>
		</div>
	
	</div>	
	
	<!-- 划分新行：此处为栅格第5行 -->
		<div class="row">
		<!-- 第5行左侧 -->
		<div class="col-sm-12">
			
			<div class="row">
				
				
				  <nav class="navbar navbar-inverse navbarClass">
				    <div class="container-fluid">
				      <div class="navbar-header">
						<a name="wx"></a>
						<p class="pcolor">武侠</p>
				      </div>
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
				  <img src="img/p2516578307.jpg" alt="..." id="firstimg">
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
			  
			 
			 </div>
		</div>
	
	</div>	
	
	<!-- 划分新行：此处为栅格第5行 -->
		<div class="row">
		<!-- 第5行左侧 -->
		<div class="col-sm-12">
			
			<div class="row">
				
				
				  <nav class="navbar navbar-inverse navbarClass">
				    <div class="container-fluid">
				      <div class="navbar-header">
						<a name="zn"></a>
						<p class="pcolor">灾难</p>
				      </div>
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
				  <img src="img/p2516578307.jpg" alt="..." id="firstimg">
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
			  
			 
			 </div>
		</div>
	
	</div>	
	
	<!-- 划分新行：此处为栅格第5行 -->
		<div class="row">
		<!-- 第5行左侧 -->
		<div class="col-sm-12">
			
			<div class="row">
				
				
				  <nav class="navbar navbar-inverse navbarClass">
				    <div class="container-fluid">
				      <div class="navbar-header">
						<a name="qh"></a>
						<p class="pcolor">奇幻</p>
				      </div>
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
				  <img src="img/p2516578307.jpg" alt="..." id="firstimg">
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
			  
			 
			 </div>
		</div>
	
	</div>	
	
	<!-- 划分新行：此处为栅格第5行 -->
		<div class="row">
		<!-- 第5行左侧 -->
		<div class="col-sm-12">
			
			<div class="row">
				
				
				  <nav class="navbar navbar-inverse navbarClass">
				    <div class="container-fluid">
				      <div class="navbar-header">
						<a name="jl"></a>
						<p class="pcolor">记录</p>
				      </div>
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
				  <img src="img/p2516578307.jpg" alt="..." id="firstimg">
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
			  
			 
			 </div>
		</div>
	
	</div>	
	
	<!-- 划分新行：此处为栅格第5行 -->
		<div class="row">
		<!-- 第5行左侧 -->
		<div class="col-sm-12">
			
			<div class="row">
				
				
				  <nav class="navbar navbar-inverse navbarClass">
				    <div class="container-fluid">
				      <div class="navbar-header">
						<a name="dsj"></a>
						<p class="pcolor">电视剧</p>
				      </div>
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
				  <img src="img/p2516578307.jpg" alt="..." id="firstimg">
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
			  
			 
			 </div>
		</div>
	
	</div>	
	
	<!-- 划分新行：此处为栅格第5行 -->
		<div class="row">
		<!-- 第5行左侧 -->
		<div class="col-sm-12">
			
			<div class="row">
				
				
				  <nav class="navbar navbar-inverse navbarClass">
				    <div class="container-fluid">
				      <div class="navbar-header">
						<a name="qt"></a>
						<p class="pcolor">其他</p>
				      </div>
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
				  <img src="img/p2516578307.jpg" alt="..." id="firstimg">
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
			  
			 
			 </div>
		</div>
	
	</div>	
	
	<!-- 第last行 -->
		<div class="row">
			<div class="col-sm-12">
				<a href="www.baidu.com" id="advertisement">
					<img src="img/za.jpg" id="adimg">
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
