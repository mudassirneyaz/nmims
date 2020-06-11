<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nmim";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

   $images = array();
   $type = array();
   $size = array();

if (isset($_POST['reg_p'])) {
  // receive all input values from the form

      if(isset($_FILES['imageFile']))
         {
              $date = mysqli_real_escape_string($conn,$_POST['date']);
              $name = mysqli_real_escape_string($conn,$_POST['name']);
              $desc = mysqli_real_escape_string($conn,$_POST['desc']);
              $n_array = $_FILES['imageFile']['name'];
              $tmp_name_array = $_FILES['imageFile']['tmp_name'];
              $type_array = $_FILES['imageFile']['type'];
              $size_array = $_FILES['imageFile']['size'];
              $error_array = $_FILES['imageFile']['error'];
        for($i = 0; $i < count($tmp_name_array); $i++)
        {


            if(move_uploaded_file($tmp_name_array[$i], "event_images/".$n_array[$i]))
            {
                $images[] = $n_array[$i];
                $type[] = $type_array[$i];
                $size[] = $size_array[$i];
        
      ?>
                <script>alert('Image Uploaded Successfully');
                    window.open('event.php','_self');
                </script>
      <?php

            }
        }
  $all_images = implode(",",$images);
  $all_types = implode(",",$type);
  $all_sizes = implode(",",$size);
  $query = mysqli_query($conn, "INSERT INTO `events`(`eventname`, `event_desc`, `event_img`, `event_date`) VALUES ('$name','$desc','$all_images','$date')");
                if($query) 
                                        {
                       echo '' . '<br>';
                    }
                        else
                    {
                       echo 'failed!' . '<br>';
                    }
    }
    
}



   $images2 = array();
   $type2 = array();
   $size2 = array();

if (isset($_POST['update_submit'])) {
  // receive all input values from the form

      if(isset($_FILES['imageFile']))
         {
              $date = mysqli_real_escape_string($conn,$_POST['date']);
              $name = mysqli_real_escape_string($conn,$_POST['name']);
              $desc = mysqli_real_escape_string($conn,$_POST['desc']);
              $n_array = $_FILES['imageFile']['name'];
              $tmp_name_array = $_FILES['imageFile']['tmp_name'];
              $type_array = $_FILES['imageFile']['type'];
              $size_array = $_FILES['imageFile']['size'];
              $error_array = $_FILES['imageFile']['error'];
        for($i = 0; $i < count($tmp_name_array); $i++)
        {


            if(move_uploaded_file($tmp_name_array[$i], "update_images/".$n_array[$i]))
            {
                $images2[] = $n_array[$i];
                $type2[] = $type_array[$i];
                $size2[] = $size_array[$i];
        
      ?>
                <script>alert('Image Uploaded Successfully');
                    window.open('updates.php','_self');
                </script>
      <?php

            }
        }
  $all_images = implode(",",$images2);
  $all_types = implode(",",$type2);
  $all_sizes = implode(",",$size2);
  $query = mysqli_query($conn, "INSERT INTO `updates`(`update_sub`, `update_desc`, `update_img`, `update_date`) VALUES ('$name','$desc','$all_images','$date')");
                if($query) 
                                        {
                       echo '' . '<br>';
                    }
                        else
                    {
                       echo 'failed!' . '<br>';
                    }
    }
    
}


/*if (isset($_POST['update_submit'])) {
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

}*/

$conn->close();
?>