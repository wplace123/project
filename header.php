<?php header("Content-Type:text/html; charset=utf8"); ?>
<!DOCTYPE html>
<html>
<head>
	<!-- 行動裝置支援 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
	.navbar{
		background: #555;
	}
	.glyphicon{
		margin-right: 5px;
	}
	#nav-content{
		color: #FFF;
	}
	</style>
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
	  <div class="container-fluid">
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse">
	      <ul class="nav navbar-nav navbar-right">
	      	<li>
	        	<a id="nav-content" href="index.php"><span class="glyphicon glyphicon-home"></span>購物首頁</a>
	        </li>
	        <li>
	        	<a id="nav-content" href="rigster.php">會員註冊</a>
	        </li>
	        <li>
	        	<a id="nav-content" href="login.php"><span class="glyphicon glyphicon-log-in"></span>登入</a>
	        </li>
	        <li>
	        	<a id="nav-content" href="index.php"><span class="glyphicon glyphicon-shopping-cart">(0)</span></a>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</body>
</html>