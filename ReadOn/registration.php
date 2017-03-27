<?php include('config/config.php');    
              if(isset($_POST['submit'])){
                                $name=$_POST['name'];
                                $email=$_POST['email'];
                                $password=md5($_POST['password']);
                                $phone=$_POST['phone'];
                                $address=$_POST['address'];
                                $gender=$_POST['gender'];
                                $sql="INSERT INTO authors SET name = '".$name."',
                                                            email = '".$email."',
                                                            password = '".$password."',
                                                            phone = '".$phone."',
                                                            address = '".$address."',
                                                            gender = '".$gender."'";
                                                            
                                if ($conn->query($sql) === TRUE) {
                                    header("Location: login.php");
                                } else {
                                    echo "Error: " . $sql . "<br>" . $conn->error;
                                }                           
                                    
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
                    Read On
                    <small></small>
                <form role="form" action="" method="post" class="registration-form">
  
  <fieldset>
    
    <legend class="legend">Register</legend>
    <div class="input">
        <input type="text" name='name'placeholder="Name" required />
      <span><i class="fa fa-lock"></i></span>
    </div>
    
    
    <div class="input">
        <input type="email"  name='email'placeholder="Email" required />
      <span><i class="fa fa-envelope-o"></i></span>
    </div>
    
    <div class="input">
        <input type="password" name='password'placeholder="Password" required />
      <span><i class="fa fa-lock"></i></span>
    </div>
    <div class="input">
        <input type="text" name='address'placeholder="Address" required />
      <span><i class="fa fa-lock"></i></span>
    </div>
    
    <div class="input">
        <input type="text" name='phone' placeholder="Phone" required />
      <span><i class="fa fa-lock"></i></span>
    </div>
    <div class="input">
    <table>
                                       <tr>
                                        <td><input type='radio' name='gender' value='Female'></td>
                                        <td><p3 class='lingo'>Female</p3></td>
                                    </tr>
                                      <tr>  <td><input type='radio' name='gender' value='Male'></td>

                                        <td><p3 class='lingo'>Male</p3></td>
                                    </tr>
                                        </table>
    </div>
    
    <button type="submit" name='submit' class="submit" ></button>
    
  </fieldset>
  
  
  
</form>
                     
                       
                            
                               

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

<style type="text/css">


*{
  -ms-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  margin: 0;
  padding: 0;
  border: 0;
}

html, body{
  width: 100%;
  height: 100%;
  background: url(http://subtlepatterns.com/patterns/sativa.png) repeat fixed;
  font-family: 'Open Sans', sans-serif;
  font-weight: 200;
}

// Start styles in form

.login{
  position: relative;
  top: 50%;
    width: 250px;
  display: table;
  margin: -150px auto 0 auto;
  background: #fff;
  border-radius: 4px;
}

.legend{
  position: relative;
  width: 100%;
  display: block;
  background: #FF7052;
  padding: 15px;
  color: #fff;
  font-size: 20px;
  
  &:after{
    content: "";
    background-image: url(http://simpleicon.com/wp-content/uploads/multy-user.png);
    background-size: 100px 100px;
    background-repeat: no-repeat;
    background-position: 152px -16px;
    opacity: 0.06;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    position: absolute;
  }
}

.input{
  position: relative;
  width: 90%;
  margin: 15px auto;
  
  span{
    position: absolute;
    display: block;
    color: darken(#EDEDED, 10%);
    left: 10px;
    top: 8px;
    font-size: 20px;
  }
  
  input{
    width: 100%;
    padding: 10px 5px 10px 40px;
    display: block;
    border: 1px solid #EDEDED;
    border-radius: 4px;
    transition: 0.2s ease-out;
    color: darken(#EDEDED, 30%);
    
    &:focus{
      padding: 10px 5px 10px 10px;
      outline: 0;
      border-color: #FF7052;
    }
  }
}

.submit{
  width: 45px;
  height: 45px;
  display: block;
  margin: 0 auto -15px auto;
  background: #fff;
  border-radius: 100%;
  border: 1px solid #FF7052;
  color: #FF7052;
  font-size: 24px;
  cursor: pointer;
  box-shadow: 0px 0px 0px 7px #fff;
  transition: 0.2s ease-out;
  
  &:hover, &:focus{
    background: #FF7052;
    color: #fff;
    outline: 0;
  }
}

.feedback{
  position: absolute;
  bottom: -70px;
  width: 100%;
  text-align: center;
  color: #fff;
  background: #2ecc71;
  padding: 10px 0;
  font-size: 12px;
  display: none;
  opacity: 0;
  
  &:before{
    bottom: 100%;
    left: 50%;
    border: solid transparent;
    content: "";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(46, 204, 113, 0);
    border-bottom-color: #2ecc71;
    border-width: 10px;
    margin-left: -10px;
    

table tr td{

 font-size:14px;







}

  }
}















</style>
<script type="text/javascript">







$( ".input" ).focusin(function() {
  $( this ).find( "span" ).animate({"opacity":"0"}, 200);
});

$( ".input" ).focusout(function() {
  $( this ).find( "span" ).animate({"opacity":"1"}, 300);
});

$(".login").submit(function(){
  $(this).find(".submit i").removeAttr('class').addClass("fa fa-check").css({"color":"#fff"});
  $(".submit").css({"background":"#2ecc71", "border-color":"#2ecc71"});
  $(".feedback").show().animate({"opacity":"1", "bottom":"-80px"}, 400);
  $("input").css({"border-color":"#2ecc71"});
  return false;
});


































</script>





















</body>

</html>

