<?php include "dbconfig.php";?>


<html>
<body>

<?php

$order_id = $_POST['order_id'];
$product_id = $_POST['product_id'];
$user_id = $_POST["user_id"];
$rating = $_POST['rating'];
$review = $_POST['review'];
$created_at = date("Y-m-d H:i:s");
$modified_at = date("Y-m-d H:i:s");
$query = "INSERT INTO user_review (order_id, product_id, user_id, rating, review, created_at, updated_at) VALUES ('" . $order_id . "', '" . $product_id . "','" . $user_id . "', " . $rating . ",'" . $review . "', now(), now());";
//echo $query;

$conn = dbconnect();

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

mysqli_query($conn,$query);

echo "Review created successfully";


mysqli_close($conn);

?>
<br>
<a href="index.php">Back to main page</a>

</body>
</html>
