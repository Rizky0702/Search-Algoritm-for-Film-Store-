<?php
session_start();
if(isset($_SESSION['email'])) {
	echo '<script>window.location.replace("./index.php"");</script>';
} else {
?>

<head>
<title>LOGIN PAGE</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<center>
		<form action="./ceklogin.php" method="post">
	<div class="login"> 
	<img src="User.png">
		<h2>Sign In</h2>
		<input type="email" name="email" placeholder="Username" alt="email" required="required"/><br/>
		<p><input type="password" name="password" placeholder="Password" alt="password" required="required"/><br/><br/></p>
		<input type="submit" name="submit" value="Submit!!!" alt="submit"/>
	</div>
		</form><br/>


		<h4>Copyright &copy; Muhammad Rizky <font color="red"></font></h4>
	</center>
</body>
<?php } ?>