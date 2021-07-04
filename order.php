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
	<h1 style= "font-family: Arial, Helvetica, sans-serif" align="center">Your Order:</h1>
	     
	<!--<?php echo "Hey your order is ready";
	    $size1 =$_REQUEST['size'];?>
		<br>
  <h4> <?php echo "Your cup: $size1";	?></h4>
  
  <?php $num =$_REQUEST['numCoffeee'];?>
		<br>
  <h4> <?php echo "Quantity: $num ";	?></h4>
	
	<?php $numC =$_REQUEST['numCream'];?>
		<br>
  <h4> <?php echo "Number of Cream: $numC";	?></h4>
  
	<?php $numS =$_REQUEST['numSugar'];?>
		<br>
   <h4> <?php echo "Number of Sugar: $numS";	?></h4>-->
  
  
  
  
  
  
		<?php
        
	  
    $cost=0;
    $size=$num=$numC=$numS=0;

	
   

$size1=$_REQUEST['size'];



$num=$_REQUEST['numCoffeee'];


        if($size1=="small")
        {
            for($s=0;$s<$num;$s++)
            {			
          	
			echo"<img src='cup.webp' height=100 width=100>";
			$price=2.00;
			$tax=0.10;
            $cost=2.10*$num;
			
            }
        }
        else if($size1=="medium")
        {
            for($s=0;$s<$num;$s++)
            {
            echo "<img src='cup.webp' height=120 width=110>";
          	$price=2.20;
			$tax=0.010;
		    $cost=2.30*$num;    
            }
        }
        else if($size1=="large")
        {
            for($s=0;$s<$num;$s++)
            {
            
            echo"<img src='cup.webp' height=150 width=130>";
           	$price=2.50;
			$tax=0.10;
		    $cost=2.60*$num;    
			}
        }
        else
        {        
            for($s=0;$s<$num;$s++)
            {
                echo"<img src='cup.webp' height=160 width=140>";
                $price=3.00;
				$tax=0.10;
				$cost=3.10*$num;            
            }
        }
		
	
		
		
$numC=$_POST['numCream'];
if($numC>0)
{
        echo "+";
        if($size1=="small")
        {
            for($s=0;$s<$numC;$s++)
            {
            echo" <img src='cream.jpg' height=100 width=100>";
            }
        }
        else if($size1=="medium")
        {
            for($s=0;$s<$numC;$s++)
            {
            echo "<img src='cream.jpg' height=100 width=100>";
           
            }
        }
        else if($size1=="large")
        {
            for($s=0;$s<$numC;$s++)
            {
            
            echo"<img src='cream.jpg' height=100 width=100>";
           
			}
        }
        else
        {        
            for($s=0;$s<$numC;$s++)
            {
                echo"<img src='cream.jpg' height=100 width=100>";
                            
            }
        }
    }

$numS=$_POST['numSugar'];
if($numS>0)
{       echo "+";
        if($size1=="small")
        {
            for($s=0;$s<$numS;$s++)
            {
            echo" <img src='sugar.webp' height=100 width=100>";
          
            }
        }
        else if($size1=="medium")
        {
            for($s=0;$s<$numS;$s++)
            {
            echo "<img src='sugar.webp' height=100 width=100>";
          
            }
        }
        else if($size1=="large")
        {
            for($s=0;$s<$numS;$s++)
            {
            
            echo"<img src='sugar.webp' height=100 width=100>";
          
			}
        }
        else
        {        
            for($s=0;$s<$numS;$s++)
            {
                echo"<img src='sugar.webp' height=100 width=100>";
                          
            }
        }

    }
		
		?><br>
		<?php echo "Hey your order is ready";
	    $size1 =$_REQUEST['size'];?>
		
		<br>
		<?php echo "Order Description:";
	    $size1 =$_REQUEST['size'];?>
		
  <h5> <?php echo "Your cup: $size1";	?></h5>
  
  <?php $num =$_REQUEST['numCoffeee'];?>
		
  <h5> <?php echo "Quantity: $num ";	?></h5>
	
	<?php $numC =$_REQUEST['numCream'];?>
		
  <h5> <?php echo "Number of Cream: $numC";	?></h5>
  
	<?php $numS =$_REQUEST['numSugar'];?>
		
   <h5> <?php echo "Number of Sugar: $numS";	?></h5>
		
		<?php
		
		    echo "<h4>Cost per coffee $:$price</h4>";
	 echo "<h4>Tax included $:$tax</h4>";
    echo "<h4>Total Cost $:$cost</h4> ";
        ?>
  
  
  
	
	
	
   </div>
	
   </div>
   
   
   


</body>
</html>