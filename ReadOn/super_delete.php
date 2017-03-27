<?php include('config/config.php');	
session_start();
if(isset($_GET['a_id'])){
	$authors_id=$_GET['a_id'];
$sql="DELETE FROM authors WHERE a_id='".$authors_id."'"; 
	$result = mysqli_query($conn, $sql);
		if($result){
			header("Location: supperpage.php");
		}	
}
			
?>
