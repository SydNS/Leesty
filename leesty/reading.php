<?php
if (isset($conn)) {
    $qryresults=mysqli_query($conn,$sqlquery);
    if ($qryresults){
        echo "Success Post";
        $sqlqueryafterposting = "SELECT * FROM posts";
        $qryresults=mysqli_query($conn,$sqlqueryafterposting);

        if (mysqli_num_rows($qryresults)>0){
            while ($row=mysqli_fetch_assoc($qryresults)){
                echo "<p> id is " .$row['details'] . "<br> </p>";
            }
        }



    }else{
        echo "Nothing is Post ".mysqli_error($conn);
    }

}