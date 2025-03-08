<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/insertMusic.js"></script> 
    <title>Digital Media. Advanced Websites</title>
</head>

<body>
    <?php
        include_once('header.php')
    ?> 
    <div class="main" role="main">
        <form class="addRegions" action="insertRegions.php" method="post" name="insert" onsubmit="return validateForm();">
            <fieldset id="fields">
                <legend>New Region</legend>
                <label for="titleText">Name</label>
                <input name="titleText" id="Region_NameText" type="text">
                <label>Island</label>
                <input name="Island_IDNumber" id="Island_IDNumber" type="number" step="any">

                <label>Info</label>
                <input name="infoText" id="InfoText" type="text">
                <label>Image</label>
                <input name="imageText" id="ImageText" type="text">
                <label>Order by</label>
                <input name="orderByText" id="OrderByText" type="number" step="any">
                <label>Disabled</label>
                <input name="disabledText" id="DisabledText" type="number" step="any">            
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