<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Digital Media. Advanced Websites</title>
</head>   
    <?php
        include_once('header.php')
    ?> 
<body>
 
    <div class="main" role="main">
        <!-- Sort Form -->
        <form id="sortForm" action="regions.php" method="post">
            <select name="sort" id="sort">
                <option value="Artist_Name">Artist</option>
                <option value="Genre">Genre</option>
                <option value="Rating">Rating</option>
                <option value="Title" selected>Title</option>
            </select>
            <input type="submit" value="Sort" class="button">
        </form>

        <h1>Regions in New Zealand</h1>
            <!-- php to display songs -->
            <?php
            require_once 'myconnect.php';

            // Create the database query
            $sql = "SELECT regions.* FROM regions";

            // // Check if there is a sort order requested
            // if(isset($_REQUEST['sort'])){
            //     $sql = $sql . " ORDER BY OrderBy";
            //     //$sql = $sql . " ORDER BY " . $_REQUEST['sort'];
            // } 
            // else {
            //     $sql = $sql . " ORDER BY OrderBy";
            // }

            $result = $conn->query($sql);

            echo '<section id="musicList">';

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<article>';
                        echo '<h2>' . $row["Regions_Name"] . '</h2>';
                        echo '<figure class="centre"><img src="' . $row["Image"] . '" height="150" width="150"></figure>';
                        echo '<p><span class="title">Info: </span><span>' . $row["Info"] . '</span></p>';
                        echo '<input type="button" value="edit" onclick="location.href=`editRegions.php?id=' . $row["Regions_ID"] . '`;">';
                        echo '<input type="button" value="delete" onclick="location.href=`deleteRegions.php?id=' . $row["Regions_ID"] . '`;">';
                    echo '</article>';
                }
            }
            echo '</section>';
            ?>
    </div>
    <footer>
        <p class="centre">&copy; 2025 LearnCoach.</p>
    </footer>
</body>
</html>

