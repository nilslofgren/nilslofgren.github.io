function goHome(){
	document.getElementById("info").style.display = "block";
	document.getElementById("items").style.display = "none";
	document.getElementById("contact").style.display = "none";
	document.getElementById("calc").style.display = "none";
	document.getElementById("total").style.display = "none";
	document.getElementById("address").style.display = "none";
	document.getElementById("order").style.display = "none";
}

function showItems(){
	document.getElementById("items").style.display = "block";
	document.getElementById("info").style.display = "none";
	document.getElementById("contact").style.display = "none";
	document.getElementById("calc").style.display = "none";
	document.getElementById("total").style.display = "block";
	document.getElementById("address").style.display = "none";
	document.getElementById("order").style.display = "none";
}

function showContact(){
	document.getElementById("contact").style.display = "block";
	document.getElementById("items").style.display = "none";
	document.getElementById("info").style.display = "none";
	document.getElementById("calc").style.display = "none";
	document.getElementById("total").style.display = "block";
	document.getElementById("address").style.display = "none";
	document.getElementById("order").style.display = "none";
}

function showPrice(){
	document.getElementById("contact").style.display = "none";
	document.getElementById("items").style.display = "none";
	document.getElementById("info").style.display = "none";
	document.getElementById("calc").style.display = "block";
	document.getElementById("total").style.display = "block";
	document.getElementById("address").style.display = "none";
	document.getElementById("order").style.display = "none";
}

function myCalculator() {
  var totalCost;
	var ss = parseInt(document.getElementById("sweatshirts").value, 10) * 30;
	//var numShorts = myForm.elements["shorts"];
	var nS = parseInt(document.getElementById("shorts").value, 10) * 12;
	//var numHat = myForm.elements["hats"];
	var nH = parseInt(document.getElementById("hats").value, 10) * 8;
	//var numLS = myForm.elements["shirts"];
	var nLS = parseInt(document.getElementById("shirts").value, 10) * 23;
	//var numBD = myForm.elements["buttondown"];
	totalCost = ss + nS + nH + nLS;

	document.getElementById("total").value = totalCost;
	//document.getElementById("total1").innerHTML = totalCost;



	//document.getElementById("total").style.display = "block";
	//document.getElementById("total1").innerHTML = total;
	document.getElementById("address").style.display = "block";

}
function cardNumCheck() {
	var cardNum = document.getElementById("cardNum").value;
	if (isNaN(cardNum))
		window.alert("Card number invalid. Must be all numbers!");
	else {
		showOrder();
	}

}

function showOrder() {
	document.getElementById("calc").style.display = "none";
	document.getElementById("address").style.display = "none";
	document.getElementById("order").style.display = "block";
}
