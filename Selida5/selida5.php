<!DOCKTYPE html>


<html>


	<head>
		<title>Jerseys/TheDoc.</title>
		<meta charset="UTF-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="selida5.css">
		<link rel="shortcut icon" href="../Images/lala.png" />
		<script src="selida5.js"></script>
	</head>


	<body onload="luckyYou()">



		<div id = "container">


		<a href="../Selida1/selida1.php">
			<div id="welcome"><div id="logo"><img src="../Images/lala.png" width="70px" height="50px"></div></a>The Doc</div>
		<div id = "keno"></div>


		<div id = "cart">
			Το καλάθι μου<br>
			<div id = "product1"></div><br>
			<div id = "product2"></div><br>
			<div id = "product3"></div><br>
			<div id = "product4"></div><br>
			<div id = "product5"></div><br>
			<div id = "product6"></div>
			<div id = "discount"></div>
			<div id = "total"></div>
			<button type="button" name="button" id = "randomButton" onclick="lucky()">Feeling like Tony Stark</button>
			<br><br>
			<button type="button" name="button" id = "goToStepTwoButton" onclick="goToStepTwo()"><a href="#payment">Επόμενο</a></button>

		</div>


		<div id="shoes">
			Ρίξε μία ματιά στη συλλογή μας!
		</div>
		<div id="products">
		<div class="row">
			<div class="column">
				<figure id="figure1">
					<img src="../Images/clothes1.jpg">
					<figcaption class="caption">Duke University.</figcaption>
					<div class="info">
						<span class="bold">Τιμή:</span> 40 &euro;
						<br>
						<span class="bold">Περιγραφή:</span> Η επίσημη εμφάνιση της ομάδας του πανεπιστημίου του Ντιουκ από την φετινή σεζόν.
						<br>
						<br>
						<span class="bold">Μέγεθος:</span>
						<select id="size" name="size" required>
							<option value="null" selected></option>
							<option value="M">M</option>
							<option value="L">L</option>
							<option value="XL">XL</option>
							<option value="XXL">XXL</option>
							<option value="XXXL">XXXL</option>
						</select>
						<br>
						<br>
						<span class="bold">Ποσότητα:</span><input type="number" class="bold" name="quantity" min="1" max="5" id="quantity1"required>
						<br>
						<br>
						<form id="form1">
							<input type="checkbox" id="check1" name="buy" value="buy" onclick="addToCart()">Προσθήκη στο καλάθι μου</input>
						</form>

					</div>
				</figure>
			</div>

			<div class="column">
				<figure id="figure2">
					<img src="../Images/clothes2.jpg"  >
					<figcaption class="caption">Arizona State University.</figcaption>
					<div class="info">
						<span class="bold">Τιμή:</span> 40 &euro;
						<br>
						<span class="bold">Περιγραφή:</span> Η επίσημη εμφάνιση της ομάδας του πανεπιστημίου της Αριζόνα από την φετινή σεζόν.
						<br>
						<br>
						<span class="bold">Μέγεθος:</span>
						<select id="size" name="size">
							<option value="null" selected></option>
							<option value="M">M</option>
							<option value="L">L</option>
							<option value="XL">XL</option>
							<option value="XXL">XXL</option>
							<option value="XXXL">XXXL</option>
						</select>
						<br>
						<br>
						<span class="bold">Ποσότητα:</span><input type="number" class="bold" name="quantity" min="1" max="5" id="quantity2"required>
						<br>
						<br>
						<form id="form1">
							<input type="checkbox" id="check2" name="buy" value="buy" onclick="addToCart()">Προσθήκη στο καλάθι μου</input>
						</form>
					</div>
				</figure>
			</div>
		</div>









		<div class="row">
			<div class="column">
				<figure id="figure3">
					<img src="../Images/clothes3.jpg" >
					<figcaption class="caption">Kentucky University.</figcaption>
					<div class="info">
						<span class="bold">Τιμή:</span> 40 &euro;
						<br>
						<span class="bold">Περιγραφή:</span> Η επίσημη εμφάνιση της ομάδας του πανεπιστημίου του Κεντάκι από την φετινή σεζόν.
						<br>
						<br>
						<span class="bold">Μέγεθος:</span>
						<select id="size" name="size">
							<option value="null" selected></option>
							<option value="M">M</option>
							<option value="L">L</option>
							<option value="XL">XL</option>
							<option value="XXL">XXL</option>
							<option value="XXXL">XXXL</option>
						</select>
						<br>
						<br>
						<span class="bold">Ποσότητα:</span><input type="number" class="bold" name="quantity" min="1" max="5" id="quantity3"required>
						<br>
						<br>
						<form id="form1">
							<input type="checkbox" id="check3" name="buy" value="buy" onclick="addToCart()">Προσθήκη στο καλάθι μου</input>
						</form>
					</div>
				</figure>
			</div>

			<div class="column">
				<figure id="figure4">
					<img src="../Images/clothes4.jpg" >
					<figcaption class="caption">Louisiana State University.</figcaption>
					<div class="info">
						<span class="bold">Τιμή:</span> 40 &euro;
						<br>
						<span class="bold">Περιγραφή:</span> Η επίσημη εμφάνιση της ομάδας του πανεπιστημίου της Λουιζιάνα από την φετινή σεζόν.
						<br>
						<br>
						<span class="bold">Μέγεθος:</span>
						<select id="size" name="size">
							<option value="null" selected></option>
							<option value="M">M</option>
							<option value="L">L</option>
							<option value="XL">XL</option>
							<option value="XXL">XXL</option>
							<option value="XXXL">XXXL</option>
						</select>
						<br>
						<br>
						<span class="bold">Ποσότητα:</span><input type="number" class="bold" name="quantity" min="1" max="5" id="quantity4"required>
						<br>
						<br>
						<form id="form1">
							<input type="checkbox" id="check4" name="buy" value="buy" onclick="addToCart()">Προσθήκη στο καλάθι μου</input>
						</form>
					</div>
				</figure>
			</div>
		</div>


		<div class="row">
			<div class="column">
				<figure id="figure5">
					<img src="../Images/clothes5.jpg" >
					<figcaption class="caption">University of Connecticut.</figcaption>
					<div class="info">
						<span class="bold">Τιμή:</span> 40 &euro;
						<br>
						<span class="bold">Περιγραφή:</span> Η επίσημη εμφάνιση της ομάδας του πανεπιστημίου του Κονέκτικατ από την φετινή σεζόν.
						<br>
						<br>
						<span class="bold">Μέγεθος:</span>
						<select id="size" name="size">
							<option value="null" selected></option>
							<option value="M">M</option>
							<option value="L">L</option>
							<option value="XL">XL</option>
							<option value="XXL">XXL</option>
							<option value="XXXL">XXXL</option>
						</select>
						<br>
						<br>
						<span class="bold">Ποσότητα:</span><input type="number" class="bold" name="quantity" min="1" max="5"id="quantity5"required>
						<br>
						<br>
						<form id="form1">
							<input type="checkbox" id="check5" name="buy" value="buy" onclick="addToCart()">Προσθήκη στο καλάθι μου</input>
						</form>
					</div>
				</figure>
			</div>

			<div class="column">
				<figure id="figure6">
					<img src="../Images/clothes6.jpg" >
					<figcaption class="caption">Ohio Sate University.</figcaption>
					<div class="info">
						<span class="bold">Τιμή:</span> 40 &euro;
						<br>
						<span class="bold">Περιγραφή:</span> Η επίσημη εμφάνιση της ομάδας του πανεπιστημίου του Οχάιο από την φετινή σεζόν.
						<br>
						<br>
						<span class="bold">Μέγεθος:</span>
						<select id="size" name="size">
							<option value="null" selected></option>
							<option value="M">M</option>
							<option value="L">L</option>
							<option value="XL">XL</option>
							<option value="XXL">XXL</option>
							<option value="XXXL">XXXL</option>
						</select>
						<br>
						<br>
						<span class="bold">Ποσότητα:</span><input type="number" class="bold" name="quantity" min="1" max="5" id="quantity6"required>
						<br>
						<br>
						<form id="form1">
							<input type="checkbox" id="check6" name="buy" value="buy" onclick="addToCart()">Προσθήκη στο καλάθι μου</input>
						</form>
					</div>
				</figure>
			</div>
		</div>
		</div>


		<form action="../Selida1/selida1.html" id="payment">
			Τώρα θα ασχοληθούμε λίγο με τα διαδικαστικά! Παρακαλούμε συμπλήρωσε την διεύθυνση που θα σου στείλουμε το προϊόν/τα προϊόντα που επέλεξες όπως επίσης
			και τον τρόπο που επιθυμείς να κάνεις την συναλλαγή σου.
			<br>
			<br>
			<div class="row">
				<div class="column">
					Στοιχεία αποστολής
					<br>
					<br>
					Οδός: <input type="text" id ="street" required/>
					<br>
					<br>
					Αριθμός Οδού: <input type="number" id = "number" required/>
					<br>
					<br>
					Περιοχή: <input type="text" id ="place" required/>
					<br>
					<br>
					Ταχυδρομικός κώδικας: <input type="text" id ="zip" required/>
					<br>
					<br>
					<input type="checkbox" id="express" onclick="addToCart()">Express παράδοση</input>
					<br>
					<br>
					<button type="button" id="back1" ><a href="#shoes" onclick="back1()">Προηγούμενο</a></button>
					<br>
					<br>
					<button type="button" id="next1" onclick="procceed1_1();procceed1_2();">Επόμενο</button>
					<br>
					<br>


				</div>



				<div class="row">
				<div class="column">
					<div id="wayOfPayment">
					Τρόπος πληρωμής
					<br>
					<br>
					<input type="radio" name="buy" value="buy" id = "antikatavoli" onclick="credit()">Αντικαταβολή</input>
					<br>
					<br>
					<input type="radio" name="buy" value="buy" id="creditClick" onclick="credit()">Με χρήση κάρτας</input>
					<br>
					<br>
					<div id="meKarta">
					Όνομα: <input type="text" id="fname" required/>
					<br>
					<br>
					Επώνυμο: <input type="text" id="lname" required/>
					<br>
					<br>
					<label for="cars">Τύπος κάρτας:</label>

					<select id="creditType">
					  <option value="visa">Visa</option>
					  <option value="mastercard">Mastercard</option>
					  <option value="americanExpress">American Express</option>
					</select>
					<br>
					<br>
					16-ψήφιος κωδικός κάρτας: <input type="number" name="civ" id="creditNum" onmouseout="verification()" required/>
					<br>
					<br>
					Ημερομηνία Λήξης κάρτας: <input type="date" name="creditdate" required/>
					<br>
					<br>
					
					</div>
					</div>
				</div>

			</div>
			<div id="instructions">
				<br>
				*1.Όλα τα στοιχεία πρέπει να συμπληρωθούν υποχρεωτικά.
				<br>
				*2.Για οποιαδήποτε απορία μην διστάσεις να επικοινωνήσεις μαζί μας.
				<br>
				<br>
				<br>
			</div>
			<input type="submit" value="Επιβεβαίωση" id="verify" onclick =  "success()"/>

		</form>
		<br>
		<button type="button" name="button" id = "verify2" onclick="verification()"><a href="../Selida1/selida1.php">Επιβεβαίωση</a></button>
		<br>
		<button type="button" name="button" id = "goback3" onclick="back2()">Προηγούμενο</button>

		</div>
		<div id="footer">
			<div id="partext">Επίσημοι συνεργάτες: </div>
			<span id="partner1"><img src="../Images/nba.png" width="2%" height="5%" ></span>
			<span id="partner2"><img src="../Images/lsu.png" width="7.5%" height="5%" ></span>
			<span id="partner3"><img src="../Images/ucla.png" width="7.5%" height="5%" ></span>
			<span id="partner4"><img src="../Images/ohio.png" width="7.5%" height="5%" ></span>
			<span id="partner5"><img src="../Images/spartans.png" width="6.25%" height="5%" ></span>
			<br>




		
							&copy;
							<a href="https://github.com/mavrogiorgos" target="_blank">
							K.Mavrogiorgos</a>. All rights reserved.
		</div>



		</div>




	</body>
</html>
