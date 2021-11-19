<?php require 'database_credentials.php';

    //create connection with database
    $conn = new mysqli(servername,username,password,dbname);

    //test connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    //QUERIES.

    //select query
    $sql = "SELECT * FROM practical_lab_table";       
    $result = $conn->query($sql);

    //executing  select query
    echo "The results from practical_lab table <br> <br>";
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Lab_id: " .$row["Lab_id"]. " " . " search_term: ". $row["search_term"]."<br>";
        }
    } else {
        echo "<br>"."0 results";
    }
?>
<form action="edit_form.php" method="post">  
    <br><br>
    <label>Enter id of search term to modify: </label><input type="text" name="id" style="width:80px;" />  
    <label>Enter new search term to update: </label><input type="text" name="new" style="width:80px;"/> 
    <input type="submit" value="Update" name="update" />
</form> 

<?php
    //checking if form has been submitted
    if(isset($_POST['update'])){
        $id = $_POST["id"];
    }
    
    if(isset($_POST['update'])){
        $new = $_POST["new"];
    }

    //Query

    //update query
    $sql2 = "UPDATE practical_lab_table SET search_term='$new' WHERE Lab_id='$id'";

    if(isset($_POST['update'])){

        //select query - to check that record exist in db.
        $sql3 = "SELECT Lab_id, search_term FROM practical_lab_table WHERE Lab_id='$id'";       
        $result_update = $conn->query($sql3);
        
        if($result_update->num_rows > 0){
            if ($conn->query($sql2) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }
        }else{
            echo "<br>"."Record you want to update doesn't exist"."<br>";
        }
    }
    
    $conn->close();
?>

