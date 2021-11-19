<?php

$conn1 = mysqli_connect("localhost", "root", "", "lab_post");

$id = $_GET['searchid']; // get id through query string


//select all query
$records = mysqli_query($conn1,"select * from practical_lab_table where Lab_id='$id'"); 


// fetch data
$data = mysqli_fetch_array($records); 


// when click on Update button
if(isset($_POST['update'])) 
{
    $Lab_id= $_POST['Lab_id'];
    $Search_term = $_POST['search_term'];
	
    $edit = mysqli_query($conn1,"update practical_lab_table set Lab_id='$id', search_term='$Search_term' where Lab_id='$id'");
	
    if($edit)
    {
        mysqli_close($conn1); // Close connection
        header("location:myformk.php"); // redirects to all records page
        exit;
    }

    else
    {
        echo mysqli_error($conn1);
    }    	
}
?>

<!--Form to perform the update--->
<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="Lab_id" value="<?php echo $data['Lab_id'] ?>" placeholder="Enter Lab ID" Required>
  <input type="text" name="search_term" value="<?php echo $data['search_term'] ?>" placeholder="Enter Search Term" Required>
  <input type="submit" name="update" value="Update">
</form>



        