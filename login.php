<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css2app.css">
</head>
<body>
	<div class="container">
		<h1>Login Yourself!</h1>
		<form action="login.php" method="post">

			<label for="email">Email:</label>
			<input type="text" id="email" name="email" required>
            <label for="password">Password:</label>
			<input type="text" id="password" name="password" required>

			<!-- <input type="submit" value="Login" name="save">
			<a href="reg2.php"><input type="button" value="Registration"></a> -->

            <button class="submit_btn" type="submit" name="save">Login</button>
			<button class="submit_btn" onclick="window.location.href='reg2.php';" name="enter" type="button">Registration</button>
			
		</form>
	</div>
</body>
</html>


<?php 
        $servername="localhost:3306";
        $username="root";
        $password="";
        $dbname="miniproject";

        $conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connection failed  ".mysqli_error($conn));

}
if(isset($_POST['save'])){
    $uname=$_POST['email'];
    $password=$_POST['password'];

    $sql="select * from registration where email='$uname' and password='$password' ";
    $que=mysqli_query($conn,$sql);
    if(mysqli_num_rows($que)>0){
        echo "<script>alert('Login Success ')</script>";
        echo "<script>window.open('main.html','_self')</script>";
    }    
    else{
        echo "<script>alert('Wrong Username or password')</script>";
    }
}



?>