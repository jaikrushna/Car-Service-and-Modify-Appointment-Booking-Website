<?php  
require 'db.php';
	$name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $address = $conn->real_escape_string($_POST['address']);
    $password = $conn->real_escape_string($_POST['password']);

	$sql = "INSERT INTO registration (name,email,gender,address,password) 
    VALUES ( '".$name."', '".$email."', '".$gender."', '".$address."' , '".$password."')";
    $success = $conn->query($sql);

    if(!$success){
       die("Couldnt enter data: ".$conn->error);
    } 
    echo "Thankyou for contacting";
    $conn->close();
    // else{
    //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    // }
    // mysqli_close($conn);

// }
?>