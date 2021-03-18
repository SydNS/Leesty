<?php

include '../includes/dbconn.php';

if (isset($conn)) {

    $sqlqueryafterposting = "SELECT * FROM posts";

    $qryresults = mysqli_query($conn, $sqlqueryafterposting);

    if (mysqli_num_rows($qryresults) > 0) {
        while ($row = mysqli_fetch_assoc($qryresults)) {
//
//            $rid=$row['id'];
//            $sqlquerydeletingpost = "DELETE FROM posts WHERE id='$rid'";
//            $qrydelete = mysqli_query($conn, $sqlquerydeletingpost);

            echo "<p> id is " . $row['id'] . " title is " . $row['title'] . " details is " . $row['details'] . "date poseted is " . $row['date'] . " <button>Del</button><br> </p>";
        }
    }


} else {
    echo "Nothing is Post " . mysqli_error($conn);


}