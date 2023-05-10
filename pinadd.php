
<?php
    include_once 'dbConnection.php';
    $ref=@$_GET['q'];
    //$name = $_POST['name'];
    //$name= ucwords(strtolower($name));
    //$gender = $_POST['gender'];
    $pin = $_POST['pin'];

    $check2=mysqli_query($con,"select * from pi_n_code where pincode = '$pin' ");

    $row2=mysqli_num_rows($check2);
    
    if($row2 > 0 ){
        echo"<script>alert('There is a similar PIN... Do change it')</script>";
         
    }
	else{
        $q=mysqli_query($con,"INSERT INTO pi_n_code (pincode) VALUES  ('$pin')")or die(mysqli_error($con));
    }

    header("location:headdash.php?q=7");

?>