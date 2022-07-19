<?php
require_once('logics/dbconnection.php');
$sql = mysqli_query($conn, "SELECT * FROM contactus");
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
	<div class="main-content">
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
									<th>Firstname</th>
			
                                    <th>lastname
                                    </th>
									<th>Email</th>
									<th>phonenumber</th>
									<th>message</th>
									<th>created-at</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php while($fetchcontactusRecord= mysqli_fetch_array($sql)) { ?>
										<tr>
											<td><?php echo $fetchcontactusRecord['no'] ?></td>
											<td><?php echo $fetchcontactusRecord['firstname'] ?></td>
											<td><?php echo $fetchcontactusRecord['lastname']?></td>
											<td><?php echo $fetchcontactusRecord['email']?></td>
											<td><?php echo $fetchcontactusRecord['phonenumber']?></td>
											<td><?php echo $fetchcontactusRecord['message'] ?></td>	
											<td><?php echo $fetchcontactusRecord['created-at'] ?></td>	
											<td>
												
											</a>
												<a href="contactus.php.php?id=<?php echo $fetchcontactusRecord['no']?>"class="btn btn-info btn-sm">
													<i class="fa fa-envelope"></i>
                                </a>
								<a href="edit-enrollment.php?id=<?php echo $fetchcontactusRecord['no']?>" class="btn btn-info btn-sm">
													<i class="fa fa-edit"></i>
								</a>
												<a href="delete-enrollment.php?id=<?php echo $fetchcontactusRecord['no']?>"class="btn btn-info btn-sm">
													<i class="fa fa-trash"></i>
												</a>
												<a>
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