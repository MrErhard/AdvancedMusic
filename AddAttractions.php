<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/insertAttractions.js"></script> 
    <title>NZ-Regions Add Attractions</title>
</head>

<body>
<?php
        include_once('header.php')
    ?> 
    <div class="main" role="main">
        <form class="addMusic" action="insertAttractions.php" method="post" name="insert" onsubmit="return validateForm();">
            <fieldset id="fields">
                <legend>New Attraction</legend>
                <label for="Attractions_NameText">Attraction Name</label>
                <input name="Attractions_NameText" id="Attractions_NameText" type="text">
                <label>Region_ID</label>
                <select name='Regions_IDNumber' id="Regions_IDNumber">
                    <?php
                    require_once 'connect.php';

                    $sql = "SELECT Regions_ID, Regions_Name FROM Regions";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row["Regions_ID"] . '">' . $row["Regions_Name"] . '</option>';
                        }
                    }
                    ?>
                </select>                
              
                <label>Info</label>
                <input name="InfoText" id="InfoText" type="text">  
                <label>Attraction_Type_ID</label>
                <select name='Attractions_Type_IDNumber' id="Attractions_Type_IDNumber">
                    <?php
                    require_once 'connect.php';

                    $sql = "SELECT Attractions_Type_ID, Attractions_Type_Name FROM Attractions_Type";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row["Attractions_Type_ID"] . '">' . $row["Attractions_Type_Name"] . '</option>';
                        }
                    }
                    ?>
                </select>                                                              
                <label>Image</label>
                <input name="ImageText" id="ImageText" type="text">
                <label>Order By</label>
                <input name="OrderByNumber" id="OrderByNumber" type="number" step="any">
                <label>Disabled</label>
                <input name="DisabledNumber" id="DisabledNumber" type="number" step="any">                
            </fieldset>
            <fieldset>
                <input type="submit" value="Submit Attraction" class="button">
                <input type="reset" value="Reset" class="button">
            </fieldset>
        </form>
    </div>
    <footer>
        <p class="centre">&copy; 2025 Improvements.</p>
    </footer>
</body>
</html>