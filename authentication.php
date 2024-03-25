<?php
session_start();
include ("connection.php");


if (isset($_POST['email'])) {

    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);

    $sql = "SELECT * FROM login WHERE email ='$email' AND password = '$password'";
    $result = mysqli_query($con, $sql);
         
    if (mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];

        header("Location:dashboard.html");
       
    } else {
        echo $_SESSION['message'] = "Invalid Email or Password";
        header( "Refresh:5; url=login.html", true, 303);
        exit(0);
    }
} else {
    header("Location: login.html");
    exit(0);
}
?>










