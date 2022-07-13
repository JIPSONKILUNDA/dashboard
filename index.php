<?php
require_once('logics/dbconnection.php');
$querystudent =mysqli_query($conn, "SELECT * FROM enrollment");
$countALLstudents = mysqli_num_rows($querystudent);
//count by gender
$queryEnrolledFemale = mysqli_query($conn, "SELECT * FROM enrollment");
$countALLFemale = mysqli_num_rows($queryEnrolledFemale);
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
				<div class="col-lg-12  pt-5">
					<div class="card-header bg-dark text-white text-center">
						<span>student</span>

					</div>
					<div class="card-body"></div>
					<span><i class="fa fa-folder-open            "></i></span>
					<span class= "float-end badge bg-dark rounded-pill"><?php echo $countALLstudents?></span>
					<div class="card-footer"></div>
					</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Top content</span>
</div>
		<div class="card-body"></div>
		<div class="card-footer"></div>
		</div>
		<div class="col-lg-3">
			<div class="card-header bg-dark text-white text-center">
				<span>Top content</span>
</div>
<div class="card-body"></div>
		<div class="card-footer"></div>
		</div>
		<div class="col-lg-3">
			<div class="card-header bg-dark text-white text-center">
				<span>Top content</span>
</div>
<div class="card-body"></div>
		<div class="card-footer"></div>
		</div>
		<div class="col-lg-3">
			<div class="card-header bg-dark text-white text-center">
				<span>student Analysis</span>
</div>
			</div>

		</div>
		<!-- main content here -->
	</div>
	<div class="row">
		<div class="col-lg-3">
			<div class="card-header bg-dark text-white-ce">
				<span>Students</span>

			</div>
			<div class="card-body">
				<span><i class="fa fa-group fa-3x"></i></span>
				<span class="float-right">00</span>

			</div>
			<div class="card-footer">

			</div>

		</div>
		<div class="col-lg-3">
			<div class="card-header bg-dark text-white text-center">
				<span>Top content</span>
			</div>
		</div>

	</div>
	<?php require_once('includes/scripts.php')?>
	
</body>
</html>