<!--Require the database credentials.php that contains database connection parameters
<?php require       __DIR__ . '/database_credentials.php';

//create connection
$conn=new mysqli(servername, username, password, dbname);


//check connection status
if ($conn->connect_error){
  die("connection failed: ".$conn->connect_error);

  echo "Connection Failed! <br>";
}


else{
  echo "Connection Successful! <br>";
}


$sql = "INSERT INTO  practical_lab_table (search_term) VALUES ('Google')";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} 
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//close connection
$conn->close();
?>





