<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tim Hortons </title>
	<style>
	.header{border:1px solid black;
	height:100px;
	background-color:#B63223;
	position:static;
	color:white;
	text-align:center;
	        }
	.body{border:1px solid black; 
	      height:650px;
		  
		  background-color:silver;
		  }
    .body1{
	      border:1px solid black; 
	      height:550px;
		  width:30%;
		  align:left;
		  background-color:#B63223;
		  float:left;}
		  
	.body2{
	      border:1px solid black; 
	      height:550px;
		  width:69.5%;
		  align:left;
		  float:right;
		  text-align:center;
		  color:#B63223;
		   }
		  
	</style>
</head>
<body>
 <div class="header">
  <h1 style="align:center"><b><i>Tim Hortons</i></b><h1>
  </div>
  
    <div class="body">
	 <div class="body1">
	<img src="tim1.png" height="550px" width="100%">
   </div>
   <div class="body2">
	<h1 style= "font-family: Arial, Helvetica, sans-serif" align="center">Tim Horton <br>Welcomes you!</h1>
	<br><br>
	
	<form action="order.php" method="POST">
  <label for="numCoffeee">Number Of Coffees:</label>
  <input type="number" id="numCoffeee" name="numCoffeee" min="1" max="15">
  <br><br>
  <label for="choice">Size:</label>

<select name="size" id="size">
  <option value="small">Small</option>
  <option value="medium">Medium</option>
  <option value="large">Large</option>
  <option value="exlarge">Extra Large</option>
</select>
  <br><br>
  <label for="numCream">How many creams?:</label>
  <input type="number" id="numCream" name="numCream" min="1" max="4">
  <br><br>
  
    <label for="numSugar">How many sugar?:</label>
  <input type="number" id="numSugar" name="numSugar" min="1" max="4"><br><br><br><br>
  
  <input type="submit" value="Order" onclick="fun()" style="background-color:#B63223; height:50px; color:white;">
</form>

   </div>
	
   </div>
    
   
   


</body>
</html>