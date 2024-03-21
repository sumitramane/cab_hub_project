<?php

$server_name="localhost";

$username="root";

$password="";

$database_name="cab";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{die("Connection Failed:" . mysqli_connect_error());}
if(isset($_POST['save']))
{	
	 $Name = $_POST['Name'];
	 $Mobile_No = $_POST['Mobile_No'];
	 $From_city = $_POST['From_city'];
	 $To_city = $_POST['To_city'];
	 $PickUp_point = $_POST['Pick-up_point'];
	 $DropUp_point = $_POST['Drop-up_point'];
	 $Time = $_POST['Time'];
	 $Date = $_POST['Date'];


	 $sql_query = "INSERT INTO `entry_details`(`Name`, `Mobile_No`, `From_city`, `To_city`, `Pick-up_point`, `Drop-up_point`, `Time`, `Date`)
	 VALUES ('$Name','$Mobile_No','$From_city','$To_city','$PickUp_point', '$DropUp_point', '$Time', '$Date')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "Booking successfully !!";
	} 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>