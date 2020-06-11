<?php
require_once('header.php') ;
?>
    <!-- Header -->
  
    <header class="masthead overlay">	
      <div class="container ">
        <div class="intro-text ">
          <div class="intro-lead-in text1" >HOW WILL YOU FORGE YOUR FUTURE?</div> 
          <div class="text2" >Unmatched opportunities.<br>Collegial culture. Focus on the future.</div>                 
        </div>

      </div>
      <div class="intro-heading text-uppercase">
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger left-pull" href="#about">
              <span style="margin:10px;"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span> Enroll Today</a>
          </div>
    </header>

    <div class="container-fluid back ">
      <div class="row nav-row">
        
        <div class="col-md-2 col-sm-6 nav-icon buldge">
        <i class="fa fa-book nav-sec" aria-hidden="true"></i>
        <br>
        <div class="nav-text"><p>About Us</p></div>
        
      </div>
            <div class="col-md-2 col-sm-6 nav-icon buldge">
        <i class="fa fa-graduation-cap nav-sec" aria-hidden="true"></i>
        <div class="nav-text"><p>Programs</p></div>
        
      </div>
      <div class="col-md-2 col-sm-6 nav-icon buldge">
        <i class="fa fa-user nav-sec" aria-hidden="true"></i>
        <div class="nav-text"><p>faculty</p></div>
        
      </div>
            <div class="col-md-2 col-sm-6 nav-icon buldge">
        <i class="fa fa-newspaper-o nav-sec" aria-hidden="true"></i>
        <div class="nav-text"><p>news and events</p></div>
        
      </div>

      <div class="col-md-2 col-sm-6 nav-icon buldge">
        <i class="fa fa-calendar nav-sec" aria-hidden="true"></i>
        <div class="nav-text"><p>Live Updates</p></div>
        
      </div>
            <div class="col-md-2 col-sm-6 nav-icon buldge">
        <i class="fa fa-envelope-o nav-sec" aria-hidden="true"></i>
        <div class="nav-text"><p>contact Us</p></div>
   </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="row quote"></div>

        <blockquote>
          <span style="font-size: 40px;color: #8C1515;"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
          <p>To give real service you must add something,which cannot be bought or measured with money,and that is Sincerity and Integrity.</p><br>
          <p class="text-muted text3">Elizabeth Dooley, JD ’ 13, Pasadena, CA</p>
        </blockquote>
      </div>
    </div>
    
  </div>
  <hr>

<br><br>
<div class="container-fluid container-academics back">
<h1 class="back pull-center"><u class="underline">Unique Opportunities at NMIMS</u></h1>
  <div class="row row-academics ">
    <div class="col-md-3 col-sm-6 academics">
  <img src="img/about/4.jpg" alt="Avatar" class="image1">
  <div class="overlay1">
    <div class="text"><h1>Opportunity1</h1>
          <p class="text-muted">Some text here</p></div>
  </div>
</div>

<div class="col-md-3 col-sm-6 academics">
  <img src="img/about/4.jpg" alt="Avatar" class="image1">
  <div class="overlay1">
    <div class="text"><h1>Opportunity2</h1>
          <p class="text-muted">Some text here</p></div>
  </div>
</div>

<div class="col-md-3 col-sm-6 academics">
  <img src="img/about/4.jpg" alt="Avatar" class="image1">
  <div class="overlay1">
    <div class="text"><h1>Opportunity3</h1>
          <p class="text-muted">Some text here</p></div>
  </div>
</div>

<div class="col-md-3 col-sm-6 academics">
  <img src="img/about/4.jpg" alt="Avatar" class="image1">
  <div class="overlay1">
    <div class="text"><h1>Opportunity4</h1>
          <p class="text-muted">Some text here</p></div>
  </div>
</div>
    
  </div>
</div>
<hr>



<br><br>

<div class="container-fluid back">
  <h1 class="back pull-center"><u class="underline">NMIMS Degree Programs</u></h1>
  <div class="row">
    <div class="col-sm-12 col-md-6 image2">
      <img src="img/about/4.jpg" alt="Nature" style="width:100%;">
  <div class="text-block">
    <h4>Join a diverse and inclusive community shaped by a commitment to the future.</h4>
    <div class="pull-btn"><a class="btn btn-primary btn-xl text-uppercase btn-radius" href="#"> Apply Now</a></div>
  </div>
      
    </div>

    <div class="col-sm-12 col-md-4 back-white">
      <img src="img/event-4.jpg"  style="width:50%;float: left;">
  <div class="white-text">
    <h>BALLB (Hons.)</h>
    <p class="text-muted">Join a diverse and inclusive community shaped by a commitment to the future.</p>
    <div class="pull-btn"><a class="btn btn-primary btn-xl text-uppercase btn-white" href="#"> Learn More</a></div>
  </div>

  <img src="img/event-4.jpg"  style="width:50%;float: left;">
  <div class="white-text">
    <h>BBALLB (Hons.)</h>
    <p class="text-muted">Join a diverse and inclusive community shaped by a commitment to the future.</p>
    <div class="pull-btn"><a class="btn btn-primary btn-xl text-uppercase btn-white" href="#"> Learn More</a></div>
  </div>
      
    </div>
    
  </div>
</div>
<hr>




<div class="container-fluid container-academics back">
<h1 class="back pull-center"><u class="underline">NEWS & EVENTS</u></h1>
  <div class="row row-academics ">


     <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nmim";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = 'SELECT * FROM (
  SELECT * FROM events ORDER BY id DESC LIMIT 3
) as r ORDER BY id';
if (mysqli_query($conn, $sql)) {
echo "";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$count=1;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row

while($row = mysqli_fetch_assoc($result)) { ?>

<div class="col-md-4 col-sm-6 academics bgchange">
  <div class="thumbnail">
          <img src=" root/event_images/<?php echo $row['event_img'] ; ?>" alt="" style="width:100%;height: 350px;">
          <div class="caption">
            <h1 class="event-caption"><?php echo $row['eventname'] ; ?></h1>
            <p><?php echo $row['event_desc'] ; ?></p>
          </div>
      
      </div>
</div>

<?php
$count++;
}
} else {
echo 'No Events for now';
}
?>

  </div>
</div>
<hr>



<div class="container-fluid container-academics back ">
<h1 class="back pull-center"><u class="underline">Latest updates</u></h1>
  <div class="row row-academics ">
  
       <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nmim";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = 'SELECT * FROM (
  SELECT * FROM updates ORDER BY id DESC LIMIT 3
) as r ORDER BY id';
if (mysqli_query($conn, $sql)) {
echo "";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$count=1;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row

while($row = mysqli_fetch_assoc($result)) { ?>


<div class="col-lg-4 col-sm-6 academics border-hover">
  <div class="card">
  <img src=" root/update_images/<?php echo $row['update_img'] ; ?>" alt="" style="width:100%;height:350px;">
  <h1 class="event-caption"><?php echo $row['update_sub'] ; ?></h1>
  <p class="text-muted"><?php echo $row['update_desc'] ; ?></p>
  <p>
    <a class="btn btn-primary btn-sm" href="#about"> Read More<span style="margin:10px;"><i class="fa fa-arrow-right" aria-hidden="true"></i></span></a></p>
</div>
</div>

<?php
$count++;
}
} else {
echo 'No Updates for now';
}
?>

  </div>
</div>

<br><br>

<?php
require_once('footer.php') ;
?>