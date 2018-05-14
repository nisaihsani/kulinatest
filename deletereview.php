<?php include "dbconfig.php";?>


<html>

 <head>
  <title>Delete Review</title>
 </head>


 <body>

<form action="deletesuccess.php" method="post">
<?php

$conn = dbconnect();

$rows = mysqli_query($conn,"SELECT * FROM user_review");


while ($row = mysqli_fetch_assoc($rows)) {

	$record = $row['order_id'] . "," . $row['product_id'] . "," . $row['user_id'] . "," . $row['rating'] . "," . $row['review'] ;
	$row_id = $row['id'];
#	echo $record;
?>
	<div>
		<input type="radio" id = "rec" name="review" value="<?php echo $row_id ?>"> <label for="rec">"<?php echo $record ?>"</label>
	</div>


<?php


}

?>

<input type="submit" value="Delete">
</form>

 </body>
</html>
