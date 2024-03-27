<?php
include ("connection.php");

$sql = "SELECT * FROM family_accounts";
$result = mysqli_query($con, $sql);

$families = [];
if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)) {
        $families[] = $row;
    }
}else{
    echo "No records yet in the database";
}
?>