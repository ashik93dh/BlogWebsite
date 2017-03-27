<?php include('config/config.php');
$rs=$_REQUEST['book_id'];
$chk="SELECT * FROM books WHERE b_id='".$rs."'";
$result=mysqli_query($conn, $chk);
		if (mysqli_num_rows($result) > 0) {
					
					while($row = mysqli_fetch_assoc($result)) {
					 $re="UPDATE `books` SET `like`='".$row['like']."' + 1 WHERE `b_id`='$rs'";
					 $sql=mysqli_query($conn, $re);
					}
				}else{
				 $red="UPDATE `books` SET `like`=1 WHERE `b_id`='$rs'";
					 $sqls=mysqli_query($conn, $red);
				}
echo 'you have Liked';
die();
?>