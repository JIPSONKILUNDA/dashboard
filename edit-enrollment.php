<?php
require_once('logics/dbconnection.php');
$querystudent =mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']."'");
while($fetchstudent = mysqli_fetch_array($querystudent))
{
     $fullname =$fetchstudent['fullname'];
     
}
?>

<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php')?>
<body>
	
        <?php require_once('includes/navbar.php')?>
	<div class="sidebar">
	    <?php require_once('includes/sidebar.php')?>
	</div>
	<div class="main content">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 pt-5">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center" >
                            <h4>Edit student<?php echo $fullname?></h4>
                        </div>

                    </div>
                </div>
            </div>
		</div>

	</div>
    	    <?php require_once('includes/scripts.php')?>
</body>

</html>