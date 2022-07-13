<?php
require_once('logics/dbconnection.php');
"DELETE FRO, enrollment WHERE no ='".$_GET['id']."' ");
if($sqqDeleteStudent)
{
    echo "user deleted successfully";

}
else
{
    echo "Errol occured.please try again";
}
?>