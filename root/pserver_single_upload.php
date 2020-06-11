<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nmim";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['reg_p'])) {
  // receive all input values from the form
  $date = mysqli_real_escape_string($conn,$_POST['date']);
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $desc = mysqli_real_escape_string($conn,$_POST['desc']);
  $imgname = $_FILES['pic']['name'];
  $tempimg = $_FILES['pic']['tmp_name'];

  $filename = $_FILES["pic"]["name"];
  $filetype = $_FILES["pic"]["type"];
  $filesize = $_FILES["pic"]["size"];
  $fileinfo = getimagesize($_FILES["pic"]["tmp_name"]);

  
  if($tempimg == "")
  {
    echo "please select a photo";
  }
  else
  {
    
    if($filesize > 10000000)
    {
       ?>
   			<script>alert('Please upload Image less than 10 Mb');
					window.open('event.php','_self');
			</script>
	   <?php
    }
    else
    {
      
      if($filetype != "image/jpeg" && $filetype != "image/png" && $filetype != "image/gif")
      {
        
        ?>
			<script>alert('Please upload jpg / png / gif');
					window.open('event.php','_self');
			</script>

		<?php
      }
      else
      {

      	if(file_exists("event_images/$imgname"))
      	{
      		?>
			<script>alert('Files exits');
					window.open('event.php','_self');
			</script>

		<?php
      	}
      	else
      	{
      		move_uploaded_file($tempimg,"event_images/$imgname");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


			$sql = "INSERT INTO `events`(`eventname`, `event_desc`, `event_img`, `event_date`) VALUES ('$name','$desc','$imgname','$date')";     
			if ($conn->query($sql) === TRUE) {
				?>
					<script>alert('New record created successfully');
							window.open('index.php','_self');
					</script>
			    <?php
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
      	}
            
      }
     
    }
  }

}



if (isset($_POST['update_submit'])) {
  // receive all input values from the form
  $date = mysqli_real_escape_string($conn,$_POST['date']);
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $desc = mysqli_real_escape_string($conn,$_POST['desc']);
  $imgname = $_FILES['pic']['name'];
  $tempimg = $_FILES['pic']['tmp_name'];

  $filename = $_FILES["pic"]["name"];
  $filetype = $_FILES["pic"]["type"];
  $filesize = $_FILES["pic"]["size"];
  $fileinfo = getimagesize($_FILES["pic"]["tmp_name"]);

  
  if($tempimg == "")
  {
    echo "please select a photo";
  }
  else
  {
    
    if($filesize > 10000000)
    {
       ?>
        <script>alert('Please upload Image less than 10 Mb');
          window.open('event.php','_self');
      </script>
     <?php
    }
    else
    {
      
      if($filetype != "image/jpeg" && $filetype != "image/png" && $filetype != "image/gif")
      {
        
        ?>
      <script>alert('Please upload jpg / png / gif');
          window.open('event.php','_self');
      </script>

    <?php
      }
      else
      {

        if(file_exists("update_images/$imgname"))
        {
          ?>
      <script>alert('Files exits');
          window.open('event.php','_self');
      </script>

    <?php
        }
        else
        {
          move_uploaded_file($tempimg,"update_images/$imgname");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


      $sql = "INSERT INTO `updates`(`update_sub`, `update_desc`, `update_img`, `update_date`) VALUES ('$name','$desc','$imgname','$date')";     
      if ($conn->query($sql) === TRUE) {
        ?>
          <script>alert('New Update published successfully');
              window.open('index.php','_self');
          </script>
          <?php
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
        }
            
      }
     
    }
  }

}

$conn->close();
?>