<?php include "dbconfig.php";?>

<html>
<body>

<?php

$checked = $_POST['review'];

$conn = dbconnect();
$query = "DELETE FROM user_review WHERE id = " . $checked;
//echo $query;


mysqli_query($conn,$query);

echo "Review deleted successfully";


mysqli_close($conn);


?>


<br>
<a href="index.php">Back to main page</a>

</body>
</html>
