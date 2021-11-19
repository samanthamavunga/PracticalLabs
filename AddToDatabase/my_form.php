<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<!--This first form that will display the result searched in the same form called my_form.php-->
  <h1>First Search box</h1>
  <form action="my_form.php" method= "POST">
    <label for="text">Search</label>
    <input type="text" id="sb" placeholder="search here" name= "search_results" value="search">
    <input type="submit" name="submit" value="submit">
  </form>

  <!---check if form is submitted--->
  <?php 
    if(isset($_POST['submit'])){
      $searchbox=$_POST["search_results"];
        echo "You want search results for: ".$searchbox;
      }
  ?>


  <?php require 'database_credentials.php';

  //create connection with database
  $conn = new mysqli(servername,username,password,dbname);

  //test connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  //Select Queries.

  //select query
  $sql = "SELECT Lab_id, search_term FROM practical_lab_table WHERE search_term='$searchbox'";       
  $result = $conn->query($sql);

  //executing  select query
  if(isset($_POST['submit']))
  {
    echo "<br>"."Lab_id "." "." search_term"."<br>";
    if ($result->num_rows > 0) {
    // output data of each row
      while($row = $result->fetch_assoc()) {
        echo $row["Lab_id"]. "" . $row["search_term"]."<br>";
          }
    } else {
          echo "<br>"."0 results";
      }
  }
  // close connection
  $conn->close();
?>
</body>
</html>