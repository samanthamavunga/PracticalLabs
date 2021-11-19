<?php require ("database_credentials.php");

//create connection using constant variables
$conn=new mysqli(servername, username, password, dbname);

//check connection status
if ($conn->connect_error){
  die("connection failed: ".$conn->connect_error);

  echo "Connection Failed! <br>";
}

//inserting into the database
$searchbox2=$_POST['searchbox'];
$sql = "INSERT INTO  practical_lab_table (search_term) VALUES ('$searchbox2')";

//check if record inserted successfully else print an error
if(isset($_POST['add'])){
  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully: ";
      echo $searchbox2;
  } 
  else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
//header("refresh:2; url=index.html"); 


?>
