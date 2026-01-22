<?php
session_start();
$insert = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $con = mysqli_connect("localhost", "root", "", "trip");
    if (!$con) {
        die("Connection failed");
    }

    $name   = $_POST['name'];
    $age    = $_POST['age'];
    $gender = $_POST['gender'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
    $desc   = $_POST['desc'];

    $sql = "INSERT INTO trip (Name, age, gender, email, phone, other, dt)
            VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', CURRENT_TIMESTAMP)";

    if ($con->query($sql) === true) {
        $_SESSION['success'] = true;
        header("Location: index.php");
        exit();
    }

    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Welcome to GEC Bhojpur US Trip Form</h1>
    <p>Enter your details and submit the form</p>

<?php
if (isset($_SESSION['success'])) {
    echo "<p class='submitMsg'>Thanks for submitting your form.</p>";
    unset($_SESSION['success']); // clears after first display
}
?>


    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="Enter your name" required>
        <input type="number" name="age" placeholder="Enter your age" required>
        <input type="text" name="gender" placeholder="Enter your gender" required>
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="tel" name="phone" placeholder="Enter your phone" required>
        <textarea name="desc" rows="5" placeholder="Other information"></textarea>
        <button class="btn" type="submit">Submit</button>
    </form>
</div>

</body>
</html>
