<?php require 'database_credentials.php';

//create connection with database
$conn = new mysqli(servername,username,password,dbname);

//test connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

//get form data
$cid = $_GET['searchid'];

//write the delete sql
$del = mysqli_query($conn,"delete from practical_lab_table where Lab_id = '$cid'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:myformk.php"); // redirects to all records page
    exit;       
}
else
{
    echo "Error deleting record"; // display error message if not delete
}




?>