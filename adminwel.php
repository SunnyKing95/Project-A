<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="sta.css"/>
	<title>Form in Tale</title>
	<style>
		#header {
			background-color: blue;
		}
			body {
				color: #FFFFF;
			}
			ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: lightblue;
			}
	li {
		float: left;
	}
	li a{
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}
	li a:hover:not(.active){
		background-color: blue;
	}
	.active {
		background-color: blue;
	}
	</style>
	
</head>
<body>
	<div id="container">
		<div id="header">
		<center><h1>Hospital +</h1></center>
	</div>
	<div id="content">
	
	<ul>
		<li><a class="active" href="#home">Home</a></li>
		<li><a href="#About Us">About Us</a></li>
		<li><a href="#Online">Online Appointment</a></li>
		<li><a href="#Contact Us">Contact Us</a></li>
	</ul>
	</div>
	
	<center><h2>Add-Doctors into the system</center></h2>
	
	<center><table border="2" height="500px" width="70%"></center>
		<tr>
			<tr bgcolor="blue">
			<th colspan="2">Sign Up</th>
		</tr>
		
		<tr bgcolor="lightblue">
			<th> <font color="blue" size="4"> First Name:</font></th>
			<th> <input type="text"> </th>
		</tr>
		
		<tr bgcolor="lightblue">
			<th> <font color="blue" size="4"> Last Name:</font></th>
			<th> <input type="text"> </th>
		</tr>
		
		<tr bgcolor="lightblue">
			<th> <font color="blue" size="4"> ID:</font></th>
			<th> <input type="text"> </th>
		</tr>
		
		<tr bgcolor="lightblue">
			<th> <font color="blue" size="4"> Email:</font></th>
			<th> <input type="text"> </th>
		</tr>
		
		<tr bgcolor="lightblue">
			<th> <font color="blue" size="4">Mobile Number:</th>
			<th> <input type="number"> </th>
		</tr>
		<tr bgcolor="lightblue">
			<th> <font color="blue" size="4">Role:</th>
			<th> <input type="role"> </th>
		</tr>	
		
		<tr bgcolor="lightblue">
			<th> <font color="blue" size="4">Gender</th>
			<th> <input type="radio">Male <input type="radio"> Female</th>
		</tr>
		
		<tr bgcolor="lightblue">
			<th> <font color="blue" size="4">Date Of Birth </font></th>
			<th><input type="date"></th>
		</tr>
		
		<tr bgcolor="blue">
		<th colspan="2">
		<input type="submit">
		<input type="reset">
		</th>
		
	</table>
	
		<div id="content">
	
	<div id="footer">
	<center>Copyright&developed by me.</center>
	</div>
	</div>
	
</body>
</html>




