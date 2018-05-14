<html>

 <head>
  <title>Create Review</title>
 </head>


 <body>

<form action="insertsuccess.php" method="post">
Order ID: <input type="text" name="order_id"><br>
Product ID: <input type="text" name="product_id"><br>
User ID: <input type="text" name="user_id"><br>
Rating: <input type="number" name="rating" min="1" max="5"><br>
Review: <input type="text" name="review"><br>
<input type="submit">
</form>


 </body>
</html>
