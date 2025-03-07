<?php

    require_once 'connect.php';

    $attraction_Name = $_REQUEST['Attraction_NameText'];
    $region_ID = $_REQUEST['Region_IDText'];
    $info = $_REQUEST['InfoText'];
    $attraction_Type_ID = $_REQUEST['Attraction_Type_IDText'];
    $image = $_REQUEST['ImageText'];
    $orderBy = $_REQUEST['OrderByText'];
    $disabled = $_REQUEST['DisabledText'];

    $sql = "INSERT INTO attractions (Attraction_Name, Region_ID, Info, Attraction_Type_ID, Image, OrderBy, Disabled) 
        VALUES ('$attraction_Name', '$region_ID', '$info', '$attraction_Type_ID', '$image', '$orderBy', '$disabled')";

    if($conn->query($sql) === TRUE){
        echo "New record created successfully";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header("Refresh:1; url=AddAttractions.php");

?>