<?php
    /*Connection file to the database*/
    require_once 'connect.php';
    /*<input> field values are being read and assign to $variables.*/
    /*E.g. Input field with ID name Region_Name_Text is assign to variable name $region_Name */
    /*Follow the same naming convention and the job is easy*/
    $region_Name = $_REQUEST['Region_NameText'];
    $island_ID = $_REQUEST['Island_IDNumber'];
    $info = $_REQUEST['InfoText'];
    $image = $_REQUEST['ImageText'];
    $orderBy = $_REQUEST['OrderByText'];
    $disabled = $_REQUEST['DisabledText'];

    $sql = "INSERT INTO regions (Region_Name, Island_ID, Info, Image, OrderBy, Disabled) 
        VALUES ('$region_Name', '$island_ID', '$info', '$image', '$orderBy', '$disabled')";
    $sql = "INSERT INTO regions (Region_Name, Island_ID, Info, Image, OrderBy, Disabled) 
        VALUES ('aaa', '1', 'info', 'image', '1', '0')";
    if($conn->query($sql) === TRUE){
        echo "New record created successfully";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header("Refresh:1; url=regions.php");

?>