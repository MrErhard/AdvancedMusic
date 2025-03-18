<?php
    require_once 'myconnect.php';
    $id = isset($_GET['id']) ? $_GET['id'] : 'No ID provided';
    $sql = "SELECT Attractions.* FROM Attractions where Attractions_ID = " . $id;
    $result = $conn->query($sql);
    $original_row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <!--There is a script in js folder, that does the validation of the data input -->
    <script src="js/insertAttractions.js"></script> 
    <title>NZ Attractions - Edit Attraction</title>
</head>

<body>
    <!--For details on the header, see file header.php -->
    <?php
        include_once('header.php');
    ?> 
    <div class="main" role="main">
        <form class="addAttractions" action="updateAttractions.php" method="post" name="insert" onsubmit="return validateForm();">
            <fieldset id="fields">
                <legend>Attraction</legend>
                <label for="titleText">Name</label>
                <input name="Attractions_NameText" id="Attractions_NameText" type="text" aria-label="Title Input for New Region" value="<?php echo $original_row['Attractions_Name'] ?>">
                <label>Region</label>
                <select name='Regions_IDNumber' id="Regions_IDNumber">
                    <?php
                    require_once 'myconnect.php';

                    $sql = "SELECT regions_ID, regions_Name FROM regions";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row["regions_ID"] . '">' . $row["regions_Name"] . '</option>';
                        }
                    }
                    ?>
                </select>                   
                <label>Attraction Type</label>
                <select name='Attractions_type_IDNumber' id="Attractions_type_IDNumber">
                    <?php
                    require_once 'myconnect.php';

                    $sql = "SELECT attractions_type_ID, attractions_type_Name FROM attractions_type";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row["attractions_type_ID"] . '">' . $row["attractions_type_Name"] . '</option>';
                        }
                    }
                    ?>
                </select>                        
                
                <label>Info</label>
                <input name="InfoText" id="InfoText" type="text" aria-label="Information for text" value="<?php echo $original_row['Info'] ?>">
                <label>Image</label>
                <input name="ImageText" id="ImageText" type="text" aria-label="Title Input for New Image" value="<?php echo $original_row['Image'] ?>">
                <label>Order by</label>
                <input name="OrderByText" id="OrderByText" type="number" step="any" aria-label="Order by" value="<?php echo $original_row['OrderBy'] ?>">
                <label>Disabled</label>             
                <input name="DisabledText" id="DisabledText" type="number" step="any" aria-label="Disabled info" value="<?php echo $original_row['Disabled'] ?>">
                <input name="idText" id="idText" type="hidden" value="<?php echo $original_row['Attractions_ID'] ?>">
            </fieldset>
            <fieldset>
                <input type="submit" value="Edit Attraction" class="button">
                <input type="reset" value="Reset" class="button">
            </fieldset>
        </form>

    </div>
    <?php
        include_once('footer.php')
    ?> 
</body>
</html>