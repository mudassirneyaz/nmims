<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>NMIMS</title>

<script src="/cdn-cgi/apps/head/-mEFVS8y7qx5pVzWHQTCQu5gnVM.js"></script><link rel="stylesheet" href="css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">

<link rel="stylesheet" href="css/font-awesome.min.css">

<link rel="stylesheet" href="css/simple-line-icons.css">

<link rel="stylesheet" href="css/fullcalendar.min.css" />

<link rel="stylesheet" href="css/owl.carousel.min.css">

<link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="about_bg">
<div class="container">
<div class="row">
<div class="col-md-12">
<a href="index.html"><img src="images/responsive-logo.png" class="responsive-logo img-fluid" alt="responsive-logo"></a>
</div>
</div>
<div class="row">
<div class="col-md-12">
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
<span class="icon-menu"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="about.php">About<span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="events.php">News & Events</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Programs
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="program1.php">Program 1</a></li>
<li><a class="dropdown-item" href="program2.php">Program 2</a></li>
</ul>
</li>

<li class="nav-logo">
<a href="../index.php" class="navbar-brand"><img src="images/logo.png" class="img-fluid" alt="logo"></a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Faculty Profile
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="dept1.php">Department 1</a></li>
<li><a class="dropdown-item" href="dept2.php">Department 2</a></li>
</ul>
</li>
<li class="nav-item">
<a class="nav-link" href="update.php">Live Updates</a>
</li>
<li class="nav-item">
<a class="nav-link" href="contact.php">Contact</a>
</li>
</ul>
</div>
</nav>
</div>
</div>
<div class="row">
<div class="col-md-12">
<h1>Events</h1>
</div>
</div>
</div>
</div>





<section class="events">
<div class="container">
<div class="row">
<div class="col-md-4">
<h2 class="event-title">Events</h2>
</div>
<div class="col-md-8">

<ul class="nav nav-tabs" role="tablist">
<li class="nav-item nav-tab1">
<a class="nav-link tab-list active" data-toggle="tab" href="#upcoming-events" role="tab">Our Events </a>
</li>

</ul>
</div>
</div>
<br>

<div class="row">

<div class="tab-content">
<div class="tab-pane active" id="upcoming-events" role="tabpanel">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nmim";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM `events` ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    if (mysqli_query($conn, $sql)){
        echo "";
    }
 else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$count=1;

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row

        while($row = mysqli_fetch_assoc($result)) { 

?>


<div class="col-md-12">
<div class="row">
<div class="col-md-2">
<div class="event-date">
  
<h4><?php $date = strtotime($row['event_date']);
          echo date('d',$date);  ?></h4> <span><?php $date = strtotime($row['event_date']);
          echo date('m/y',$date);  ?></span>

</div>
<!-- <span class="event-time">9.00 AM - 4.00 PM</span> -->
</div>
<div class="col-md-10">
<div class="event-heading">
 <h3><?php echo $row['eventname'] ; ?></h3>
<p></p>
</div>
<div id="collapse<?php echo $row['id'] ; ?>" class="panel-collapse collapse in show">
<div class="panel-body">
<div class="event-hilights">
<h5>Event Highlights Photos</h5>
</div>
<div class="row">

  <?php
          $post_image = $row['event_img'];
          $images = explode(",",$post_image);
                 foreach($images as $image)
                 { ?>
                  <div class="col-md-4">
                    <img id="<?php echo $row['id'] ; ?>" src=" ../root/event_images/<?php echo $image ; ?>" alt="" style="width:100%;height: 350px;">








<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("<?php echo $row['id'] ; ?>");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>












                 
</div>
</div>
</div>
</div>
<div class="panel-heading">
<h4 class="panel-title">

<a data-toggle="collapse" class="event-toggle" data-parent="#accordion" href="#collapse<?php echo $row['id'] ; ?>">Hide Details</a>
</h4>
</div>
</div>
</div>
<hr class="event-underline">

</div>

<!-- <div class="col-md-12 text-center">
<a href="#" class="btn btn-default btn-courses my-5">Show More</a>
</div> -->

<?php }
              $count++;
        }
                        }
                        else {
        echo '0 results';
        }
        ?>
</div>

<!-- <div class="tab-pane" id="completed-events" role="tabpanel">
<div class="col-md-12">
<div class="row">
<div class="col-md-2">
<div class="event-date">
<h4>20</h4> <span>Aug 2017</span>
</div>
<span class="event-time">9.00 AM - 4.00 PM</span>
</div>
<div class="col-md-10">
<div class="event-heading">
<h3>Event Mauris egestas lorem viverra</h3>
<p>Chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum...</p>
</div>
<div id="collapse5" class="panel-collapse collapse in show">
<div class="panel-body">
<div class="event-hilights">
<h5>Event Highlights Photos</h5>
</div>
<div class="row">
<div class="col-md-4">

	
<img src="images/events/event-img_1.jpg" class="img-fluid" alt="event-img">
</div>
<div class="row">
<div class="col-md-6">
<div class="event-highlight-discription">
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
</div>
</div>
<div class="col-md-6">
<div class="event-highlight-discription">
<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
</div>
</div>
</div>
</div>
</div>
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" class="event-toggle" data-parent="#accordion" href="#collapse5">Hide Details</a>
</h4>
</div>
</div>
</div>
<hr class="event-underline">
</div> -->

</section>


<div id="instafeed"></div>


<footer>
<div class="container">
<div class="row">
</div>
<div class="row">
<div class="col-md-3">
<div class="foot-logo">
<a href="index.html">
<img src="images/footer-logo.png" class="img-fluid" alt="footer_logo">
</a>
<p>2016 © copyright
<br> All rights reserved.</p>
</div>
</div>
<div class="col-md-2">
<div class="sitemap">
<h3>College</h3>
<ul>
              <li><a href="http://scanfcode.com/category/c-language/">Campus</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">News & Events</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">Gallery</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Contact</a></li>
              <li><a href="http://scanfcode.com/category/android/">Testimonials</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Notice Board, E-library</a></li>
              <li><a href="http://scanfcode.com/category/android/">Infrastructure</a></li>
</ul>
</div>
</div>
<div class="col-md-2">
<div class="sitemap">
<h3>Quick links</h3>
<ul>
              <li><a href="http://scanfcode.com/category/c-language/">About</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">Admission</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">Student</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Exams</a></li>
              <li><a href="http://scanfcode.com/category/android/">Career</a></li>
</ul>
</div>
</div>

<div class="col-md-2">
<div class="sitemap">
<h3>Others</h3>
<ul>
              <li><a href="http://scanfcode.com/category/c-language/">Anti Ragging</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">RTI </a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">Grievances</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Prospectus</a></li>  
</ul>
</div>
</div>
<div class="col-md-3">
<div class="address">
<h3>Contact us</h3>
<p><span>Address: </span> Unisco university Albany, NY, USA. 11001</p>
<p>Email : <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cda4a3aba28db8a3a4beaea2e3aea2a0">[email&#160;protected]</a>
<br> Phone : +91 555 668 986</p>
<ul class="footer-social-icons">
<li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</footer>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/moment.min.js"></script>

<script src="js/owl.carousel.min.js"></script>
<script src="js/validate.js"></script>
<script src="js/tweetie.min.js"></script>

<script src="js/subscribe.js"></script>

<script src="js/script.js"></script>
</body>
</html>
