<?php
    /*Connection file to the database*/
    require_once 'connect.php';
    /*<input> field values are being read and assign to $variables.*/
    /*E.g. Input field with ID name Region_Name_Text is assign to variable name $region_Name */
    /*Follow the same naming convention and the job is easy*/
    $regions_Name = $_REQUEST['Regions_NameText'];
    $nz_islands_ID = $_REQUEST['NZ_Islands_IDNumber'];
    $info = $_REQUEST['InfoText'];
    $image = $_REQUEST['ImageText'];
    $orderBy = $_REQUEST['OrderByText'];
    $disabled = $_REQUEST['DisabledText'];

    $sql = "INSERT INTO regions (Regions_Name, NZ_Islands_ID, Info, Image, OrderBy, Disabled) 
        VALUES ('$regions_Name', '$nz_islands_ID', '$info', '$image', '$orderBy', '$disabled')";
    if($conn->query($sql) === TRUE){
        echo "New record created successfully";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header("Refresh:1; url=regions.php");

?>