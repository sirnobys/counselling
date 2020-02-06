<?php

if(isset($_POST['register'])){
	$dbServername='localhost';
	$dbusername='root';
	$dbPassword='';
	$dbName='oc';

	$db = new mysqli($dbServername,$dbusername,$dbPassword,$dbName);
	
	//var_dump($_POST);exit;
	// $sql="INSERT INTO messages(message,location) VALUES ($txt,$location);";
	// mysqli_query($conn,$sql);

	$username = $_POST['username'];
	$email= $_POST['email'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	// echo $username;
	$check_data_sql = "SELECT * FROM users WHERE username= '{$username}' OR email= '{$email}'";
	

	$check_data = $db->query($check_data_sql);


	if(empty($pass) or empty($cpass)){

		echo("<script>alert('PAss cant be empty');</script>");


	}

	else if (strlen($_POST['username']) <5){
		echo("<script>alert('Username cant be empty');</script>");
	}


   else if($check_data->num_rows > 0){
    	//$data = $check_data->fetch_assoc();
		$message = $username.' already exist';
		// $data = [];
		/*while($row = $check_data->fetch_assoc()){
             $data[] = $row;
		}*/
    }else{ 
    	$insert_data_sql = "INSERT INTO users (`username`,`email`,`password`) VALUES ('{$username}','{$email}','{$pass}')";
    	$insert_data = $db->query($insert_data_sql);
    	//if($insert_data->insert_id)

	}





// 	$error="";
// 	$sql_code = "SELECT * FROM vouchers WHERE voucher = '$code' AND status = 0";
// 	$code_is_used = "SELECT * FROM vouchers WHERE voucher = '$code' AND status = 1";
// 	// var_dump($sql_code);
// 	$sql_code = mysqli_query($conn,$sql_code);
// 	$code_is_used= mysqli_query($conn,$code_is_used);


// 	if (empty($code)) {
// 		$error="Jon! type in something";

// 			}



// 	else if(mysqli_num_rows($sql_code) > 0)

// 	{   echo("<script>
// 				window.alert('Logged in successfully');
// 			  </script>


// 			")	;
		
// 		$code_var = "INSERT INTO used_coupons(`codes`) VALUES ('$code')";
// 		$code_used = mysqli_query($conn,$code_var);
// 		if ($code_used) {
			
// 			$code_remove = "UPDATE vouchers SET status = 1 WHERE voucher = '$code'";
// 			$code_update = mysqli_query($conn,$code_remove);
// 		}
		

// 		header("location:home.php?coupon=$code");
// 	}

// 	else if(mysqli_num_rows($code_is_used)>0){ 
// 		$error="code is used dada jon!";
		
// 	}


// 	else{
// 		$error="coupon is invalid masa! be serious";
// 	}
}

?>





