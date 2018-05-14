<?php include "dbconfig.php";?>

<html>
<body>

<?php

$id = $_POST['id'];
$rating = $_POST['rating'];
$review = $_POST['review'];
$query = "UPDATE user_review SET rating = " . $rating . ",review = '" . $review  . "',updated_at = NOW() " .  "WHERE id = " . $id;
//echo $query;


$conn = dbconnect();

mysqli_query($conn,$query);

echo "Review updated successfully";


mysqli_close($conn);



?>


<br>
<a href="index.php">Back to main page</a>

</body>
</html>
