<?php
 
   {
	   $email = $_POST['email1'];
	   $password = $_POST['password1'];
       // Create connection
       $conn = mysqli_connect("localhost", "u120831222_root","khairwal","u120831222_data");
       // Check connection
       if(!$conn) 
       {
              die("Connection failed:".mysqli_connect_error());
       }
       else
       {
              $query = mysql_query("select * from users where password='$password' AND email='$email'", $conn);
              $rows = mysql_num_rows($query);
              if ($rows == 1) {
                 $_SESSION['login_user']=$email; // Initializing Session
                 header("location: videos.html"); // Redirecting To Other Page
                 } else {
                 $error = "Username or Password is invalid";
              }

                 	
              mysqli_close($conn);
        }
   }
?>
	