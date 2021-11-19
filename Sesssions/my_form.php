<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
//start a session
    session_start();
    //$_SESSION (global variable) available

    //set session (assign value to a session)
    if(isset($_POST['submit']) &&! empty($_GET["submit"])){
      $_SESSION["SearchResultsSession"] = $_POST['search_results'];
      }
?>

  <!--This first form that will display the result searched in the same form called my_form.php-->
  <h1>First Search box</h1>
  <form action="my_form.php" method= "POST">
    <label for="text">Search</label>
    <input type="text" id="sb" placeholder="search here" name= "search_results" value="<?php echo (isset($_SESSION["SearchResultsSession"])) ? $_SESSION["SearchResultsSession"] : '' ;?>">

    <!--for submit button--->
    <input type="submit" name="submit" value="submit">
  </form>

  <!---printing user input on the same page my_form.php--->
  <?php 
    if(isset($_POST['submit']))//avoid warning
      {
        $searchbox=$_POST["search_results"];
        echo "You want search results for: ".$searchbox;
      }
  ?>
    <!--Second form to show results--->
  <h1>Second Search Box</h1>
  <form action="results_page.php" method="POST" target="_blank">
    <label for="text">Add</label>
    <input type="text" id="rp" name="searchbox" placeholder="Add to your database">
    <input type="submit" value="Add" name="Add!">
  </form>

  </body>
</html>