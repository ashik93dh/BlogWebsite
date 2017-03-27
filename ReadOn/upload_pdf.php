<?php include('config/config.php');
session_start();
if(isset($_SESSION['a_id'])){
	
}else{
	header("Location: index.php");
}
?>
<?php   
              if(isset($_POST['submit'])){
                $authors_id=$_SESSION['a_id'];
                $authos_name=$_SESSION['name'];
                $bookname=$_POST['bookname'];
                $bookdescription=$_POST['bookdescription'];
                $category=$_POST['category'];
                $date=date("Y-m-d h:i:sa");
                
              $target_dir = 'uploads/';
              $target_file = $target_dir . basename($_FILES["files"]["name"]);
              $uploadOk = 1;
              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);             
                              // Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["files"]["size"] > 5000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "pdf") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["files"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["files"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
  
                $files=$_FILES['files']["name"];
                
                
                $sql="INSERT INTO books SET bookname = '".$bookname."',
                              bookdescription = '".$bookdescription."',
                              category = '".$category."',
                              authors_id = '".$authors_id."',
                              authos_name = '".$authos_name."',
                              date = '".$date."',
                              files = '".$files."'";
                              
                if ($conn->query($sql) === TRUE) {
                  echo "New record created successfully";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }             
              
  
  
}
                
                    
              }
              //check file
              

              
              
              ?>
                            <div class="form-bottom">


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
    <link rel="stylesheet" type="text/css" href="category.css">

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
                        <a href="profile.php">Logged As:<?php echo $_SESSION['name']?></a>
                    </li>
                    
                    <li>
                        <a href="logout.php">logout</a>
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
                    <p class='upload header'>Upload your Writing<p>
                    <small></small>
              <form role="form" action="" method="post" class="registration-form" enctype="multipart/form-data">
                <input type="hidden" name="authors_id" class="form-first-name form-control" id="form-first-name" value="">
                <input type="hidden" name="authos_name" class="form-first-name form-control" id="form-first-name" value="">
                            <div class="form-group">
                              <label class="sr-only" for="form-first-name">Book Name</label>
                                <input type="text" name="bookname" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
                              </div>
                              <div class="form-group">
                                <label class="sr-only" for="form-email">Book Description</label>
                                <textarea name="bookdescription" class="form-email form-control" id="form-email"></textarea>
                              </div>
                                    
                                        <label class='category'>Select Category:</label>
                    <?php 
                      $sql = "SELECT * FROM category";
                      $result = mysqli_query($conn, $sql);
                      
                     $rows = array();
                     while ($row = mysqli_fetch_assoc($result)) {
                       $rows[] = $row;
                     }
                    foreach($rows as $val){?>
                      <input type='radio' name='category' class='category' value='<?php echo $val['c_id'];?>'><b class='labelcategory'><?php echo $val['cat_name'];?></b>
                    <?php } ?>
                                      
                                   
                                    
                                        <label class="sr-only" for="form-email">Book Upload</label>
                                        <input type="file" name="files"  class='btn'>
                                     
         
                              <button type="submit" name="submit" class="btn">File Upload</button>
                          </form>

                    </div>
  
 
                     
                       
                            
                               

            </div>

            <!-- Blog Sidebar Widgets Column -->
            

                <!-- Blog Categories Well -->
                <div class="well">
                   
                    <div class="row">
                        
                          
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                
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

