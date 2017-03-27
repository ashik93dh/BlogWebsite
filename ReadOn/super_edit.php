<?php include('config/config.php');	
session_start();
	if(isset($_POST['submit'])){
		$b_id=$_POST['b_id'];
		$status = $_POST['status'];
		
		$sql="UPDATE books SET status='".$status."' WHERE b_id='".$b_id."'";
		$result = mysqli_query($conn, $sql);
		if($result){
			header("Location: supperpage.php");
		}
	}
	/*  else {
	header("Location: login.php");
	} */ 							
							
							?>
<!DOCTYPE html>
<html lang="en">
    <head>
       <title>Status update</title> 
    </head>

    <body>

		

        <!-- Top content -->
        <div class="top-content">
        	<?php 
				 if(isset($_GET['b_id'])){
					$book_id=$_GET['b_id'];
						$sqlss = "SELECT * FROM books WHERE b_id='".$book_id."'";
						$resultss = mysqli_query($conn, $sqlss);
						$row=mysqli_fetch_assoc($resultss);
				} 
			?>
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="registration-form" enctype="multipart/form-data">
								
			                    	<div class="form-group">
			                        	<input type="hidden" name="b_id" value="<?php echo $_GET['b_id'];?>" class="form-first-name form-control" id="form-first-name">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-email">status</label>
			                        	<input type="text" name="status" value="<?php echo $row['status']?>" class="form-first-name form-control" id="form-first-name">
			                        </div>
                                   
         
			                        <button type="submit" name="submit" class="btn">Update</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
        </div>


        <!-- Javascript -->
       

    </body>

</html>