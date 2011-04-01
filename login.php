<?php
session_start();
?>


<body>
<div id="contents">
<?php

  include "db_connect.php";
  $username = $_POST['username'];
  $password = $_POST['password'];


   $query = "select * from users WHERE username = '$username' AND password = SHA('$password')";
   //	echo $query;
   $result = mysqli_query($db, $query);
   if ($row = mysqli_fetch_array($result))
   {
   		echo "<H1>Thanks for logging in $username</H!>\n";
   		echo "<p>Lets ride!</p>";
		  $_SESSION ['username'] = $username;
			$_SESSION ['password'] = $password;
		 ?>
		 <META
		HTTP-EQUIV="refresh"
		CONTENT="0; URL =index.php">
 <?php
 
   }
   else
    {
   		echo "<p><b>Incorrect username or password try again or create an account </p></b>\n";
		//echo $query;
   		//echo  "<h1>Log In</h1>\n  <form method=\"post\" action=\"login.php\">";
    	//echo "<label for=\"username\">Username:</label><input type=\"text\" id=\"username\" name=\"username\" /><br />";
        //echo "<label for=\"password\">Password:</label><input type=\"password\" id=\"password\" name=\"password\" /><br />";
       // echo "<input type=\"submit\" value=\"Login\" name=\"submit\" /></form> <p><a href=\"createAccount.php\">Create Account</a></p>";
    }
   
$_SESSION ['username'] = $username;
$_SESSION ['password'] = $password;

?>
 
  </div>
</body>
</html>