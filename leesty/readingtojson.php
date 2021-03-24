<?php

include '../includes/dbconn.php';

if (isset($conn)) {

    $sqlqueryafterposting = "SELECT * FROM posts";

    $qryresults = mysqli_query($conn, $sqlqueryafterposting);

    if (mysqli_num_rows($qryresults) > 0) {
        while ($row = mysqli_fetch_assoc($qryresults)) {

            echo json_encode($row);

        }
    }


} else {
    echo "Nothing is Post " . mysqli_error($conn);


}