
<?php require 'database_credentials.php';

//create connection with database
$conn = new mysqli(servername,username,password,dbname);

//test connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//QUERIES.

//select query
//select all from the results
$sql = "SELECT * FROM practical_lab_table";       
$result = $conn->query($sql);
$sno=1;

?>

<?php
//executing  select query
echo "The results from practical_lab table <br> <br>";
if ($result->num_rows > 0) {
    echo "<table width='100%' cellspacing=0 cellpadding=0>";
    echo "<tr bgcolor='#A9A9A9' height=30px>";
            echo "<th>#</th>";
            echo "<th>Search_term</th>";
            echo "<th>Lab_id</th>";
    echo "</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr align='center' bgcolor='#B0E0E6' height=30px>";
    
    echo "<tr align='center' bgcolor='#E6E6FA' height=30px>";
        echo "<td>".$sno."</td>";
        echo "<td>".$row["search_term"]."</td>";
        echo "<td>".$row["Lab_id"]."</td>";
        echo "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='Delete.php?
        searchid=".$row['Lab_id']."'>Delete</a></td>";

        echo "<td><a onClick=\"javascript: return confirm('Please confirm Edition');\" href='edit.php?
        searchid=".$row['Lab_id']."'>edit</a></td>";
    echo "</tr>";
    $sno++;
   }  
    echo "</table>";
   } 


   else {
    echo "Table contains no rows.";
  }

?>


