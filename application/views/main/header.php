<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    
    <title>Maxihomes</title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url() ?>images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="<?= base_url() ?>css/bootstrap.min.css" rel="stylesheet">  
    <!-- Animate CSS -->
    <link href="<?= base_url() ?>vendors/animate/animate.min.css" rel="stylesheet">
    <!-- Icon CSS-->
	<link rel="stylesheet" href="<?= base_url() ?>vendors/font-awesome/css/font-awesome.min.css">  
    <link rel="stylesheet" href="<?= base_url() ?>vendors/linearicons/Linearicons.css">   
    <!-- Slider CSS-->
	<link rel="stylesheet" href="<?= base_url() ?>vendors/slider/css/slider.1.0.css">   
    <!-- Owl Carousel CSS-->
	<link rel="stylesheet" href="<?= base_url() ?>css/owl.carousel.min.css">    
	<link rel="stylesheet" href="<?= base_url() ?>css/owl.carousel.css">    
	<link rel="stylesheet" href="<?= base_url() ?>css/owl.theme.default.css">       
	<link rel="stylesheet" href="<?= base_url() ?>css/owl.theme.default.min.css">      
	<link rel="stylesheet" href="<?= base_url() ?>css/owl.theme.green.min.css">   
	<link rel="stylesheet" href="<?= base_url() ?>css/owl.theme.green.css"> 
    
    <!--Theme Styles CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/style.css" media="all" /> 
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/custom.css" media="all" />

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>
    
   <!-- Header Area-->
    <nav class="navbar navbar-default header_area menu_bg">
        <div class="container-fluid p0">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header_collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url() .'main/'?>"><img src="<?= base_url() ?>/images/logo.png" width="80px" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="header_collapse">
                <ul class="nav navbar-nav navbar_menu">
                    <li><a href="<?= base_url() .'main/'?>">Home</a></li>
                    <li><a href="#about-us-link">About</a></li>
                    <li class="desktop"
                    onmouseleave="closeNav()"
                    ><a href="#" onmouseover="openNav()">Projects</a>
                    
                        <div id="myNav" class="overlay">
                            <div class="overlay-content">
                                <h3>Our Projects</h3>
                                <br>
                                <br>
                              <a href="<?= base_url() .'main/rooms'?>">Bandar Sunway<br>
                                  <span class="city">Subang Jaya</span>
                              </a>
                              <br><br>
                              <a href="<?= base_url() .'main/rooms'?>">Glenmarie
                                  <br><span class="city">Shah Alam</span>
                              </a>
                            </div>
                          </div>
                    </li> 
                    <li class="dropdown mobile">
                        <a href="#mobileProjectMenu" data-toggle="collapse">Projects <span class="caret"></span></a>
                        <ul id="mobileProjectMenu" class="collapse">
                            <li>
                                <a href="<?= base_url() .'main/rooms'?>"><small>Bandar Sunway</small>
                              </a>
                            </li>
                            <li>
                                <a href="<?= base_url() .'main/rooms'?>"><small>Glenmarie</small>
                              </a>
                            </li>
                        </ul>
                    </li>
                   
                    <li><a href="<?= base_url() .'main/'?>#contact-link">Contact Us</a></li>  
                   
                </ul> 
                <ul class="nav navbar-nav navbar_menu pull-right social_link">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>  
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>  
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>   
                </ul> 
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
  
    </nav> 

    

      
    <!--End Header Area-->