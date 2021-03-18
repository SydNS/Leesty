<?php
;
include '../includes/dbconn.php';

$title="Marriage";
$details="I am not the one whole told you not to get Married";
$author="Bruce";

$sqlquery = "INSERT INTO posts('id', 'title', 'details', 'author', 'date')  VALUES ($title , $details,$author  )";

if (isset($conn)) {
    $qryresults=mysqli_query($conn,$sqlquery);
    if ($qryresults){
        echo "Success Post";
    }
}
?>