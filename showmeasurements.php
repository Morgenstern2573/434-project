<?php
include ("connection.php");

$sql = "SELECT * FROM measurements";
$result = mysqli_query($con, $sql);

$measurements = [];
if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)) {
        $measurements[] = $row;
    }
}else{
    echo "No records yet in the database";
}
?>