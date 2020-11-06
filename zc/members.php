<?php // members.php
   session_start();
   
   echo '<h1>Members Only</h1>;
   
   // check session variables
   
   if (isset($_SESSION['valid_user']))
   {
     echo '<p>You are logged in as '.$_SESSION['valid_user'].'<p>';
	 echo '<p>Members only content here</p>;
   
   else
   {
     echo '<p>You are not logged in.</p>';
	 echo '<p>Only logged in members can view this page.</p>';
   }
   
   echo '<a href="auth.php">Back to Main Page</a>';