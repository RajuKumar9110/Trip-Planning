<?php
	if(isset($_POST['name'])){
	$server = "localhost";
	$username = "root";
	$pssword = "";
	$Db="trip";

	$con = mysqli_connect($server, $username, $password, $Db);
	if(!$con){
		die("connect to this database faild due to" . mysqli_connect_error());
	}
	//echo "Success connecting to the db";
	$name = $_POST['name'];
	$gender =$_POST['gender'];
	$age =$_POST['age'];
	$email =$_POST['email'];
	$phone =$_POST['phone'];
	$desc=$_POST['dt'];
	
	$sql = "INSERT INTO `trip`.'trip' (`Name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', 
	'$age', '$gender', '$email', '$phone', '$other', current_timestamp());"
	//echo $sql;

	/*if($con->query($sql) == true){
		echo "successrully inserted";

	}else{
		echo "ERROR: $sql <br> $con->error";
	}
	$con->close();
	}*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to GEC Bhojpur Us Trip form</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        <p class="submitMsg">Thanks for submiting your form. We are happy to see you joining us for the US trip</p>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
            



        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>
