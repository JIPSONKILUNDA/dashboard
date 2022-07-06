<?php
require_once('logics/dbconnection.php');
$sql = mysqli_query($conn, "SELECT * FROM enrollment");
?>
<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php')?>
<body>
	
		
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php')?>

	<div class="sidebar">
	<?php require_once('includes/sidebar.php')?>

		
	</div>
	<div class="main content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 pt-5">
					<div class="card-header bg-dark text-white text-center">
						<span>Top content</span>

					</div>
					<div class="card-body">
						<table class="table table-striped table-hover table-responsive">
							<thead>
								<tbody>
								
								</tbody>
								<tr>
									<th>No.</th>
									<th>Full Name</th>
									<th>Phone Number</th>
									<th>Email</th>
									<th>Gender</th>
									<th>Course</th>
									<th>Enrolled on</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php while($fetchEnrollmentRecord= mysqli_fetch_array($sql)) { ?>
										<tr>
											<td><?php echo $fetchEnrollmentRecord['no'] ?></td>
											<td><?php echo $fetchEnrollmentRecord['fullname'] ?></td>
											<td><?php echo $fetchEnrollmentRecord['phonenumber']?></td>
											<td><?php echo $fetchEnrollmentRecord['email']?></td>
											<td><?php echo $fetchEnrollmentRecord['Gender']?></td>
											<td><?php echo $fetchEnrollmentRecord['course'] ?></td>	
											<td><?php echo $fetchEnrollmentRecord['created-at'] ?></td>	
											<td>
												<a href="edit-enrollment.php?id=<?php echo $fetchEnrollmentRecord['no']?>" class="btn btn-info btn-sm">
												<i class="fa fa-edit"></i>
											</a>
						
										<a href="#" class="btn btn-info btn-sm">
											<i class="fa fa-eye"></i>
										</a> 
										<a href="#" class="btn btn-danger btn-sm">
											<i class="fa fa-trash"></i>
										</tr>
										<?php } ?>
							</tbody>
						</table>
					</div>
					<div class="card-footer"></div>
					</div>
                </div>
	        </div>
        </div>
    </div>


<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>