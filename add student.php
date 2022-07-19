<?php
$SERVER="localhost";
$username="root";
$password="";
$database="zalego";

$conn = mysqli_connect($SERVER,$username,$password,$database);
if( isset($_POST['submitbutton']))         
{
    //1. fetch form dats
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $message = $_POST['message'];
    //2. submit form data
    $insertdata = mysqli_query($conn, "INSERT INTO 
                    contactus(firstname, lastname,email,phonenumber,message)
                    VALUES('$firstname','$lastname','$email','$phonenumber','$message')");
                    
    
    if($insertdata)
    {
        echo "data submitted succefully";
    }
    else{
        echo "Error occured" .mysqli_error($conn);
    }

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
	<div class="main-content">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 pt-5">
                    <div class="card p-3">
                        <div class="card-header bg-dark text-white text-center" >
                            <h4>Add Student</h4>

                        </div>
                        <div class="card-body">
                            <form action="add student.php?> method="POST">
                                <div class="row">
                                    <div class="mb-3 col-lg-6">
                                        <label for="fullname" class="form-label"> fullname</label>
                                        <input type="text" name="fullname" class="form-control" placeholder="Enter your fullname">
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="phonenumber" class="form-label">phonenumber</label>
                                        <input type="number" name="phonenumber" class="form-control" placeholder="Enter your phonenumber">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-lg-6">
                                        <label for="email" class="form-label">email </label>
                                        <input type="email" name="email"class="form-control" placeholder="Enter your email">
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label for="gender" class="form-label">gender</label>
                                        
                                        <select name="gender" class="form-control" >
                                            <option value=""></option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="whats your prefered course?" class="form-label">what is your prefered course</label>
                                        <select name="course" class="form-control">                                        
                                            <option value=""></option>
                                            <option value="web design">web design</option>
                                            <option value="cyber security">cyber security</option>
                                        </select>
                                    </div>
                                </div>
                              
                                <div class="row pt-5">
                                    <div class="col-lg-4">                                    
                                        <button type="submit" name="submit" class="btn btn-primary">submit</button>  

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