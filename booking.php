<?php
echo "here hello\n";// Starting Session
if(isset($_POST['submit']))
{
	echo "here2";
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "resto";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error)
	{
		echo "fail";
		die("Connection failed: " . $conn->connect_error);
	} 
	else
	{
		$cname = $_POST['name'];
        $date = $_POST['date'];
        $email = $_POST['email'];
        $time = $_POST['time'];
        $phone = $_POST['phone'];
        $people = $_POST['people']; 
			$sql1 = "INSERT INTO booking (cname,phone_number,email,people,bdate,btime) VALUES ('$name', '$phone', '$email', '$people', '$date', '$time')";
        }
        if ($conn->query($sql1) == TRUE)
			{
				echo "hello";
			}
			else
			{
				echo "naah";
			}
		header("Location: book1.html");
	}
	else{echo "not set";}
?>