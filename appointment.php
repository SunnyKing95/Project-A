<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<title>Medics</title>
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

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
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
				<center><h1>Welcome to Hospital +</h1></center>
			</div>
		<div id="content">
		
		<ul>
			<li><a class="active" href="#home">Home</a></li>
			<li><a href="#Abous Us">About Us</a></li>
			<li><a href="#Online Appointment">Online Appointment</a></li>
			<li><a href="#Contact Us">Contact Us</a></li>
		</ul>
		
		</div>
		<center><h2>Book Appointment</h2></center>
		
			<div>	
			<label for="fname">First Name:</label>
			<input type="text" id="fname" name="fname"><br><br>
			</div>
			
			<div>
			<label for="lname">Last Name:</label>
			<input type="text" id="lname" name="lname"><br><br>
			</div>
			
			<div>
			<label for="patient">Patient Number:</label>
			<input type="text" id="patient" name="patient"><br><br>
			</div>
			
			<div>
			<label for="number">Number:</label>
			<input type="text" id="number" name="number"><br><br>
			</div>
			
			<div>
			<label for="reason">Your Reason:</label>
			<textarea id="reason" name="reason" placeholder="Your Reason" style="height:100px"></textarea>
			</div>
			
			<div>
				<label for="doctor">Doctor:</label>
				<select id="doctor">
					<option value="John">John</option>
					<option value="Mike">Mike</option>
					<option value="Alex">Alex</option>
				</select>
			</div>
			
		<label for="date">Date for appointment</label>
		<input type="date" id="date" name="date" placeholder="date" required>
			
		<label for="time">Time for appointment</label>
		<input type="time" id="time" name="time" placeholder="Time" required>
		
				<div id="footer">
			<center>Copyright@developed by me.</center>
		</div>
</body>
</html>