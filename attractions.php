<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mymain.css">
    <link rel="stylesheet" href="css/gridstyling.css">
    <title>Region - Attractions</title>
</head>
<body>
    <?php
        include_once('header.php')
    ?> 
    <div class="main" role="main">
        <h1>Regions - Attractions</h1>

            <!-- php to display songs -->
            <?php
            require_once 'connect.php';

            // Create the database query
            $sql = "SELECT attractions.* FROM attractions";

            $result = $conn->query($sql);

            echo '<section id="attractionList">';
            echo '<div class="grid-container">';
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="grid-item">';
                        echo '<h2>' . $row["Attraction_Name"] . '</h2>';
                        echo '<img src="' . $row["Image"] . '">';
                        echo '<p>' . $row["Info"] . '</p>';
                    echo '</div>';
                }
            }
            echo '</div>';
            echo '</section>';
            ?>
    </div>
    <?php
        include_once('footer.php')
    ?> 
</body>
</html>