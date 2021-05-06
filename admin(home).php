
<html>
<body>
<head>
<style>
*{
	margin: 0;
	padding: 0;
	font-family: Century Gothic;
}
header{
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(pension-person-putting-coin-in-jar.jpg);
	height: 100vh;
	background-size: cover;
	background-position: center;
}
ul{
	float: right;
	list-style-type: none;
	margin-top: 25px;
}
ul li{
	display: inline-block;
}
ul li a{
	text-decoration: none;
	color: #fff;
	padding: 5px 20px;
	border: 1px solid #transparent;
	transition: 0.6s ease;
}
ul li a:hover{
	background-color: #fff;
	color: #000;
}
.title{
	position: absolute;
	top: 13%;
	left: 21%;
	transform: trnaslate(-50%,-50%);
}
.title h1{
	color: #fff;
	font-size: 70px;
}
.button{
	position: absolute;
	top: 32%;
	left: 26%;
	transform: trnaslate(-50%,-50%);
}
.btn{
	border: 1px solid #fff;
	padding: 10px 30px;
	color: #fff;
	text-decoration: none;
	transition: 0.6s ease;
}
.btn:hover{
	background-color: #fff;
	color: #000;
}
</style>
</head>
<body>
	<header>
		<div class="main">
			<ul>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
		<div class="title">
			<h1>EMPLOYEE PENSION SCHEME</h1>
		</div>
		<div class="button">
			<a href="all(ed).php" class="btn">Display Employee Details</a>
			<a href="admin_c.php" class="btn">Display Contribution Details</a>
			<a href="admin(wd).php" class="btn">Display Withdraw  Details</a>
			
		<div>
	</header>	
</body>
</html>
