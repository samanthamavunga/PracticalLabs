<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Works</title>
</head>
<body>
<h1>Welcome All:</h1>
<!--Requiring my_add_function--->
  <?php require 'my_add_function.php';
  //calling Addition() function and assign is to a variable
  echo "The Addition of 4 and 6: " .Addition(4,5) . '<br>';
?>

<!--include other_functions.php to use it here-->
 <?php include 'other_functions.php';
 //assign Multplication function(that multiply 7 by 100) to a variable called mult
  echo "The results from multiplication of 7 by 100: ". Multiplication(7) .'<br>';//echo the results
?>
 
</body>
</html>



  

