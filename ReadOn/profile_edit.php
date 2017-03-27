<?php include('config/config.php');	
session_start();
if(isset($_SESSION['a_id'])){
	
}else{
	header("Location: index.php");
}
	if(isset($_POST['submit'])){
		$a_id=$_POST['a_id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		
		$sql="UPDATE authors SET name='".$name."',
								email='".$email."',
								phone='".$phone."',
								address='".$address."' WHERE a_id='".$a_id."'";
		$result = mysqli_query($conn, $sql);
		if($result){
			header("Location: profile.php");
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
        <title>Bootstrap Registration Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

		<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">Bootstrap Registration Form Template</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<span class="li-text">
								Put some text or
							</span> 
							<a href="#"><strong>links</strong></a> 
							<span class="li-text">
								here, or some icons: 
							</span> 
							<span class="li-social">
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-twitter"></i></a> 
								<a href="#"><i class="fa fa-envelope"></i></a> 
								<a href="#"><i class="fa fa-skype"></i></a>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
        	<?php 
				 if(isset($_GET['profile'])){
					$authors_id=$_GET['profile'];
						$sqlss = "SELECT * FROM authors WHERE a_id='".$authors_id."'";
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
			                        	<input type="hidden" name="a_id" value="<?php echo $_GET['profile'];?>" class="form-first-name form-control" id="form-first-name">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-email">Name</label>
			                        	<input type="text" name="name" value="<?php echo $row['name']?>" class="form-first-name form-control" id="form-first-name">
			                        </div>
									<div class="form-group">
			                        	<label class="sr-only" for="form-email">Email</label>
			                        	<input type="text" name="email" value="<?php echo $row['email']?>" class="form-first-name form-control" id="form-first-name">
			                        </div>
									<div class="form-group">
			                        	<label class="sr-only" for="form-email">Phone</label>
			                        	<input type="text" name="phone" value="<?php echo $row['phone']?>" class="form-first-name form-control" id="form-first-name">
			                        </div>
									<div class="form-group">
			                        	<label class="sr-only" for="form-email">address</label>
			                        	<input type="text" name="address" value="<?php echo $row['address']?>" class="form-first-name form-control" id="form-first-name">
			                        </div>
                                   
         
			                        <button type="submit" name="submit" class="btn">Update</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>