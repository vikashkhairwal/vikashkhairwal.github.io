<?php
 
   {
	   $email = $_POST['email1'];
           $phoneno = $_POST['phoneno1'];
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
              $sql = "INSERT INTO 'users'('email','phoneno','password') VALUES ('$email','$phoneno','$password')";
			  
               mysqli_query($conn, $sql);
              
                  echo "<h2>Sign Up successfully</h2>";    				  
              
              mysqli_close($conn);
        }
   }
?>
