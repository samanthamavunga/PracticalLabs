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
    if(isset($_POST['Add!']))//avoid warning
    {
      $searchbox2=$_POST["searchbox"];
    }
  ?>

<!---printing user input on another page--->
<?php require("database_credentials.php");

//create connection
  $conn=new mysqli(servername, username, password, dbname);

    //check connection status
    if ($conn->connect_error){
      die("connection failed: ".$conn->connect_error);
    }


    if(isset($_POST['Add!']))
      {
        $sql = "INSERT INTO  practical_lab_table (search_term) VALUES ('$searchbox2')";
        
        
          //check if record inserted successfully else print an error
          if (mysqli_query($conn, $sql)) {
            echo "New record created successfully: ";
            echo "You added: " .$searchbox2. ", into your database";
          } 
          else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
        }

      $conn->close();
  ?>
</body>
</html>



