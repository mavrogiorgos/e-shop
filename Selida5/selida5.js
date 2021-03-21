var luckyMe = Math.floor(Math.random() * 10);
function addToCart()
{
  var price1 = 0;
  var price2 = 0;
  var price3 = 0;
  var price4 = 0;
  var price5 = 0;
  var price6 = 0;
  var quantity1=0;
  var quantity2=0;
  var quantity3=0;
  var quantity4=0;
  var quantity5=0;
  var quantity6=0;
  var totalPrice=0;
  var staltika = 0;
  if(document.getElementById("check1").checked == true)
  {

    quantity1 = parseInt(document.getElementById("quantity1").value)
    document.getElementById("product1").innerHTML = ("Duke 2020\t"+quantity1)
    price1 = quantity1 * 40;

  }
  else if (document.getElementById("check1").checked == false)
  {
    document.getElementById("product1").innerHTML = ""
    price1 = 0;
  }

  if(document.getElementById("check2").checked == true)
  {

    quantity2 = parseInt(document.getElementById("quantity2").value)
    document.getElementById("product2").innerHTML = ("Arizona\t"+quantity2)
    price2 = quantity2 * 40;
  }
  else if (document.getElementById("check2").checked == false)
  {
    document.getElementById("product2").innerHTML = ""
    price2 = 0;
  }

  if(document.getElementById("check3").checked == true)
  {

    quantity3 = parseInt(document.getElementById("quantity3").value)
      document.getElementById("product3").innerHTML = ("Kentucky\t"+quantity3)
    price3 = quantity3 * 40;
  }
  else if (document.getElementById("check3").checked == false)
  {
    document.getElementById("product3").innerHTML = ""
    price3 = 0;
  }

  if(document.getElementById("check4").checked == true)
  {

    quantity4 = parseInt(document.getElementById("quantity4").value)
    document.getElementById("product4").innerHTML = ("Louisiana\t"+quantity4)
    price4 = quantity4 * 40;
  }
  else if (document.getElementById("check4").checked == false)
  {
    document.getElementById("product4").innerHTML = ""
    price4 = 0;
  }

  if(document.getElementById("check5").checked == true)
  {

    quantity5 = parseInt(document.getElementById("quantity5").value)
    document.getElementById("product5").innerHTML = ("Connecticut\t"+quantity5)
    price5 = quantity5 * 40;
  }
  else if (document.getElementById("check5").checked == false)
  {
    document.getElementById("product5").innerHTML = ""
    price5 = 0;
  }

  if(document.getElementById("check6").checked == true)
  {

    quantity6 = parseInt(document.getElementById("quantity6").value)
    document.getElementById("product6").innerHTML = ("Ohio\t"+quantity6)
    price6 = quantity6 * 40;
  }
  else if (document.getElementById("check6").checked == false)
  {
    document.getElementById("product6").innerHTML = ""
    price6 = 0;
  }
  totalPrice = price1 + price2 + price3 + price4 + price5 + price6 - luckyMe;


  if(document.getElementById("express").checked == true && totalPrice<30)
  {
    staltika = 6;
  }
  else if(document.getElementById("express").checked == false && totalPrice<30)
  {
    staltika = 2;

  }
   else if(document.getElementById("express").checked == true && totalPrice>30)
  {
    staltika = 2;

  }

  totalPrice = totalPrice + staltika;
	document.getElementById("discount").innerHTML = ("Έκπτωση: " +luckyMe+ " ΕΥΡΩ");
  document.getElementById("total").innerHTML = ("Σύνολο: " +totalPrice+ " ΕΥΡΩ")
}






function lucky()
{
  var price1 = 0;
  var price2 = 0;
  var price3 = 0;
  var price4 = 0;
  var price5 = 0;
  var price6 = 0;
  var quantity1=0;
  var quantity2=0;
  var quantity3=0;
  var quantity4=0;
  var quantity5=0;
  var quantity6=0;
  var staltika = 0;
  quantity6 = Math.floor(Math.random() * 6);
  price6 = quantity6 * 40;
  quantity5 = Math.floor(Math.random() * 6);
  price5 = quantity5 * 40;
  quantity4 = Math.floor(Math.random() * 6);
  price4 = quantity4 * 40;
  quantity3 = Math.floor(Math.random() * 6);
  price3 = quantity3 * 40;
  quantity2 = Math.floor(Math.random() * 6);
  price2 = quantity2 * 40;
  quantity1 = Math.floor(Math.random() * 6);
  price1 = quantity1 * 40;
  document.getElementById("product1").innerHTML = ("Duke\t"+quantity1)

  document.getElementById("product2").innerHTML = ("Arizona\t"+quantity2)

  document.getElementById("product3").innerHTML = ("Kentucky\t"+quantity3)

  document.getElementById("product4").innerHTML = ("Louisiana\t"+quantity4)

  document.getElementById("product5").innerHTML = ("Connecticut\t"+quantity5)

  document.getElementById("product6").innerHTML = ("Ohio\t"+quantity6)


  totalPrice = price1 + price2 + price3 + price4 + price5 + price6 - luckyMe;
  document.getElementById("express").disabled = true;
  	document.getElementById("discount").innerHTML = ("Έκπτωση: " +luckyMe+ " ΕΥΡΩ");
  document.getElementById("total").innerHTML = ("Σύνολο: " +totalPrice+ " ΕΥΡΩ")
  }





function goToStepTwo()
{
  document.getElementById("goToStepTwoButton").disabled = true;
  document.getElementById("randomButton").disabled = true;
}

function procceed1_1()
{
  var street = document.getElementById("street").value
  var place = document.getElementById("place").value
  var letters = /^[A-Za-z]+$/;
  if(street.match(letters) && place.match(letters))
      {
      //alert('Your name have accepted : you can try another');
      return true;
      }
      else
      {
      alert('Please input alphabet characters only');
      return false;
      }
}

function procceed1_2()
{
  var zip = document.getElementById("zip").value;
  zip = parseInt(zip)
  zip_length = zip.toString().length;

  if( Math.round(zip)===zip && zip_length===5 && procceed1_1())
  {
    //alert("Valid zip code")
    procceed1_3();
  }
  else
  {
      alert("invalid zip code")
  }

}

function back1()
{
  document.getElementById("goToStepTwoButton").disabled = false;
  document.getElementById("randomButton").disabled = false;
}

function procceed1_3()
{
  document.getElementById("wayOfPayment").style.visibility = "visible";
  document.getElementById("street").disabled = true;
  document.getElementById("place").disabled = true;
  document.getElementById("zip").disabled = true;
  document.getElementById("number").disabled = true;
  document.getElementById("express").disabled = true;
  document.getElementById("goback3").style.visibility = "visible";
  document.getElementById("instructions").style.visibility = "visible";

}



function credit()
{
	if(document.getElementById("creditClick").checked == true)
	{
		document.getElementById("meKarta").style.visibility = "visible";
		document.getElementById("verify").style.visibility = "visible";
	}
	else if(document.getElementById("creditClick").checked == false)
	{
		document.getElementById("meKarta").style.visibility = "hidden";
		document.getElementById("verify").style.visibility = "hidden";
		
	}
	if(document.getElementById("antikatavoli").checked == true)
	{
		document.getElementById("verify2").style.visibility = "visible";
	}
	else if(document.getElementById("antikatavoli").checked == false)
	{
		document.getElementById("verify2").style.visibility = "hidden";
	}
}


function verification()
{
		var creditNum = document.getElementById("creditNum").value
		creditNum = parseInt(creditNum)
		creditNum_length = creditNum.toString().length;
		
		if(document.getElementById("creditClick").checked == true)
		{
			if( Math.round(creditNum)===creditNum && creditNum_length===16)
			{
				document.getElementById("verify").disabled = false;
				
			}
			else
			{
				alert("Invalid credit card number")
				document.getElementById("verify").disabled = true;
			}
			
		}
		if(document.getElementById("antikatavoli").checked == true)
		{
			
			
			alert("Η παραγγελία σου κατωχηρώθηκε με επιτυχία!")
		}
}		

function back2()
{
  document.getElementById("meKarta").style.visibility = "hidden";
  document.getElementById("verify").style.visibility = "hidden";
  document.getElementById("wayOfPayment").style.visibility = "hidden";
  document.getElementById("street").disabled = false;
  document.getElementById("place").disabled = false;
  document.getElementById("zip").disabled = false;
  document.getElementById("number").disabled = false;
  document.getElementById("express").disabled = false;
  document.getElementById("goback3").style.visibility = "hidden";
  document.getElementById("instructions").style.visibility = "hidden";
}




function success()
{
  alert("Η παραγγελία σου κατωχηρώθηκε με επιτυχία!")
}


function luckyYou()
{
	
	if(luckyMe!=0){
	window.alert("Συγχαρητήρια μόλις κέρδισες έκπτωση "+luckyMe+" ΕΥΡΩ");
	}
	else{
		window.alert("Ουπς ατύχησες! Δεν έχεις καμία έκπτωση...");
	}
	
	
}