<?php
/*******************************************************
  Class:    4A7B
  Name:     P. Willems
  Purpose:  functions MUSTHAVE SHOP

  dd-mm-yyyy  Description
  ----------  ------------------------------------------
  10-05-2018  Initial 
  
  ******************************************************/
   
  function showCompanyInfo() {
	  
    require_once "constants.php";

	echo '<p>';
	echo COMPANY    . '<br>';
	echo ADDRESS    . '<br>';
	echo POSTALCODE . '<br>';
	echo CITY       . '<br>';
	echo '</p>';
	
	echo '<p>';
	echo TELEPHONE . '<br>';
	echo EMAIL     . '<br>';
	echo WEBSITE   . '<br>';
	echo '</p>';
	
	echo '<p>';
	echo 'KVK:  ' . KVK  . '<br>';
	echo 'BTW:  ' . BTW  . '<br>';
	echo 'IBAN: ' . IBAN . '<br>';
	echo '</p>';
  }
  
  function showContent() {
	
	$products   = array("boter"=>"1.50", "melk"=>"0.75", "yoghurt"=>"1.75");
	$maxProduct = count($products);
	$totalPrice = 0.00; 
	
	foreach($products as $prod => $value) {
		
		$totalPrice += number_format($value, 2);

	    echo "<article>"; 
		echo "produkt: $prod prijs: $value";
	    echo "</article>"; 
	}	
	  
	echo sprintf("<br><span class='totalAmount'>Totaal te betalen: &euro;&nbsp;%.2f</span>", $totalPrice);
	
  }
  
?>
 