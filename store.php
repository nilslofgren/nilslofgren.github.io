
<html>

<body onload = "goHome()">



<link href = "shopDesign.css" rel = "stylesheet" type = "text/css"/>
<script src="shopModifier.js"></script>



<div class = "menu">
<h1>Nova Necessities</h1>


<tr>
      <th><button type="button" onclick="goHome()" style = "margin-right: 100px">Home</button></th>
      <th><button type="button" onclick="showItems()" style = "margin-right: 100px">Clothing</button></th>
      <th><button type="button" onclick="showPrice()" style = "margin-right: 100px">Price Calculator</button></th>
      <th><button type="button" onclick="showContact()" style = "margin-right: 100px">Contact Us</button></th>
      <th><form method="get">
      Name: <input type="text" name="fname" "margin-right: 100px" />
      <input type="submit" /> </th>
</tr>

</div>
<div class = "modifier">
<?php
  $filehandle = fopen("bestCustomer.txt","r");
  $value = fgets($filehandle);
  fclose($filehandle);
?>

<h2>Our Best Customer is <?php echo($value); ?></h2>


<?php
  $filehandle = fopen("bestCustomer.txt","w");
  fputs($filehandle, $_GET["fname"]);
  fclose($filehandle);
?>
</div>





<div class = "home">
<p id = "info"> This store holds items that can entertain all of your needs.  Looking for clothes? Look no further.  Nova Necessities
	offers high quality clothing that both looks good and is comfortable.<br> Our products include apparel that represent Villanova University.
  After Villanova's recent victory we have just received shipments of championship gear so that you can look your best with unbeatable clothing.
  If you do not like the products we give you you can return what you bought and be refunded completely.</p>

</div>

<div class = "items" id = "items">

<img src = "sweatshirt.jpg" alt = "sweatshirt">
<h2> Villanova Sweatshirt </h2>
<p> Price: $30.00 </p>

<img src = "shorts.jpg" alt = "shorts">
<h3> Villanova Basketball Shorts </h3>
<p> Price: $12.00 </p>

<img src = "finalfourhat.jpg" alt = "Final Four Hat">
<h4> Final Four Hat 2016 </h4>
<p> Price: $8.00 </p>

<img src = "longsleeve.jpg" alt = "Long Sleeve Shirt">
<h5> Long Sleeve Shirt </h5>
<p> Price: $23.00 </p>


</div>



<footer id = "contact">
	<p> Created by: Nils Lofgren </p>
	<p> Contact me at: <a href = "malito = nlofgren@villanova.edu" style = 'color: #c2c2d6;'>nlofgren@villanova.edu</a>. </p>
</footer>

<div class = "backgroundColor">
<div id = "calc">

  Villanova Sweatshirt: <input type="text" id = "sweatshirts" value="0"> * $30<br>
  Basketball Shorts: <input type="text" id = "shorts" value="0"> * $12<br>
  Final Four Hat: <input type="text" id = "hats" value="0"> * $8<br>
  Long Sleeve Shirt: <input type="text" id = "shirts" value="0"> * $23<br><br>
  <button type = "button" onclick="myCalculator()">Total: </button>
   <input type = "text" id = "total" value = "">
  <div class = "total" id = "total">

  <p id = "total1"></p>
</div>



</div>

<div id = "address">
<p> Where would you like this order to be shipped too? </p> <br>
  Home Address: <input type = "text" value = ""> <br>
  City: <input type = "text" value = "">
  State: <input type = "text" value = ""> <br>
  Zip Code: <input type = "text" value = ""> <br>
  Email Address: <input type = "text" value = ""> <br><br>
  Choose your payment: <select name = "cardType"> <br><br>
      <option value = "Credit Card"> Credit Card </option>
      <option value = "Debit Card"> Debit Card </option>
      <option value = "Gift Card"> Gift Card </option>
  </select>
  <br>
  Card Number: <input type = "text" id = "cardNum" value = "">
  <button type = "button" onclick = "cardNumCheck()" onclick = "showOrder()"> Next </button>




</div>
</div>

<div class = "order" id = "order">
<p> Your order has been placed! </p>
<button type = "button" onclick = "goHome()"> Back to Homepage </button>
</div>


</body>

</html>
