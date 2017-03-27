<?php include('config/config.php');
	$sql = "SELECT * FROM books WHERE status='1' ORDER BY b_id ASC ";
	$result = mysqli_query($conn, $sql);
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
	<!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script>
// The rel attribute is the userID you would want to follow
$(document).ready(function() {
$('button.followButton').click('button.followButton', function(e){
    e.preventDefault();
    $button = $(this);
	        
  var book_id = $button.attr('data-id');

    if($button.hasClass('following')){
   
 $.ajax({
      dataType: "json",
      contentType: "application/json; charset=utf-8",
      url: "ajax_uncomment.php",
      data: "{'data1':'" + value1+ "', 'data2':'" + value2+ "', 'data3':'" + value3+ "'}",
      success: function (result) {
           //do somthing here
      }
 });
        
        $button.removeClass('following');
        $button.removeClass('unfollow');
        $button.text('Follow');
    } else {
          
 $.ajax({

		url: "ajax_post.php",
		data: {book_id:book_id},	  
		contentType: "application/json; charset=utf-8",
	   dataType: "json",
      success: function (html) {
        $button.addClass('following');
        $button.text('Following');
      }
 });
        

    }
});

$('button.followButton').hover(function(){
     $button = $(this);
    if($button.hasClass('following')){
        $button.addClass('unfollow');
        $button.text('Unfollow');
    }
}, function(){
    if($button.hasClass('following')){
        $button.removeClass('unfollow');
        $button.text('Following');
    }
});
});
</script>
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
              
                    <li>
                        <a href="registration.php">Sign up</a>
                    </li>
					
		     <li>
                        <a href="login.php">Signin</a>
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
                    Recent Posts
                    <small></small>
                </h1>
				<?php
				$rows=array();
				while($row = mysqli_fetch_assoc($result)) {
					$rows[]=$row;
				}
				
				foreach($rows as $val){?>
					<h2>
						<a href="readpdf.php?book_id=<?php echo $val['b_id'];?>"><?php echo $val['bookname'];?></a>
					</h2>
                <p class="lead">
                    by <a href="categorypost.php?authors=<?php echo $val['authors_id'];?>"><?php echo $val['authos_name'];?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $val['date']?></p>
                <hr>
                <p><?php echo $val['bookdescription'];?></p>
                <a class="btn btn-primary" href="readpdf.php?book_id=<?php echo $val['b_id'];?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
				<div class="my_comments">
				<button class="btn followButton" data-id="<?php echo $val['b_id'];?>" rel="6">Like</button>
				</div>
				<?php } ?>   

                <!-- Pager -->
               

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                     
                       <div style='text-align: center;'><!-- Start HTML Code --><iframe WIDTH="200" HEIGHT="400" title="Shoutbox" src="http://shoutbox.widget.me/window.html?uid=zv1buc1d" frameborder="0" scrolling="auto"></iframe><script src="http://shoutbox.widget.me/v1.js" type="text/javascript"></script><br><a href="http://shoutbox.widget.me" title="Shoutbox Widget">Shout</a><a href="http://shoutbox-tutorials.blogspot.com" title="Shoutbox Tutorials">bo</a><a href="http://www.youtube.com/watch?v=4IBqLxtAbs0" title="Shoutbox Video">x</a><br><!-- End HTML Code --></div>
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
<div style='text-align:center;'>
                   <!-- hitwebcounter Code START -->
<a href="http://www.hitwebcounter.com" target="_blank">
<img src="http://hitwebcounter.com/counter/counter.php?page=6124504&style=0024&nbdigits=5&type=page&initCount=0" title="install tracking codes" Alt="install tracking codes"   border="0" >
</a>                                        <br/>
                                        <!-- hitwebcounter.com --><a href="http://www.hitwebcounter.com" title="Visitors Total" 
                                        target="_blank" style="font-family: Geneva, Arial, Helvetica; 
                                        font-size: 9px; color: #9C9795; text-decoration: none ;"><strong>Visitors Total                                        </strong>
                                        </a>   
                            </div>   
                            
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

   

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
var disqus_shortname = 'example'; // required: replace example with your forum shortname

/* * * DON'T EDIT BELOW THIS LINE * * */
(function () {
var s = document.createElement('script'); s.async = true;
s.type = 'text/javascript';
s.src = '//' + disqus_shortname + '.disqus.com/count.js';
(document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
}());
</script> 
</body>

</html>
