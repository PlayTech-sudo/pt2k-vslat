<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative One Page Parallax Template">
    <meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" />
    <meta name="author" content="">
    <title>Visitor Log Automation</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]> <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script> <![endif]-->

</head><!--/head-->
<body>
<div class="preloader">
    <div class="preloder-wrap">
        <div class="preloder-inner">
            <div class="ball"></div>
            <div class="ball"></div>
            <div class="ball"></div>
            <div class="ball"></div>
            <div class="ball"></div>
            <div class="ball"></div>
            <div class="ball"></div>
        </div>
    </div>
</div><!--/.preloader-->
<header id="navigation">
    <div class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="scroll"><a href="../index.php">Home</a></li>
                    <li class="scroll active"><a href="login.php">Login</a></li>
                    <li class="scroll"><a href="../index.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </div><!--/navbar-->
</header> <!--/#navigation-->
<section id="contact">
 
    <div class="container">
        <div class="contact-details">
            <div class="pattern"></div>
            <div class="row text-center clearfix">
        
                <div class="col-sm-8 col-sm-offset-2">
                    <div id="contact-form-section">
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="contact-form" class="contact" name="contact-form" method="post" action="../login_verify.php">
                           <div class="form-group">
                                <input onkeypress="return isNumberKey(event,this);" type="text" name="cuname" class="form-control input-lg " required="required" placeholder="User Name">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control input-lg" required="required" placeholder="Yours password code">
                            </div>
                            
                            <div class="form-group">
<input type="submit" name="submit" value="Login">
                                <!-- <a href="index.php"class="btn btn-primary">Sign In</a> -->
                                
                            </div>
                        </form>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</section> <!--/#contact-->

<footer id="footer">
    <div class="container">
        <div class="text-center">
            <p>Copyright &copy; 2020 - <a href="#">Visitor Log Automation </a> | All Rights Reserved</p>
        </div>
    </div>
</footer> <!--/#footer-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.parallax.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>