<?php
    require_once 'myconnect.php';
    //here the code get the unique id passed to the page via the URL.
    $id = isset($_GET['id']) ? $_GET['id'] : 'No ID provided';
    //Now the query returns the record of the Attractions with the Attractions_ID = id
    $sql = "DELETE FROM Attractions where Attractions_ID = " . $id;

    if($conn->query($sql) === TRUE){
        echo "Record deleted successfully.";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header("Refresh:1; url=attractions.php");
?>
