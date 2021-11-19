/executing delete query
             //To cater for the delete when the record is not found
           
            
            else if(isset($_POST['delete']))
            {
                $sql3 = "SELECT Lab_id, search_term FROM practical_lab_table WHERE search_term or Lab_id='$delete_search'";       
                $result_delete = $conn->query($sql3);

                if ($result_delete->num_rows < 0) {

                    if ($conn->query($sql2) === TRUE) {
                        echo "Record deleted successfully";
                      } else {
                        echo "Error deleting record: " . $conn->error;
                    }
                } 
            }