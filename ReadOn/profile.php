<?php include('config/config.php');
session_start();
if(isset($_SESSION['a_id'])){
	
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
					<li>
                        <a href="profile.php">Logged as:<?php echo $_SESSION['name']?></a>
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
                    Your Post
                    <small></small>
                </h1>

 
				
							<?php 

						$sqlss = "SELECT * FROM books WHERE authors_id='".$_SESSION['a_id']."'";
						$resultss = mysqli_query($conn, $sqlss);
$data='http://readon.comlu.com/writingplatform/finalcolaboration/uploads/';
						if (mysqli_num_rows($resultss) > 0) {
							while($row = mysqli_fetch_assoc($resultss)) {?>
								<h2>
									<a href="#"><?php echo $row['bookname'];?></a>
								</h2>
								<p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $row['date']?></p>
						 <iframe src="http://docs.google.com/gview?url=http://readon.comlu.com/writingplatform/finalcolaboration/uploads/<?php echo $row['files']?>&embedded=true" style="width:100%; height:400px;" frameborder="0"></iframe>
<a href="http://readon.comlu.com/writingplatform/finalcolaboration/uploads/<?php echo $row['files']?>">Download here</a>
							
							<?php }
						} else {
							echo "no book found to show";
						}
									?>

                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <!-- Start HTML Code --><iframe WIDTH="200" HEIGHT="400" title="Shoutbox" src="http://shoutbox.widget.me/window.html?uid=yqppxea1" frameborder="0" scrolling="auto"></iframe><script src="http://shoutbox.widget.me/v1.js" type="text/javascript"></script><br><a href="http://shoutbox.widget.me" title="Shoutbox Widget">Shout</a><a href="http://shoutbox-tutorials.blogspot.com" title="Shoutbox Tutorials">bo</a><a href="http://www.youtube.com/watch?v=4IBqLxtAbs0" title="Shoutbox Video">x</a><br><!-- End HTML Code -->
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

						$sql = "SELECT * FROM category";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
							$i=0;
							while($row = mysqli_fetch_assoc($result)) {?>
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
                    <h4>Profile </h4>
					<?php 
	$sqls = "SELECT * FROM authors WHERE a_id='".$_SESSION['a_id']."'";
	$results = mysqli_query($conn, $sqls);
	
	if (mysqli_num_rows($results) > 0) {
					echo '<table class="table table-striped">';
				
					while($row = mysqli_fetch_assoc($results)) {?>
						
							<td>Name: <?php echo $row['name'];?></td>
						
						<tr>
							<td>email: <?php echo $row['email'];?></td>
						</tr>
						<tr>
							<td>phone: <?php echo $row['phone'];?></td>
						</tr>
						<tr>
							<td>address: <?php echo $row['address'];?></td>
						</tr>
					<?php }
						echo '<tr>';
						echo '<td><a href="upload_pdf.php">Upload PDF</a> </td>';
                        echo '<td><a href="profile_edit.php?profile='.$_SESSION['a_id'].'">Edit Profile</a> </td>';
                      echo '</tr>';
					echo '</table>';
				} else {
					echo "no authors found";
				}
?>

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
