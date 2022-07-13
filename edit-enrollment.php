<?php
require_once('logics/dbconnection.php');
$querystudent =mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']."'");
while($fetchstudent = mysqli_fetch_array($querystudent))
{
    $id = $fetchstudent['no'];
     $fullname =$fetchstudent['fullname'];
     $phonenumber =$fetchstudent['phonenumber'];
     $email =$fetchstudent['email'];
     $gender=$fetchstudent['Gender'];
     $course=$fetchstudent['course'];
     
}
require_once('logics/process-update.php');
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
                        <div class="card">
                            <form action="enroll.php" method="POST">
                                <div class="row">
                                    <div class="mb-3 col-lg-6">
                                        <label for="fullname" class="form-label"> fullname</label>
                                        <input type="text" name="fullname" value="<?php echo $fullname?>" class="form-control" placeholder="Enter your fullname">
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="phonenumber" class="form-label">phonenumber</label>
                                        <input type="number" name="phonenumber" value="<?php echo $phonenumber?>" class="form-control" placeholder="Enter your phonenumber">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-lg-6">
                                        <label for="email" class="form-label">email </label>
                                        <input type="email" name="email" value="<?php echo $email?>" class="form-control" placeholder="Enter your email">
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="gender" class="form-label">gender</label>
                                        <option value="">--select your gender--</option>
                                        <select name="gender" value="<?php echo $phonenumber?>"class="form-control" >
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>

                                        </select>
                                        <div class="row pt-3">
                                            <div class="col-lg-6">
                                        <button type="submit" class="btn btn-primary">Update records</button>
                                        </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="whats your prefered course?" class="form-label">what is your prefered course</label>
                                        <option value="">--select your course--</option>
                                        <select name="course" class="form-control">
                                            <option value="web design">web design</option>
                                            <option value="cyber security">cyber security</option>
                                        </select>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">submit application</button>  
                                </div>
                              
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="email" class="form-control" placeholder="enter your email address">
                                    </div>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
    	    <?php require_once('includes/scripts.php')?>
</body>

</html>