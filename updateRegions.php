<?php
    /*Connection file to the database*/
    require_once 'myconnect.php';
    /*<input> field values are being read and assign to $variables.*/
    /*E.g. Input field with ID name Region_Name_Text is assign to variable name $region_Name */
    /*Follow the same naming convention and the job is easy*/
    $regions_ID = $_REQUEST['idText'];
    $regions_Name = $_REQUEST['Regions_NameText'];
    $nz_islands_ID = $_REQUEST['NZ_Islands_IDNumber'];
    $info = $_REQUEST['InfoText'];
    $image = $_REQUEST['ImageText'];
    $orderBy = $_REQUEST['OrderByText'];
    $disabled = $_REQUEST['DisabledText'];

    $sql = "Update regions set Regions_Name = '" . $regions_Name . "', NZ_Islands_ID = " . $nz_islands_ID .
    ", Info = '" . $info . "', Image = '" . $image . "', OrderBy = " . $orderBy . ", Disabled = " . $disabled . 
    " Where Regions_ID = " . $regions_ID;
    echo "SQL: " . $sql;
    if($conn->query($sql) === TRUE){
        echo "Record updated successfully";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header("Refresh:1; url=regions.php");

?>