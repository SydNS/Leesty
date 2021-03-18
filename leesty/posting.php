<?php
;
include '../includes/dbconn.php';

$posttittle="Marriage2";
$details="I am not the one whole told you not to get Married 2";
$author="Bruce 2";

$sqlquery = "INSERT INTO posts( title, details, author)  VALUES ('$posttittle' , '$details','$author')";

if (isset($conn)) {
    $qryresults=mysqli_query($conn,$sqlquery);
    if ($qryresults){
        echo "Success Post";
    }else{
        echo "Nothing is Post ".mysqli_error($conn);
    }

}
?>