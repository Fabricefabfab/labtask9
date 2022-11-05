<?php
if (isset($_GET["register"])) {
	
	?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ecommerce</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Ecommerce Site</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span> Product</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading text-center">Customer Registration Form</div>
					<div class="panel-body">
					
					<form class="col-md-12 col-md-offset-3" id="signup_form" onsubmit="return false">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">Customer name</label>
								<input type="text" id="name" name="name" class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="email">Customer Email</label>
								<input type="text" id="email" name="email"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="password">Password</label>
								<input type="password" id="password" name="password"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="repassword">Confirm Password</label>
								<input type="password" id="repassword" name="repassword"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="mobile">Contact Number</label>
								<input type="text" id="phone" name="phone"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="country">Customer country</label>
								<input type="text" id="country" name="country"class="form-control" required>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label for="city">Customer City</label>
								<input type="text" id="city" name="city"class="form-control" required>
							</div>
						</div>



						<div class="row">
							<div class="col-md-6">
								<label for="avatar"><br>Your picture:</label>
								<input type="file"
									id="avatar" name="avatar"
									accept="image/png, image/jpeg">
							</div>
					    </div>


						<div class="row">
							<div class="col-md-6">
								<label for="role"><br>User role:</label>
								<select name="role" id="role">
									<option value="role">1</option>
									<option value="role">2</option>
								</select>
							</div>
						</div>

						<p><br/></p>
						<div class="row">
							<div class="col-md-6">
								<input style="width:100%;" value="Sign Up" type="submit" name="signup_button"class="btn btn-success btn-lg">
							</div>
						</div>
						
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
	<?php
}



?>






















