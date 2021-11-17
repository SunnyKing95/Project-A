<?php
mysqli_connect("localhost","root","");
$db = mysqli_select_db("my_medic");
if (!$db)
{
	echo "Not Connected";
}
else
{
	echo "Connected";
}
?>