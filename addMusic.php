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
    <header>
        <figure>
            <img src="images/lc-mint.png" width="100" alt="Learn Coach Logo.">
        </figure>
        <h1>Digital Media. Advanced Websites</h1>
    </header>
    <nav>
        <label for= "navCheck"><i class="fas fa-bars"></i></label>
        <input type="checkbox" id="navCheck">      
        <div id="menuItems">
            <p><a href="index.php">Home</a></p>
            <p><a href="music.php">Music</a></p>
            <p><a href="addMusic.php">Add Music</a></p>
        </div>
    </nav>
    <div class="main" role="main">
        <form class="addMusic" action="insertMusic.php" method="post" name="insert" onsubmit="return validateForm();">
            <fieldset id="fields">
                <legend>New Song</legend>
                <label for="titleText">Title</label>
                <input name="titleText" id="titleText" type="text">
                <label>Image</label>
                <input name="imageText" id="imageText" type="text">
                <label>Rating</label>
                
                <fieldset class="rating" role="radiogroup" id="songRating">
                    <input value="1" id="star1" type="radio" name="rating" title="1 Star" aria-label="1 Star" >
                    <label for="star1" title="1 Star" aria-hidden="true"><i class="fas fa-star"></i></label>
                    <input value="2" id="star2" type="radio" name="rating"  title="2 Stars" aria-label="2 Stars">
                    <label for="star2" title="2 Stars" aria-hidden="true"><i class="fas fa-star"></i></label>
                    <input value="3" id="star3" type="radio" name="rating" title="3 Stars" aria-label="3 Stars" checked>
                    <label for="star3" title="3 Stars" aria-hidden="true"><i class="fas fa-star"></i></label>
                    <input value="4" id="star4" type="radio" name="rating" title="4 Stars" aria-label="4 Stars">
                    <label for="star4" title="4 Stars" aria-hidden="true"><i class="fas fa-star"></i></label>
                    <input value="5" id="star5" type="radio" name="rating" title="5 Stars" aria-label="5 Stars">
                    <label for="star5" title="5 Stars" aria-hidden="true"><i class="fas fa-star"></i></label>
                </fieldset>

                <label>Artist</label>
                <select name='artistText' id="artistText">

                    <!-- php to display artists -->
                    <?php
                    require_once 'connect.php';

                    $sql = "SELECT * from artist";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo'<option value="1">' . $row["Artist_Name"] . '</option>';
                        }
                    }
                    ?>

                </select>
                <label>Genre</label>
                <input name="genreText" id="genreText" type="text">
                <label>Price</label>
                <input name="priceText" id="priceText" type="number" step="any">
            </fieldset>
            <fieldset>
                <input type="submit" value="Submit Song" class="button">
                <input type="reset" value="Reset" class="button">
            </fieldset>
        </form>
    </div>
    <footer>
        <p class="centre">&copy; 2019 LearnCoach.</p>
    </footer>
</body>
</html>