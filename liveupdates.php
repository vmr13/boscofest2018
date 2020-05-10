<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="./images/Bgcom.png">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Live Updates</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor1/bootstrap/css/bootstrap.min.css" rel="stylesheet">

     
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <!-- Custom Fonts -->
    <link href="vendor1/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

   

</head>

<body id="page-top" class="index">

         <header class="s-header">


        <nav class="header-nav">

            <a href="http://www.boscofest2018.com/#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3>
                
                 <ul class="header-nav__list" >
                    <li class="current"><a class="smoothscroll"><a href="index.html" style="float:left" >Home</a></a><br></li>
                    <li><a class="smoothscroll"  href="#about"><a href="schedule.html" style="float:left">Schedule</a></a></li>
                    <li><a class="smoothscroll"  href="onstage.html" title="services" ><a href="onstage.html" style="float:left">On Stage Events</a></a><br></li>
                    <li><a class="smoothscroll"  href="#works" title="works"><a href="offstage.html" style="float:left">Off Stage Events</a></a><br></li>
                    <li><a class="smoothscroll"  href="#clients" title="clients"><a href="registration.html" style="float:left">Registration</a></a><br></li>
                    <li><a class="smoothscroll"  href="#contact" title="contact"><a href="schools.html" style="float:left">Participating Schools</a></a><br></li>
                    <li><a class="smoothscroll"  href="#contact" title="contact"><a href="team.html" style="float:left">Our Team</a></a><br></li>
                   <li><a class="smoothscroll"  href="#contact" title="contact"><a href="livestream.html" style="float:left">Live Streaming</a></a><br><br></li>
                    <li><a class="smoothscroll"  href="#contact" title="contact"><a href="liveupdates.php" style="color:#85C1E9;float:left">Live Updates</a></a><br></li>
                    <li><a class="smoothscroll"  href="#contact" title="contact"><a href="contact.html" style="float:left">Contact Us</a></a><br></li>
                </ul>
    
              
    
          <ul class="header-nav__social">
              
                    <li>
                        <a href="https://www.facebook.com/BoscoFest2018/"><i title="Facebook" class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCbcipqHBfig-ODFGDwtBMlQ"><i title="Youtube" class="fa fa-youtube"></i></a>
                    </li>
                   
                    <li>
                        <a href="http://www.boscofest2018.com/app.html"><i title="PlayStore" class="fa fa-play"></i></a>
                    </li>
                    <li>
                        <a href="mailto:%20dbpc.boscofest@gmail.com"><i title="Mail" class="fa fa-envelope"></i></a>
                    </li>
                </ul>
            </div> <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="http://www.boscofest2018.com/#0">
           <span class="header-menu-text" style="font-size: 3rem">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="color:white ">Live Updates</h2>
                </div>
            </div>
             <div class="row">
                <?php
$host="localhost";
$user="root";
$pass="";
$db="live_updates";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM updates";
$result = mysqli_query($conn,$query) or die(mysql_error());

   
    
while($row = mysqli_fetch_assoc($result)){
      
        echo '
     <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div>
                            <div class="portfolio-hover-content">
                            </div>
                            
                        </div>
                        <img src="'. $row["image"].'" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>'. $row["event"].'</h4>
                        <p class="text-muted">'. $row["content"].'</p>
                    </div>
                </div>';

    }
?>
            </div>
        </div>
          
    </section>

    

    <!-- jQuery -->
    <script src="vendor1/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor1/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
    
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
