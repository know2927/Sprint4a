<!DOCTYPE html>

<?php
//Create a connection to our database
    $connect = mysql_connect("localhost","root","")or die("can not connect");
	if (!$connect) {die("Unable to connect to database");}
    $database = mysql_select_db("Quality Assurance", $connect);
	if (!$database) {die("could not find table");}
	function stz($s) {return mysql_real_escape_string(stripslashes($s));}
	// Current Product ID (primary key)
	//$cid = stz($_GET["P"]);
	// cata represents catagory
	//$cata = stz($_GET['shorts']);
	// Product name
	//$name = stz($_GET['Tan hiking shorts']);

	if ( isset( $pid ) && !empty( $pid ) ) {
		// get the previous reviews of the product
		$row = mysql_fetch_array(mysql_query("SELECT * FROM `customer review` WHERE `Product ID` = '$pid'"));
		$review = $row['Review'];
		$rating = $row['Rating'];
		$user = $row['User ID'];
		$date = $row['Date'];
	} 

	
?>

<html lang="en">


<head>
	<title>Spectre Sports </title>
	<meta charset="UTF-8">
	<link href="style1.css" rel="stylesheet" type="text/css" media="screen">


</head>


<body>



<?php
	$averageRating = 0;
	include("product/product_x.php");
	//preform a quary
	$pid= mysql_query("SELECT * FROM Customer Review", $connect);
	if ( isset( $row ) && !empty($pid)) {
		if ($pid[0].entry($cid )){
			$averageRating = $averageRating + $pid['Review']; 
			echo "<div  id='card' style='float:left; width: 50%;'>";
			
			
		}
	}
	
?>
</div>
</body>
<?php
	//close connection
	if (isset ($connect)) {
		mysql_close($connect);
	}

?>



</html>
