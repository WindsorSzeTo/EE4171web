<?php //logout.php
   session_start();
   
   //store to test if they were logged in
   $old_user = $_SESSION['valid_user'];
   unset ($_SESSION['valid_user']);
   session_destroy();
 ?>
 <html>
 <body>
 <h1>Log Out</h1>
<?php
   if (!empty($old_user))
   {
     echo 'Logged out. <br />';
   }
   else
   {
    //if not logged in but came to this page somehow
	echo 'You were not logged in, so cant be logged out <br />';
   }
?>
<a href="auth.php">Back to Main Page</a>
</body>
</html>