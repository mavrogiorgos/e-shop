<?php session_start(); ?>
<!DOCKTYPE html>


<html>


	<head>
		<title>Επίσημος ιστότοπος TheDoc.</title>
		<meta charset="UTF-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="selida1.css">
		<script src="selida1.js"></script>
		<link rel="shortcut icon" href="../Images/lala.png" />
		
	</head>


	<body>
		<div id = "container">



		


		<div id="welcome"><div id="logo"><img src="../Images/lala.png" width="70px" height="50px"></div>The Doc</div>

		<div id="quote">"Success is not an accident, success is actually a choice."</div>





		<!-- <div id="infoTitle">The Doc. 

		</div>-->
		<br>
		<br>
		<div id="info">
			Η TheDoc. συνεργάζεται με πλήθος αθλητών του κολλεγιακού και του επαγγελματικού πρωταθλήματος μπάσκετ των ΗΠΑ.
			Τα προϊόντα μας δοκιμάζονται καθημερινά στο κορυφαίο επίπεδο και συνεχώς αναβαθμίζονται για να εξυπηρετούν
			τις αυξανόμενες απαιτήσεις των επαγγελματιών.
			Στην TheDoc. συμμεριζόμαστε την αγάπη σου για το υπέροχο αυτό άθλημα, γι' αυτό εδώ θα βρείς τα κορυφαία προϊόντα μας
			στις χαμηλότερες τιμές.


		</div>

		<div id="roster">
			<img class="bottom" src="../Images/roster1.jpg" />
			<img class="top" src="../Images/roster4.jpg" />
		</div>




		
		<div class="btn-group">
			<button onclick="document.getElementById('id01').style.display='block'">Είσοδος</button>
			<button  onclick="document.location = '../Selida2/selida2.php'">Εγγραφή</button>

		</div>
		
		
		
		
				<!-- The Modal -->
		<div id="id01" class="modal">
		  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

		  <!-- Modal Content -->
		  <form class="modal-content animate" action = "selida1.php" method="post">
			<div class="imgcontainer">
			  <img src="../Images/avatar.png" alt="Avatar" class="avatar">
			</div>

			<div class="container">
			  <label for="uname"><b>Όνομα χρήστη</b></label>
			  <input type="text" placeholder="Βάλε το όνομα χρήστη σου" id = "username" name="uname" required>

			  <label for="psw"><b>Κωδικός</b></label>
			  <input type="password" placeholder="Βάλε τον κωδικό σου" id = "password" name="psw" required>

			  <button type="submit" id ="loginB"   >Είσοδος</button>
			  <label>
				<input type="checkbox" checked="checked" name="remember"> Να με θυμάσαι
			  </label>
			</div>

			<div class="container" style="background-color:#f1f1f1">
			  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Ακύρωση</button>
			  <span class="psw">Ξέχασες τον <a href="#">κωδικό;</a></span>
			</div>
		  </form>
		</div>
		
		<?php
		
		
			include "../config.php";
			
			if($_SERVER["REQUEST_METHOD"] == "POST"){
			$uname = $_POST['uname'];
			$psw = $_POST['psw'];
			

			
			$sql1="SELECT username,password FROM userinfo WHERE username='$uname' AND password='$psw'";
			$result1 = $conn->query($sql1);
			
			 if($result1->num_rows >= 1)
			   {
				   
				   $_SESSION['loggedin'] == true;
				   $_SESSION['username'] == $uname;
					header("Location: ../Selida3/selida3.php");
			   }
			 else
				{
					

					echo '<script language="javascript">';
					echo 'alert("Invalid credentials!")';
					echo '</script>';
					
					
					
				}
				
			}
			
			

			


			$conn->close();
		
		
		
		?>
		
		<script>
			// Get the modal
			var modal = document.getElementById('id01');

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
			  if (event.target == modal) {
				modal.style.display = "none";
			  }
			}
		</script>
		
		
		
		


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
