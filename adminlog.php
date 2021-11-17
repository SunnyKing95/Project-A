<?php
include("adminserv.php");
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin</title>
<center><h1>Hospital +</h1></center>
<style>
.login{
width:360px;
margin:50px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius:10px;
border:2px solid #ccc;
padding:18px 48px 25px;
margin-top:70px;
}
input[type=text], input[type=password]{
width:99%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;	
}
input[type=submit]{
width:100%;
background-color:#009;
color:#fff;
border:2px solid #86F;
padding:18px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:15px;
}
</style>
</head>
<body>
<div class="login">
<center><img src="admin.jpg" width="250" height="200"></center>
<h2 align="center">Admin Login</h2>
<p>Please enter your Username and Password.</p>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
<input type="checkbox" id="me" name="me" value="Remeber">
<label for="me">Remeber Me</label><br>
<p><a href='forgot.php'>Forgot Password?</p>
<input type="submit" value="Login" name="submit">
<p><a href='register.php'>Don't have an account yet? Click here to register.</p>
<span><?php echo $error; ?>
</body>
</html>