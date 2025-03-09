<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <!--There is a script in js folder, that does the validation of the data input -->
    <script src="js/insertRegions.js"></script> 
    <title>NZ Regions - Add Region</title>
</head>

<body>
    <!--For details on the header, see file header.php -->
    <?php
        include_once('header.php')
    ?> 
    <div class="main" role="main">
        <form class="addRegions" action="insertRegions.php" method="post" name="insert" onsubmit="return validateForm();">
            <fieldset id="fields">
                <legend>New Region</legend>
                <label for="titleText">Name</label>
                <input name="Regions_NameText" id="Regions_NameText" type="text">
                <label>Island</label>
                <select name='NZ_Islands_IDNumber' id="NZ_Islands_IDNumber">
                    <?php
                    require_once 'connect.php';

                    $sql = "SELECT nz_islands_ID, nz_islands_Name FROM nz_islands";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row["nz_islands_ID"] . '">' . $row["nz_islands_Name"] . '</option>';
                        }
                    }
                    ?>
                </select> 
                <label>Info</label>
                <input name="InfoText" id="InfoText" type="text">
                <label>Image</label>
                <input name="ImageText" id="ImageText" type="text">
                <label>Order by</label>
                <input name="OrderByText" id="OrderByText" type="number" step="any">
                <label>Disabled</label>
                <input name="DisabledText" id="DisabledText" type="number" step="any">            
            </fieldset>
            <fieldset>
                <input type="submit" value="Submit Region" class="button">
                <input type="reset" value="Reset" class="button">
            </fieldset>
        </form>

    </div>
    <br>
    <?php
        include_once('footer.php')
    ?> 
</body>
</html>