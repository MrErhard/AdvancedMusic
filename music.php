<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Digital Media. Advanced Websites</title>
</head>
<body>
    <header>
        <figure>
            <img src="images/lc-mint.png" width="100" alt="Learn Coach Logo.">
        </figure>
        <h1>Digital Media. Advanced Websites</h1>
    </header>
    <nav>
        <label for="navCheck"><i class="fas fa-bars"></i></label>
        <input type="checkbox" id="navCheck">         
        <div id="menuItems">
            <p><a href="index.php">Home</a></p>
            <p><a href="music.php">Music</a></p>
            <p><a href="addMusic.php">Add Music</a></p>
        </div>
    </nav>
    <div class="main" role="main">
        <!-- Sort Form -->
        <form id="sortForm" action="music.php" method="post">
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
            require_once 'connect.php';

            // Create the database query
            //$sql = "SELECT regions.* FROM regions";
            $sql = "SELECT Regions.*, nz_islands.* FROM regions, nz_islands  
            WHERE nz_islands.Island_ID = Regions.Island_ID";

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
                        echo '<h2>' . $row["RegionName"] . '</h2>';
                        echo '<figure class="centre"><img src="' . $row["Image"] . '" height="150" width="150"></figure>';
                        echo '<p><span class="title">Info: </span><span>' . $row["Info"] . '</span></p>';
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