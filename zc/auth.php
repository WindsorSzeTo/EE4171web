<?php // auth.php
include "dbconnect.php";
session_start();

if (isset($_POST['username'] && isset($_POST['password']))
{
  // if user tried to login
  $userid = $_POST['username'];
  $password = $_POST['password'];
  
  $password=md5($password);
   $query = 'select * from users '
            ."where username='$userid' "
			      ." and password= '$password'";
			
  $result= $dbcnx->query($query);
  if ($result->num_rows > 0)
  {
   // if in DB, register the user id
   $_SESSON['valid_user'] =$userid;
  }
  $dbcnx->close();
 }
 ?>
 
 <html>
 <body>
 <h1>Home Page</h1>
 <?php
   if (isset($_SESSION['valid_user']))
   {
	  echo 'You are logged in as: '.$_SESSION['valid_user'].' <br />';
      echo <a href="logout.php">Log Out</a><br />;
   }
   else
   {
     if (isset($userid))
	 {
     // if login fails after attempting to login
     echo 'Failure to login. <br />';
	 }
	 else
     {
		 //haven't tried to login or haven't logged out
	  echo 'You are not logged in. <br />';
	 }
	  //provide login form
	 echo '<form method="post" action="auth.php">';
	 echo '<table>';
	 echo '<tr><td>Username:</td>';
	 echo '<td><input type="text" name="userid"></td></tr>';
	 echo '<tr><td>Password:</td>';
	 echo '<td><input type="password" name="password"></td></tr>';
	 echo '<tr><td colspan="2" align="center">';
	 echo '<input type="submit" value="Log in"></td><tr>';
	 echo '</table></form>';
   }
?>
<br />
<a href="members.php"> Members Section</a>
</body>
</html>
	 
     
     
	 
	  
  