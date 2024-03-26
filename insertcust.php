<?php
include ("connection.php");

if (isset($_POST['save_btn'])){
    $customerName = test($_POST['name']);
    $customerPhone = test($_POST['phone']);
    $gender = test($_POST['gender']);
    $family = test($_POST['family']);
    $bustSize = test($_POST['bust']);
    $halfLength = test($_POST['hl']);
    $fullLength = test($_POST['fl']);
    $underBust = test($_POST['ub']);
    $shoulder = test($_POST['shoulder']);
    $waist = test($_POST['waist']);
    $handSleeve = test($_POST['hs']);
    $hips = test($_POST['hips']);
    $crotch = test($_POST['crotch']);
    $chest = test($_POST['chest']);

    $sql = "INSERT INTO customers(CustomerName, CustomerPhone, Sex) VALUES ('$customerName', '$customerPhone',
        '$gender')";
    $sql2 = "INSERT INTO measurements(CustomerName, Bust,
     H_L, F_L, U_B, Shoulder, Waist, H_S, Hips, Crotch, Chest) VALUES ('$customerName', '$bustSize',
    '$halfLength', '$fullLength', '$underBust', '$shoulder', '$waist', '$handSleeve',
    '$hips', '$crotch', '$chest')";

    $result = mysqli_query($con, $sql);
    $result1 = mysqli_query($con, $sql2);
    if($result){
        echo "<h3>data stored successfully.</h3>";
        header("Refresh:3; url=customers.html", true, 303);
    }else{
        echo "<h3>data not stored successfully.</h3>";
        header("Refresh:3; url=newcust.html", true, 303);
    }

} else {
    header("Location:newcust.html");
    exit(0);
}
function test($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>