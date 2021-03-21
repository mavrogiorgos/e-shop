<?php session_start(); ?>
<!DOCKTYPE html>


<html>


	<head>
		<title>Products/TheDoc.</title>
		<meta charset="UTF-8">
		<meta name="viewpoint" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="selida3.css">
		<link rel="shortcut icon" href="../Images/lala.png" />
		<script src="selida3.js"></script>
	</head>


	<body>
		<div id = "container">


		<a href="../Selida1/selida1.php">
			<div id="welcome"><div id="logo"><img src="../Images/lala.png" width="70px" height="50px"></div></a>The Doc</div>
		<div id = "keno"></div>

		<div id="question">

			Τι ψάχνεις;

		</div>

			<?php
			include "../config.php";
			$sql1 = "SELECT * FROM categories WHERE category = 'shoes'";
			$result1 = $conn->query($sql1);
			if($result1->num_rows>0){
				while($row = $result1->fetch_assoc()){
			?>
			
			
			
			
			
			

			<form action="../Selida4/selida4.php" method="post">
			<div class="popup" id="fig1" onmouseover="showUp1()">
				
				<input type="image" name="button[1]" src="../Images/<?php echo $row['file'] ?>" id="fig1"  >
			 
  			<span class="popuptext" id="myPopup"><?php echo $row['description'] ?></span>
			</div><?php } } ?>
			
			
			
			<?php
			$sql2 = "SELECT * FROM categories WHERE category = 'jerseys'";
			$result2 = $conn->query($sql2);
			if($result2->num_rows>0){
				while($row = $result2->fetch_assoc()){
			?>
			
			

			<div class="popup" id="fig2" onmouseover="showUp2()">
			
			<input type="image" name="button[2]" src="../Images/<?php echo $row['file'] ?>" id="fig2"  >
			
  			<span class="popuptext" id="myPopup1"><?php echo $row['description'] ?></span>
			</div><?php } } ?>

			</form>











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
