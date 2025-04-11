<?php
session_start() ;
include "db.php" ;
$email=$_POST['email'] ;
$pwd=$_POST['pwd'] ;
//exit();

if($con){
	//echo "connected";
	echo $sql="select * from admin where email='$email' and pwd='$pwd'";
	
	echo $x=mysqli_num_rows(mysqli_query($con,$sql));
	//exit();
	if($x==1){
		$_SESSION['email']=$email;
		header("location:dashboard.php");


	}
	else{ ?>
<script>
alert("wrong login details");
window.location="index.php";
</script>
<?php
	}

	

}

?>






