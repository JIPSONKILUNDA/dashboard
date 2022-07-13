<?php
//1.database connection
 require_once('logics/dbconnection.php');

 $sqlFetchEnrolledStudent =mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']."'");

 while($fetchstudent= mysqli_fetch_array($sqlFetchEnrolledStudent))
 {
    $fullname =$fetchstudent['fullname'];
    $email =$fetchstudent['email'];
    $phonenumber =$fetchstudent['phonenumber'];
    $Gender=$fetchstudent['Gender'];
    $course =$fetchstudent['course'];
    $createdat =$fetchstudent['created-at'];
 }
?>
<!DOCTYPE html>
<html>
<?php require_once('logics/dbconnection.php');?>
<body>
    <!-- All our code. write here -->
<?php require_once('includes/headers.php')?>
	
        <?php require_once('includes/navbar.php')?>
	<div class="sidebar">
	    <?php require_once('includes/sidebar.php')?>
	</div>
	<div class="main-content">
		<div class="container-fluid">
            <div class="row pt-5">
        <div class="col-lg-6 pt-5">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center">
                    <div class="card-title">Personal information</div>
                    </div>
                    <div class="card-body"></div>
                        <ul class="list-group">
                            
                        <li class="list-group-item">full Name: <span class="float-end badge bg-primary"><?php echo $fullname?></span></li>
                        <li class="list-group-item">Email:<span class="float-end badge bg-secondary"><?php echo $email?></span></li>
                        <li class="list-group-item">phone Number:<span class="float-end badge bg-danger"><?php echo $phonenumber?></span></li>
                      
                    </ul>
                </div>
                </div>
                <div class="col-lg-6 pt-5">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center">
                    <div class="card-title">Other Information</div>
                    </div>
                    <div class="card-body"></div>
                        <ul class="list-group">
                        <li class="list-group-item">gender: <span class="float-end badge bg-primary"><?php echo $Gender?></span></li>
                        <li class="list-group-item">course:<span class="float-end badge bg-secondary"><?php echo $course?></span></li>
                        <li class="list-group-item">created-at:<span class="float-end badge bg-danger"><?php echo $createdat?></span></li>
                        
                    </ul>
                </div>
                </div>

            </div>
	</div>
    </div>

    	    <?php require_once('includes/scripts.php')?>
</body>

</html>