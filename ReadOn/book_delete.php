<?php

include ('config/config.php');
session_start();
if (isset($_GET['b_id'])) {

            $book_id= $_GET['b_id'];

  $sql="DELETE FROM books WHERE b_id='".$book_id."'";

  $result= mysqli_query($conn,$sql);

  if ($result) {


  	header("Location: supperpage.php");
  	# code...
  }




	# code...
}

?>