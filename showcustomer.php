<?php
include ("connection.php");

$sql = "SELECT * FROM customers";
$result = mysqli_query($con, $sql);

$customers = [];
if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)) {
        $customers[] = $row;
    }
}else{
    echo "No records yet in the database";
}
?>