<?php

    require_once 'myconnect.php';

    $attractions_Name = $_REQUEST['Attractions_NameText'];
    $regions_ID = $_REQUEST['Regions_IDNumber'];
    $info = $_REQUEST['InfoText'];
    $attractions_Type_ID = $_REQUEST['Attractions_Type_IDNumber'];
    $image = $_REQUEST['ImageText'];
    $orderBy = $_REQUEST['OrderByNumber'];
    $disabled = $_REQUEST['DisabledNumber'];

    // echo '<h1>' . $attractions_Name . '</h1>';
    // echo '<h1>' . $regions_ID . '</h1>';
    // echo '<h1>' . $info . '</h1>';       
    // echo '<h1>' . $attractions_Type_ID. '</h1>';
    // echo '<h1>' . $image . '</h1>';
    // echo '<h1>' . $orderBy . '</h1>';
    // echo '<h1>' . $disabled . '</h1>';

    $sql = "INSERT INTO attractions (Attractions_Name, Regions_ID, Info, Attractions_Type_ID, Image, OrderBy, Disabled) 
        VALUES ('$attractions_Name', '$regions_ID', '$info', '$attractions_Type_ID', '$image', '$orderBy', '$disabled')";

    if($conn->query($sql) === TRUE){
        echo "New record created successfully";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header("Refresh:1; url=Attractions.php");

?>