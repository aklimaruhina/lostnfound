<?php 
require_once('lib/app.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lost and Found</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

 

    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel owl-fadeUp-in ">
    
       <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <img src="img/5.png">
       		
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <img src="img/2.png">
              
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <img src="img/3.png">
                
              
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <img src="img/4.png">
                
                
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <img src="img/1.png">
                
               
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <img src="img/7.png">
                
                
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <img src="img/8.png">
               
            </div>
        </div>
        <div class="container title">
            <div class="col-sm-6">
                <div class="page-header">
                    <h1>Lost <mark>&</mark> Found.<small>Find your lost baggages.</small></h1>
                    
                </div>
               
                
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-success " onclick="location.href='login.php'">Login</button>
                </div>
                <div class="row search col-sm-10 ">
                    <h3>Have you found any missing product?</h3> 
                    <h4>Couldnt find its Owner?</h4>
                    <h5><b>Please enter the code below :</b><h5>
                    <form class="home_search" action="home_search.php" method="POST">
                        <div class="searchbox">

                           <input class="searchbox" type="text" name="home_search" placeholder="Enter the luggage code" ></input>
                            <button type="submit" class="btn btn-success" onclick="location.href='home_search.php'"><span class="icon"><i class="icon-search"></i>Search</span></button>
                        </div>
<?php


 if(isset($_SESSION['msg_success']) AND !empty($_SESSION['msg_success'])):

?>
    <h4 style="color:green"><?php echo $_SESSION['msg_success']; unset($_SESSION['msg_success'])?></h4>
<?php 

 endif; 

if(isset($_SESSION['msg_error']) AND !empty($_SESSION['msg_error'])):
?>
    <h4 style="color:red; font-weight:bold;"><?php echo $_SESSION['msg_error']; unset($_SESSION['msg_error'])?></h4>
<?php 
endif;
 ?>



                    </form>
                </div>
            </div> 

            
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

    
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery-1.9.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 ,
        
        transitionStyle : "scaleUp"
         //changes the speed
    })


    




    </script>

</body>

</html>
