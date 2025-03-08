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
        <!-- Sort Form -->
        <!-- <form id="sortForm" action="music.php" method="post">
            <select name="sort" id="sort">
                <option value="Artist_Name">Artist</option>
                <option value="Genre">Genre</option>
                <option value="Rating">Rating</option>
                <option value="Title" selected>Title</option>
            </select>
            <input type="submit" value="Sort" class="button">
        </form> -->

        <h1>Regions - Attractions</h1>

            <!-- php to display songs -->
            <?php
            require_once 'connect.php';

            // Create the database query
            $sql = "SELECT attractions.* FROM attractions";

            // // Check if there is a sort order requested
            // if(isset($_REQUEST['sort'])){
            //     $sql = $sql . " ORDER BY OrderBy";
            //     //$sql = $sql . " ORDER BY " . $_REQUEST['sort'];
            // } 
            // else {
            //     $sql = $sql . " ORDER BY OrderBy";
            // }

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
    <footer>
        <p class="centre">&copy; 2025 LearnCoach.</p>
    </footer>
</body>
</html>