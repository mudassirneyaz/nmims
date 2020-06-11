<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NMIMS</title>


    <!-- load stylesheets -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400">   <!-- Google web font "Open Sans", https://fonts.google.com/ -->
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">           <!-- Font Awesome, http://fontawesome.io/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                 <!-- Bootstrap style, http://v4-alpha.getbootstrap.com/ -->
    <link rel="stylesheet" href="css/magnific-popup.css">                                <!-- Magnific pop up style, http://dimsemenov.com/plugins/magnific-popup/ -->
    <link rel="stylesheet" href="css/style.css">     
    <link rel="stylesheet" href="css/agency.css">                           <!-- Templatemo style -->
	<link rel="stylesheet" href="css/responsive.css">    
 
      </head>

      <body>
        <div class="container-fluid">

            <section id="welcome" class="tm-content-box tm-banner margin-b-10">
                <div class="container-fluid  tm-banner-inner">
                    <h1 class="head-title  tm-banner-title">NMIMS |  News & Events</h1>                        
                </div>                    
            </section>

            <div class="tm-body" style="z-index: -1">
                <div class="tm-sidebar">
                    <nav class="tm-main-nav">
                        <ul class="tm-main-nav-ul">
                            <li class="tm-nav-item"><a href="#about" class="tm-nav-item-link tm-button">
                                <i class="fa fa-smile-o tm-nav-fa"></i>Home</a>
                            </li>
                           
                            <li class="tm-nav-item"><a href="#service" class="tm-nav-item-link tm-button">
                                <i class="fa fa-tasks tm-nav-fa"></i>News & Events</a>
                            </li>
                            
							<li class="tm-nav-item"><a href="#call-head" class="tm-nav-item-link tm-button">
                                <i class="fa fa-users tm-nav-fa"></i>Live Updates</a>
                            </li>
                            <li class="tm-nav-item"><a href="#contact" class="tm-nav-item-link tm-button">
                                <i class="fa fa-envelope-o tm-nav-fa"></i>Contact Us</a>
                            </li>
							
                        </ul>
                    </nav>
                </div>
             
                <div class="tm-main-content">
                    
                    
	
					<br><br><br>
				<div  height="50px" style="text-align:center"> <h2><span style="color:yellowgreen;"> Our Events</span> </h2></div>
                    <div id="services" class="tm-content-box tm-gray-bg tm-services">

  
						<div class="row" style="padding:20px;margin:20px;">
                            <h2 class="tm-section-title">Semiconductor Devices-The Wonder Element to direct the path of Civilization and Social Life </h2>

                            <div id="about" class="tm-content-box">
                         <div class="tm-flex">

                            <img src="root/event_images/about.jpg" style="width: 100%;">
                            
                        </div>                        
                    </div>
                            <p class="tm-section-description">The first seminar of ED Institute of Engineering &Management Student Branch Chapter was held on 14th of March, 2017. The topic of the seminar was “Semiconductor Devices-The Wonder Element to direct the path of Civilization and Social Life”. Needless to mention in the 21st century, semiconductor devices has touched human life in all spheres. The modern civilization depends immensely on a very tiny semiconductor device, the transistor which fits in millions and billions in our pockets. Usage of semiconductor devices has become indispensible. So the seminar was highly engaging and knowledgeable for us.  Prof. (Dr.) Sanatan Chattopadhyay, our Honorable Speaker, gave his seminar talk and shared his expertise knowledge on the aforesaid theme. He showed us as how almost all of our modern day machines make use of electronic devices. Computers enable calculations of great complexity which were previously impracticable. This development has been enabled by the steady miniaturization of individual components,and by making their manufacture cheaper. He also enlightened us with the fact that now-a-days quantum mechanical effects such as electron tunneling through barriers and conduction through narrow channels with quantized transport are being taken advantage of when developing better devices. It was around one and half an hour full of extravaganza. The speaker’s apt oratory skill marvelled all the audiences. Overall it was highly knowledgeable, very inspiring and intensely charming session for all of us.</p>
						</div>                                                                 
                        
                    </div>
				
	
                    <!-- slider -->
                    




                </div>
            </div>             
        </div>

        <?php 
            include('footer.php')
        ?>

        <!-- load JS files -->
        
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) -->
        <script src="js/jquery.magnific-popup.min.js"></script>     <!-- Magnific pop-up (http://dimsemenov.com/plugins/magnific-popup/) -->
        <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
        
        <!-- Templatemo scripts -->
        <script>  

        /* Google map
        ------------------------------------------------*/
        
        
        function setNavbar() {
            if ($(document).scrollTop() > 160) {
                $('.tm-sidebar').addClass('sticky');
            } else {
                $('.tm-sidebar').removeClass('sticky');
            }
        }                   
    
        $(document).ready(function(){
            
            // Single page nav
            $('.tm-main-nav').singlePageNav({
                'currentClass' : "active",
                offset : 20
            });

            // Detect window scroll and change navbar
            setNavbar();
            
            $(window).scroll(function() {
              setNavbar();
            });

            // Magnific pop up
            $('.tm-gallery').magnificPopup({
              delegate: 'a', // child items selector, by clicking on it popup will open
              type: 'image',
              gallery: {enabled:true}
              // other options
            });
            
        });
    
        </script>             

    </body>
    </html>