<!DOCTYPE html>
<html>
<head>
<title>HTML widget order form - by Oliver Rodriguez</title>


</head>
<body>
<?php
$author = 'Oliver Rodriguez';
$quantity = $_GET['quantity'];
$cost = 2000;
$discount = 100;
$tax = .13;

$sale = ($quantity * $cost);
$aplyTax = ($sale * $tax) + $sale;
$proratedTax = $aplyTax / 12;

$aplyDisc = $aplyTax - $discount;
$proratedDisc = $aplyDisc / 12;

if (empty($quantity)) 
	{
		print "Please make sure that you have entered a quantity and then resubmited";		
	}
	else 
		{	
		if ($sale >= 5000)
			{
				print "<p><h2>The PHP payment calculation conditionals program</h2></p>
		       	<p><strong>programmed by $author.</strong></p>
		       	<p>Your requested to purchase $quantity widget(s) at $ $cost each.<br>
		       	The total with tax, minus any discount, comes to $";
				printf ("%01.2f",$aplyDisc);
		       	print "<br/>You may purchase the widget(s) in 12 monthly installments of $ ";
				printf ("%01.2f",$proratedDisc);
				print "each</p>";
 			}
 	
		else
			{
				print "<p>Your discount will no apply because the total value of the sale is under $5000!</p></>
       			<p><h2>The PHP payment calculation conditionals program</h2></p>
		         <p><strong>programmed by $author.</strong></p>
		         <p>Your requested to purchase $quantity widget(s) at $";
				 printf ("%01.2f",$cost);
				 print "each.<br/>";
				 print "The total with tax, minus any discount, comes to $ ";
				 printf ("%01.2f",$aplyTax);
		         print "<br/>You may purchase the widget(s) in 12 monthly installments of $";
				 printf ("%01.2f",$proratedTax);
				 print "each.";
			}
	   }
	
?>
</body>
</html>