
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css2app.css">
</head>
<body>
	<div class="container">
		<h1>Register Yourself!</h1>
		<form action="reg2.php" method="post">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>

			<label for="email">Email:</label>
			<input type="text" id="email" name="email" required>

			<label for="phone">Phone:</label>
			<input type="tel" id="phone" name="phone" required>

			<label for="gender">Gender:</label>
			<select id="gender" name="gender" required>
				<option value="">Select a Gender:</option>
				<option value="M">Male</option>
				<option value="F">Female</option>
				<option value="O">Other</option>
			</select>
            
			<label for="address">Address:</label>
			<textarea id="address" id="address" name="address"></textarea>

            <label for="password">Password:</label>
			<input type="text" id="password" name="password" required>

			<button class="submit_btn" type="submit">Submit</button>
			<button class="submit_btn" onclick="window.location.href='login.php';" name="enter" type="button">Login</button>

		</form>
	</div>
</body>
</html>

<?php 
        $servername="localhost:3306";
        $username="root";
        $password="";
        $dbname="miniproject";

        $conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed : ");

}
error_reporting(E_ERROR | E_PARSE);
$fname =$_POST['name'];
$lname =$_POST['email'];
$station =$_POST['gender'];
$email =$_POST['address'];
$password =$_POST['password'];


	


$sql="INSERT INTO `registration` (`name`, `email`, `gender`, `address`, `password`) VALUES ('$fname', '$lname', '$station', '$email', '$password') ";

if($conn->query($sql)==true){
    echo "<script>alert('Registration Success ')</script>";
}
else{
    echo "<script>alert('Registration fails ')</script>";
}

    $conn->close();

?>