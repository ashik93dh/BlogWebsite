<?php include('config/config.php');
session_start();
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
                        <a href="index.php">Home</a>
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
                    
                    <small></small>
                </h1>
			<?php 
			$book_id=$_GET['book_id'];
				$sql = "SELECT * FROM books WHERE b_id='".$book_id."'";
				$result = mysqli_query($conn, $sql);
				
				if (mysqli_num_rows($result) > 0) {
					
					while($row = mysqli_fetch_assoc($result)) {?>
						<h2>
							<a href="#"><?php echo $row['bookname'];?></a>
						</h2>
 <iframe src="http://docs.google.com/gview?url=http://readon.comlu.com/writingplatform/finalcolaboration/uploads/<?php echo $row['files']?>&embedded=true" style="width:100%; height:400px;" frameborder="0"></iframe>
<a href="http://readon.comlu.com/writingplatform/finalcolaboration/uploads/<?php echo $row['files']?>">Download here</a>
<div class="">
<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'pdfreadon';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
</div>

					<?php }
				} else {
					echo "no books found";
				}
							?>
				
                
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                
                   <div class="well">
                     <div style='text-align: center;'><div style="margin: 15px 0px 0px; display: inline-block; text-align: center; width: 200px;"><div style="display: inline-block; padding: 2px 4px; margin: 0px 0px 5px; border: 1px solid rgb(204, 204, 204); text-align: center; background-color: rgb(255, 255, 255);"><a href="http://localtimes.info/Asia/Bangladesh/Dhaka/" style="text-decoration: none; font-size: 13px; color: rgb(0, 0, 0);"><img src="http://localtimes.info/images/countries/bd.png"="" border=0="" style="border:0;margin:0;padding:0"=""> Dhaka</a></div><script type="text/javascript" src="http://localtimes.info/clock.php?continent=Asia&country=Bangladesh&city=Dhaka&cp1_Hex=000000&cp2_Hex=FFFFFF&cp3_Hex=000000&fwdt=200&ham=0&hbg=0&hfg=0&sid=0&mon=0&wek=0&wkf=0&sep=0&widget_number=1000"></script></div></div>
                        
                        </span>
                    </div>
                    <!-- /.input-group -->
                
                <!-- Blog Categories Well -->
                <div class="well">
                   
                    <div class="row">
                        	
                          <?php 

						$sqli = "SELECT * FROM category";
						$results = mysqli_query($conn, $sqli);
						if (mysqli_num_rows($results) > 0) {
							$i=0;
							while($row = mysqli_fetch_assoc($results)) {?>
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
                    <div style='text-align:center;'> <script type="text/javascript" src="http://100widgets.com/js_data.php?id=202"></script>
                </div>

            </div>

        </div>
                     
                       
							
									
                               
                          
                        
        

        

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
