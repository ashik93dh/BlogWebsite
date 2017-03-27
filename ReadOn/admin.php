<?php include('config/config.php');	
session_start();
	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password = $_POST['password'];
		$msg ='';

		$sql="SELECT * FROM admin WHERE username = '".$username."' AND password = '".$password."'";
		$login=mysqli_query($conn, $sql);
		$count=mysqli_num_rows($login);
		if($count==1){
			$row=mysqli_fetch_assoc($login);
			$_SESSION['id'] = $row['id'];
			$_SESSION['username']= $row['username'];
		
		header("Location: supperpage.php");
		}else{
			$msg = "Wrong Username or Password. Please retry";
			header("location:login.php?msg=$msg");
		}
	}
	/*  else {
	header("Location: login.php");
	} */ 							
							
							?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin page</title>


    </head>

    <body>

		
        

                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="registration-form" enctype="multipart/form-data">
								
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-first-name">username</label>
			                        	<input type="text" name="username" placeholder="username..." class="form-first-name form-control" id="form-first-name">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-email">password</label>
			                        	<input type="password" name="password" placeholder="password..." class="form-first-name form-control" id="form-first-name">
			                        </div>
                                   
         
			                        <button type="submit" name="submit" class="btn">Signin</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


       

    </body>

</html>