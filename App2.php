<!DOCTYPE html>
<html>
<head>
	<title>Appointment Booking Form</title>
	<link rel="stylesheet" type="text/css" href="css1app.css">
</head>
<body>
	<div class="container">
		<h1>Book an Appointment</h1>
		<form action="App2.php" method="post">
			<label for="name">Car Model Name:</label>
			<input type="text" id="name" name="model" required>

			<label for="email">Year Of Purchase:</label>
			<input type="text" id="email" name="purchase" required>

			<label for="phone">Phone:</label>
			<input type="tel" id="phone" name="phone" required>

			<label for="date">Date:</label>
			<input type="date" id="date" name="date" required>

			<label for="time">Time:</label>
			<input type="time" id="time" name="time" required>

			<label for="service">Service:</label>
			<select id="service" name="service" required>
				<option value="">Select a service</option>
				<option value="Full Service+Wash">Full Service+Wash</option>
				<option value="Full Service Only">Full Service Only</option>
				<option value="Partial Service Of Disfunctional Parts">Partial Service Of Disfunctional Parts</option>
			</select>
            
			<label for="description">Description of modification if want to!:</label>
			<textarea id="description" name="description"></textarea>
            
            <label for="color">Choose color for modification:</label>
            <input type="color" id="color" name="color"><br><br>
            
            <label for="alloy">Alloys:</label>
			<select id="alloy" name="alloy" required>
				<option value="">Select alloy type</option>
				<option value="Premium Alloys">Premium Alloys</option>
				<option value="Standard Alloys">Standard Alloys</option>
				<option value="Basic Alloys">Basic Alloys</option>
			</select>

            
			<button class="submit_btn" type="submit">Book Appointment</button>
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
$model =$_POST['model'];
$purchase =$_POST['purchase'];
$phone =$_POST['phone'];
$date =$_POST['date'];
$time =$_POST['time'];
$service =$_POST['service'];
$description =$_POST['description'];
$color =$_POST['color'];
$alloy =$_POST['alloy'];


	


$sql="INSERT INTO `appointment` (`model`, `purchase`, `phone`, `date`, `time`, `service`, `description`, `alloy`) VALUES ('$model', '$purchase', '$phone', '$date', '$time', '$service', '$description' ,'$alloy') ";

if($conn->query($sql)==true){
    echo "<script>alert('Registration Success ')</script>";
}
else{
    echo "<script>alert('Registration fails ')</script>";
}

    $conn->close();

?>