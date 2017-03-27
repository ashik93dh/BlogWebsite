<?php include('config/config.php');?>
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
                        <a href="index.php">Home</a>
                    </li>
                   
                    <li>
                        <a href="About.php">About</a>
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
                    All Posts in this category
                    <small></small>
                </h1>
			<?php 
			if(isset($_GET['cat'])){
				$cat=$_GET['cat'];
				$sql = "SELECT * FROM books WHERE category='".$cat."' AND status='1'";
				$result = mysqli_query($conn, $sql);
				
					if (mysqli_num_rows($result) > 0) {
					
					while($row = mysqli_fetch_assoc($result)) {?>
						<h2>
						<a href="readpdf.php?book_id=<?php echo $row['b_id'];?>"><?php echo $row['bookname'];?></a>
					</h2>
                <p class="lead">
                    by <a href="#"><?php echo $row['authos_name'];?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $row['date']?></p>
                <hr>
                <p><?php echo $row['bookdescription'];?></p>
                <a class="btn btn-primary" href="readpdf.php?book_id=<?php echo $row['b_id'];?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>	
					<?php }
					
				} else {
					echo "no books found";
				}
				
			}
				if(isset($_GET['authors'])){
					$authors=$_GET['authors'];
					$sqls = "SELECT * FROM books WHERE authors_id='".$authors."' AND status='1'";
					$result_authors = mysqli_query($conn, $sqls);
					
					//this is for authors
								if (mysqli_num_rows($result_authors) > 0) {
					
					while($row = mysqli_fetch_assoc($result_authors)) {?>
						<h2>
							<a href="readpdf.php?book_id=<?php echo $row['b_id'];?>"><?php echo $row['bookname'];?></a>
						</h2>
                <p class="lead">
                    by <a href="#"><?php echo $row['authos_name'];?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $row['date']?></p>
                <hr>
                <p><?php echo $row['bookdescription'];?></p>
                <a class="btn btn-primary" href="readpdf.php?book_id=<?php echo $row['b_id'];?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>	
					<?php }
					
				}
				
				//this is for authors
				}

				
				
				?>
				
                
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h6>This is an website for writers to publish their books online. "Read and write bring a revolution"</h6>
                    <div class="input-group">
                        
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                    <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Book Categories</h4>
                    <div class="row">
                     
                       
							<?php 

						$sqle = "SELECT * FROM category";
						$resulte = mysqli_query($conn, $sqle);
						if (mysqli_num_rows($resulte) > 0) {
							$i=0;
							while($row = mysqli_fetch_assoc($resulte)) {?>
							 <div class="col-lg-6">
								<ul class="list-unstyled">
									<li><a href="categorypost.php?cat=<?php echo $row['c_id'];?>"><?php echo $row["cat_name"];?></a></li>
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
                    <h4>Message for today </h4>
                    <p>hello every one!!!</p>
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
