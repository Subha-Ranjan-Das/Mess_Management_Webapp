
<!DOCTYPE html>
<html>
<head>
	<title>Information on Foods</title>
	
<style>
h1{text-align: center;
    color: #FFFF38;
	font-size: 50px;
}
 
table,th,td{
	border: 2px solid black;
	color:white;
}

.contain {
  position: relative;
  text-align: center;
  color: white;
}

.heading {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.rate{
	color:#5DADEC;
}

.carte{
	color:#A83731;
	text-align: center;
}
</style>

</head>

<body>

<div class="contain">
  <img src="final.png" alt="hostel" height="350px" width="1060px">
  <div class="heading"><h1>Information On Types Of Food In Mess </h1></div>
</div>

<h1 class='rate'>Rate List</h1>
<h1 class='carte'>Carte Menu</h1>
<table border='1' cellpadding="15px" width="50%" bgcolor='#FF6037' align='center'>

<?php

$FoodsArray = array('Chhola Bhatura'=>70,'Puri & Sabji'=>50,'Plain Maggi'=>28,'Veg Maggi'=>30,
					'Cheese Maggi'=>45,'Butter Maggi'=>36,'Paneer Roll'=>55,
					'Egg Maggi'=>35,'Egg Roll'=>40,'Veg/Allu Roll'=>38,'Double Egg Roll'=>46,'Onion Chili Maggi'=>37,
					'Chicken Roll'=>53,'Egg Chicken Roll'=>65, 'Double Egg Chicken Roll'=>75,
					'Paneer Pakoda (5 Pcs.)'=>52,'TANDOORI CHICKEN'=>160,'MASALA KULCHA'=>32,
					'Chapati'=>6,'Plain Paratha'=>15,'Allu Paratha'=>33,'Paneer Paratha'=>43,
					'Methi Paratha with Sabji'=>55,'Egg Paratha'=>25,'Mix Veg Curry'=>45,
					'Mix Veg Do-pyaza'=>54,'Paneer Do-Pyaza'=>72,'Paneer Bhujia'=>95,'Paneer Butter Masala'=>68,
					'Mattar Paneer'=>73,'Dum Aloo'=>46,'Chana Masala'=>62,'Mushroom Masala'=>66,'Jeera Aloo'=>64,
					'Dal Fry'=>46,'Dal Makhani'=>56,'Egg Tadka'=>57,'Egg Bhujia'=>33,'Egg Omelet'=>25,'Chicken Masala'=>106,
					'Chicken Kasa'=>80,'Chicken Kadhai'=>82, 'Chicken Fried Rice'=>59,'Sejuwan Fried Rice  (Veg.)'=>62,
					'Sejuwan Fried Rice  (Egg.)'=>68,'Sejuwan Fried Rice  (Chicken.)'=>74,
					'Veg Chowmin'=>60,'Paneer Chowmin'=>66,'Egg Chowmin'=>59,'Chicken Chowmin'=>60,'Egg Chicken Chowmin'=>65,
					'Chili Garlic Chowmin (Veg)'=>61,'Chili Garlic Chowmin (Non Veg)'=>108,
					'Veg Manchurian (5 Pcs.)'=>81,'Chili Veg (5 Pcs.)'=>67,
					'Chili Mushroom'=>105,'Garlic Mushroom'=>104,'Cripshi Aloo'=>47,'Chili Paneer'=>97,'Garlic Paneer'=>67,
					'CHICKEN TIKKA'=>100,'TANDOORI KABAB'=>120,'Chicken Pakoda (6 Pcs.) Bone less'=>75,'PANEER TIKKA'=>110, 
					'PLAIN NAN'=>23,'BUTTER NAN'=>26);



$items = array_keys($FoodsArray);
$price = count($FoodsArray);

echo "<tr>";
echo "<th>"."Sl"."."."no."."</th>";
echo "<th>"."ITEMS"."</th>";
echo "<th>"."PRICE"."</th>";
echo "</tr>";

for($c=0;$c<$price;$c++)
{
	echo "<tr>";
	echo "<td>".($c+1)."</td>";
    echo "<td>".array_search($FoodsArray[$items[$c]],$FoodsArray,false)."</td>";
	echo "<td>".$FoodsArray[$items[$c]]."</td>";
	echo "</tr>";
	
}


?>
</table>
</body>
</html>