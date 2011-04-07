<?php
session_start();
?>


<body>
<div id="contents">
<?php

  include "db_connect.php";
  $username = $_POST['username'];
  $password = $_POST['password'];
  $username = mysql_real_escape_string($username);
  $password = mysql_real_escape_string($password);


   $query = "select * from users WHERE username = '$username' AND password = SHA('$password')";
   //	echo $query;
   $result = mysqli_query($db, $query);
   if ($row = mysqli_fetch_array($result))
   {
   		echo "<H1>Thanks for logging in $username</H1>\n";
   		echo "<p>Lets ride!</p>";
		  $_SESSION ['username'] = $username;
			$_SESSION ['password'] = $password;
		 ?>
		 <META
		HTTP-EQUIV="refresh"
		CONTENT="1; URL =index.php">
 <?php
 
   }
   else
    {
   		echo "<p><b>Incorrect username or password try again or create an account </p></b>\n";
		echo '<meta http-equiv="refresh" content="1; login.php" />';
    }
   
?>
 
  </div>
</body>
</html>