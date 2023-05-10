<?php
include_once 'dbConnection.php';
ob_start();

//form validation to avoid exploit
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//exploit ends

$name = $_POST['name'];
$name= ucwords(strtolower($name));
$gender = $_POST['gender'];
$email = test_input($_POST['email']);
$college = $_POST['college'];
$mob = $_POST['mob'];
$pin=test_input($_POST["pin"]);
// $pin = $_POST['pin'];
$password = $_POST['password'];
$password = md5($password);

$check2=mysqli_query($con,"select * from user where email='".mysqli_real_escape_string($con,$email)."' ");

$row2=mysqli_num_rows($check2);
	
$check1=mysqli_query($con,"select * from pi_n_code where pincode='".mysqli_real_escape_string($con,$pin)."' ");

$row1=mysqli_num_rows($check1);
    
if($row2 > 0 ){
         echo"<script>alert('email or Pin already exists')</script>";
        header("location:index.php?q7=Email Already Registered!!!");
         
	}
	elseif($row1 < 0){
		//echo"<script>alert('Your pin is correct')</script>";
   }
    
else{
    if($row2==0 && $row1==1){

$q3=mysqli_query($con,"INSERT INTO user VALUES  ('$name' , '$gender' , '$college','".mysqli_real_escape_string($con,$email)."' ,'$mob', '$password', '".mysqli_real_escape_string($con,$pin)."')");

// $result = mysqli_query($con,"DELETE FROM pi_n_code where pincode='".mysqli_real_escape_string($con,$pin)."' ");
//         if(!empty($result)){						
//             echo "<script> alert('Successful !!!')</script>";
//         }else{
            
//         }
    }
}

if(@$q3)
{
    $result = mysqli_query($con,"DELETE FROM pi_n_code where pincode='".mysqli_real_escape_string($con,$pin)."' ");
        if(!empty($result)){						
            echo "<script> alert('Successful !!!')</script>";
        }else{
            
        }
    session_start();
    $_SESSION["email"] = $email;
    $_SESSION["name"] = $name;
    // $_SESSION["pincode"] = $pin;

    header("location:account.php?q=1");
}
else
{
    echo"<script>alert('the PIN you entered does not exist, please try again..')</script>";    
    header("location:index.php?q8=PIN does not exist!!!");
}
ob_end_flush();
?>