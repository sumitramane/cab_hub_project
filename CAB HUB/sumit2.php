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
	 $Email = $_POST['Email'];
	 $MobileNumber = $_POST['MobileNumber'];
	 $Subject = $_POST['Subject'];
	 $TextArea = $_POST['TextArea'];
	
	 $sql_query = "INSERT INTO `feedback`(`Name`, `Email`, `MobileNumber`, `Subject`, `TextArea`)
	 VALUES ('$Name','$Email','$MobileNumber','$Subject','$TextArea')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "feedback inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>