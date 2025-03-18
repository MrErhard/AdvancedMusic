<?php
    /*Connection file to the database*/
    require_once 'myconnect.php';
    /*<input> field values are being read and assign to $variables.*/
    /*E.g. Input field with ID name Region_Name_Text is assign to variable name $region_Name */
    /*Follow the same naming convention and the job is easy*/
    $attractions_ID = $_REQUEST['idText'];
    $attractions_Name = $_REQUEST['Attractions_NameText'];
    $attractions_type_ID = $_REQUEST['Attractions_type_IDNumber'];
    $regions_ID = $_REQUEST['Regions_IDNumber'];
    $info = $_REQUEST['InfoText'];
    $image = $_REQUEST['ImageText'];
    $orderBy = $_REQUEST['OrderByText'];
    $disabled = $_REQUEST['DisabledText'];

    // echo "Attractions ID: " . $attractions_ID;
    // echo "Region ID: " . $regions_ID;
    // echo "Attr Type ID: " . $attractions_type_ID;
    // echo "Info: " . $info;
    // echo "Image: " . $image;
    // echo "OrderBy: " . $orderBy;
    // echo "Disabled: " . $disabled;
    $sql = "Update Attractions set Attractions_Name = '" . $attractions_Name . "'," . "attractions_type_ID = " . $attractions_type_ID . 
    ", regions_ID = " . $regions_ID . ", Info = '" . $info . "', Image = '" . $image . "', OrderBy = " . $orderBy . ", Disabled = " . $disabled . 
    " Where Attractions_ID = " . $attractions_ID;
    //echo "SQL: " . $sql;
    if($conn->query($sql) === TRUE){
        echo "Attraction updated successfully";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header("Refresh:1; url=Attractions.php");

?>