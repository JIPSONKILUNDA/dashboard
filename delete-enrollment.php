<?php
require_once('logics/dbconnection.php');
$sqlDeleteStudent =mysqli_query ($conn,
"DELETE FROM enrollment WHERE no='".$_GET['id']."' ");
if($sqlDeleteStudent)
{
    echo "user deleted successfully";
header('location:student.php');
}
else
{
    echo "Error occured.please try again";
}
?>