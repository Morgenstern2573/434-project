<?php
include ("connection.php");

if (isset($_POST['save_btn'])){
    $customerName = $_REQUEST['name'];
    $customerPhone = $_REQUEST['phone'];
    $gender = $_REQUEST['gender'];
    $family = $_REQUEST['family'];
    $bustSize = $_REQUEST['bust'];
    $halfLength = $_REQUEST['hl'];
    $fullLength = $_REQUEST['fl'];
    $underBust = $_REQUEST['ub'];
    $shoulder = $_REQUEST['shoulder'];
    $handSleeve = $_REQUEST['hs'];
    $hips = $_REQUEST['hips'];
    $crotch = $_REQUEST['crotch'];
    $chest = $_REQUEST['chest'];

    $sql = "INSERT INTO customer VALUES ('customerName', 'customerPhone',
        'gender', 'family', 'bustSize', 'halfLength', 'fullLength', 'underBust',
        'shoulder', 'handsleeve', 'hips', 'crotch', 'chest')";

    $result = mysqli_query($con, $sql);
    if($result){
        echo "<h3>data stored successfully.</h3>";
        header("Location: customers.html");
    }else{
        header("Location: newcust.html");
    }

} else {
    header("Location: newcust.html");
    exit(0);
}
?>