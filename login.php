<?php
include "db.php";

session_start();

#Login script is begin here 
if(isset($_POST["email"]) && isset($_POST["password"])){
	$email = mysqli_real_escape_string($con,$_POST["email"]);
	$password = md5($_POST["password"]);
	$sql = "SELECT * FROM customer WHERE customer_email = '$email' AND customer_pass = '$password'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);

	//if user record is available in database then $count will be equal to 1
	if($count == 1){
		$row = mysqli_fetch_array($run_query);
		$_SESSION["uid"] = $row["customer_id"];
		$_SESSION["name"] = $row["customer_name"];
		$ip_add = getenv("REMOTE_ADDR");
			//if user is login from page we will send login_success
			echo "login_success";
			exit();
		}else{
			echo "<span style='color:red;'>Please register before login..!</span>";
			exit();
		}
	
}

?>