<?php
;
include '../includes/dbconn.php';

if (isset($_POST['subbutton'])){

    $posttittle=$_POST['title'];
    $details=$_POST['details'];
    $author=$_POST['author'];
//    $posttittle=$_POST['title'];
//    $posttittle="Marriage2";
//    $details="I am not the one whole told you not to get Married 2";
//    $author="Bruce 2";

    $sqlquery = "INSERT INTO posts( title, details, author)  VALUES ('$posttittle' , '$details','$author')";

    if (isset($conn)) {
        $qryresults=mysqli_query($conn,$sqlquery);
        if ($qryresults){
            echo "Success Post";
            $sqlquery = "SELECT * FROM posts";



        }else{
            echo "Nothing is Post ".mysqli_error($conn);
        }

    }
}


?>

<html>
<title>
    Posting Page
</title>
<head>
    <link href="" rel="stylesheet">
</head>
<body>
<form method="post">
    <label>Title</label> <br>
    <input name="title" type="text" required> <br>
    <label>Details</label> <br>
    <input name="details" type="text" required> <br>
    <label>Author</label> <br>
    <input name="author" type="text" required> <br>
    <input name="subbutton" type="submit">
</form>

</body>


</html>
