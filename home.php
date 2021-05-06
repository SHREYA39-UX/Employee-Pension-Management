
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
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(Employee-Pension-Scheme.jpg);
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
	top: 15%;
	left: 26%;
	transform: trnaslate(-50%,-50%);
}
.title h1{
	color: #fff;
	font-size: 70px;
}
.button{
	position: absolute;
	top: 34%;
	left: 30%;
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
			<h1>PENSION MANAGEMENT</h1>
		</div>
		<div class="button">
			<a href="employee_details.php" class="btn">INSERT</a>
			<a href="display.php" class="btn">DISPLAY</a>
			<a href="delete.php" class="btn">DELETE</a>
			<a href="wd.php" class="btn">WITHDRAW</a>
			<a href="display(EPS).php" class="btn">EPS STATUS</a>
		<div>
	</header>	
</body>
</html>
