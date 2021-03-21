<!DOCKTYPE html>


<html>


	<head>
		<title>Sign-up/TheDoc.</title>
		<meta charset="UTF-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="selida2.css">
		<link rel="shortcut icon" href="../Images/lala.png" />
	</head>


	<body>
		<div id = "container">


		<a href="../Selida1/selida1.php">
			<div id="welcome"><div id="logo"><img src="../Images/lala.png" width="70px" height="50px"></div></a>The Doc</div>
		<div id = "keno"></div>


		<form action="selida2.php" id="signup" method="post">
			Για να ξεκινήσεις την περιήγησή σου στα μοναδικά προϊόντα της TheDoc. παρακαλούμε να συμπληρώσεις τα στοιχεία σου
			στην παρακάτω φόρμα.
			<br>
			<br>
			Όνομα: <input type="text" name="fname" required/>
			<br>
			<br>
			Επίθετο: <input type="text" name="lname" required/>
			<br>
			<br>
			Όνομα χρήστη: <input type="text" name="username" required/>
			<br>
			<br>
			Ημερομηνία γέννησης: <input type="date" name="bdate" required/>
			<br>
			<br>
			Διεύθυνση ηλεκτρονικού ταχυδρομείου: <input type="email" name="email" required/>
			<br>
			<br>
			<input type="submit"id="signupbutton" value = "Επιβεβαίωση"/>

		</form>
		
	
		<?php
		
			include "../config.php";
			
			if($_SERVER["REQUEST_METHOD"] == "POST"){
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$username = $_POST['username'];
			$bdate = $_POST['bdate'];
			$email = $_POST['email'];

			
			$sql1="SELECT username FROM userinfo WHERE username='$username'";
			$result1 = $conn->query($sql1);
			
			 if($result1->num_rows >= 1)
			   {
					echo "There is another user with the same username!";
			   }
			 else
				{
					

					$bytes = openssl_random_pseudo_bytes(4);
					$password = bin2hex($bytes);
					
					
					$sql2 = "INSERT INTO userinfo (firstname,lastname,username,birthdate,email,password) VALUES ('$fname', '$lname', '$username', '$bdate', '$email', '$password')";
					
					
					mail("$email","TheDoc-Password","$password");
					
					
					$result2 = $conn->query($sql2);
					if($result2 === TRUE)
					{
						
						header("Location: ../Selida1/selida1.php");
					}
					else
					{
						echo "<br> Error inserting data: " .$conn->error;
					}
					
					
					
				}
				
			}
			
			

			


			$conn->close();
		
			
		?>



		<div id="footer">
			<div id="partext">Επίσημοι συνεργάτες: </div>
			<span id="partner1"><img src="../Images/nba.png" width="12.px" height="25" ></span>
			<span id="partner2"><img src="../Images/lsu.png" width="37.5px" height="25px" ></span>
			<span id="partner3"><img src="../Images/ucla.png" width="37.5px" height="25px" ></span>
			<span id="partner4"><img src="../Images/ohio.png" width="37.5px" height="25px" ></span>
			<span id="partner5"><img src="../Images/spartans.png" width="31.25px" height="25px" ></span>
			<br>
		




		
							&copy;
							<a href="https://github.com/mavrogiorgos" target="_blank">
							K.Mavrogiorgos</a>. All rights reserved.
		</div>







		</div>
	</body>
</html>
