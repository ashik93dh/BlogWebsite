<?php include('config/config.php');
session_start();
if(isset($_SESSION['id'])){
	
}else{
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Read On</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Read On</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   
                    <li>
                        <a href="logout.php">Sign Out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Registered authors
                    <small></small>
                </h1>
	<?php 

						$sqlse = "SELECT * FROM authors";
						$resultse = mysqli_query($conn, $sqlse);
						if (mysqli_num_rows($resultse) > 0) {
					echo '<table class="table table-striped">';
					echo '<tr>';
						echo '<th>#</th>';
						echo '<th>Name</th>';
						echo '<th>Email</th>';
						echo '<th>Phone</th>';
						echo '<th>Address</th>';
						echo '<th>Gender</th>';
						echo '<th>Delete</th>';
						
					echo '</tr>';
					while($row = mysqli_fetch_assoc($resultse)) {?>
						<tr>
						<td><?php echo $row['a_id'];?></td>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['email'];?></td>
						<td><?php echo $row['phone'];?></td>
						<td><?php echo $row['address'];?></td>
						<td><?php echo $row['gender'];?></td>
						<td><a href="super_delete.php?a_id=<?php echo $row['a_id'];?>">Delete</a></td>
						</tr>
					<?php }
					echo '</table>';
				} else {
					echo "no category found";
				}
									?>



				<h1 class="page-header">
                    Trending Books this week
                    <small></small>
                </h1>

 
				
							<?php 

						$sql = "SELECT * FROM `books` ORDER BY `like` DESC";
				//echo $sql;
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
					echo '<table class="table table-striped">';
					echo '<tr>';
						
						echo '<th>BookName</th>';
						echo '<th>Bookdescription</th>';
						echo '<th>Authors Name</th>';
						echo '<th>Date</th>';
						echo '<th>Category<th>';
						echo '<th>Likes<th>';
						
					echo '</tr>';
					while($row = mysqli_fetch_assoc($result)) {?>
						<tr>
						
						<td><?php echo $row['bookname'];?></td>
						<td><?php echo $row['bookdescription'];?></td>
						<td><?php echo $row['authos_name'];?></td>
						<td><?php echo $row['date'];?></td>
						<td><?php echo $row['cat_name'];?></td>
						<td><?php echo $row['like'];?></td>
						
						</tr>
					<?php }
					echo '</table>';
				} else {
					echo "no category found";
				}
									?>
									<h1 class="page-header">
                    Submitted Books
                    <small></small>
                </h1>
									
											<?php 

						$sql = "SELECT * FROM `books`";
				//echo $sql;
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
					echo '<table class="table table-striped">';
					echo '<tr>';
						echo '<th>#</th>';
						echo '<th>BookName</th>';
						echo '<th>Bookdescription</th>';
						echo '<th>Authors Name</th>';
						echo '<th>Date</th>';
						echo '<th>Status</th>';;
						echo '<th>Edit</th>';
                                                echo '<th>Delete</th>';
					echo '</tr>';
					while($row = mysqli_fetch_assoc($result)) {?>
						<tr>
						<td><?php echo $row['b_id'];?></td>
						<td><?php echo $row['bookname'];?></td>
						<td><?php echo $row['bookdescription'];?></td>
						<td><?php echo $row['authos_name'];?></td>
						<td><?php echo $row['date'];?></td>
						<td><?php echo $row['status'];?></td>
						<td><a href="super_edit.php?b_id=<?php echo $row['b_id'];?>">Edit</a></td>
                                                <td><a href="book_delete.php?b_id=<?php echo $row['b_id'];?>">Delete</a></td>

						</tr>
					<?php }
					echo '</table>';
				} else {
					echo "no category found";
				}
									?>
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									

             

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                	<h4>Admin Profile</h4>
                	<p> Name:<?php echo $_SESSION['username']; ?></p>

                    <div class="input-group">
                        
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Book Categories</h4>
<div class="row">
                     
                       
							<?php 

						$sql = "SELECT * FROM category";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
							$i=0;
							while($row = mysqli_fetch_assoc($result)) {?>
							 <div class="col-lg-6">
								<ul class="list-unstyled">
									<li><a href="#"><?php echo $row["cat_name"];?></a></li>
								</ul>
							</div>
							
							<?php }
						} else {
							echo "no category found";
						}
									?>
									
                               
                          
                        <!-- /.col-lg-6 -->
                    </div>
                    
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                 
                 <p>This is the admin page.Normal user restricted</p>   
                  

                    </p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Read On 2015</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
