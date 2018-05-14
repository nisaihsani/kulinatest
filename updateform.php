<html>
<body>


<form action="updatesuccess.php" method="post">

<?php

$checked_id = $_POST['review'];
//echo "You have selected id" . $checked_id;

?>
Rating: <input type="number" name="rating" min="1" max="5"><br>
Review: <input type="text" name="review"><br>
<input type="hidden" name="id" value="<?php echo $checked_id?>">
<input type="submit">

</form>

<br>
<a href="index.php">Back to main page</a>

</body>
</html>
