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
        <h1>Instructions page</h1>
        <p>Welcome to the Advanced Websites Course’s example website.</p>
        <p>We’ll start this course roughly where you left off with the Intermediate Web Design course:</p>
        <ul>
            <li>A small music database.</li>
            <li>A website that queries the database to display the music on screen.</li>
            <li>A data entry form to enter data into the database.</li>
        </ul>
        <p>Rather than get you to create this content from scratch, we’ll provide it all for you so you can modify and change it as the course progressed.</p>
        <p>When the lesson videos tell you, you’ll need to complete a bunch of steps. You should know how to complete most of these tasks, but if not, refer to the previous courses for more information.</p>

        <h2>Start up your web server</h2>
        <p>As this course uses PHP and MySQL, you will need to be running a web server.</p> 
        <ul>
            <li>In the previous courses you used USBWebServer, so get that going!</li>
            <li>Make sure Apache and MySQL are running.</li>
        </ul>
        <figure>
            <img src="images/usbwebserver.png" alt="USB Web Server." width="500">
        </figure>

        <h2>Create a new database</h2>
        <p>You’re going to need a database to store and query the data.</p>
        <ul>
            <li>In phpMyAdmin, create a new AdvancedMusic database. </li>
            <li>Set the collation to utf8_general_ci.  </li>
        </ul>
        <figure>
            <img src="images/adddatabase.png" alt="Adding a new database in phpMyAdmin.">
        </figure>
        <p>We’ll talk about what collations are as part of the course.</p>

        <h2>Download the files</h2>
        <p>You’ll need to download two files to begin this course. They contain the data for the database and the files for the website.</p>
        <ul>
            <li><a href="https://advancedwebsitedemo.learncoach.com/files/advancedtemplate.zip">Database tables and data.</a></li>
            <li><a href="https://advancedwebsitedemo.learncoach.com/files/advancedmusic.sql">Site Template.</a></li>
        </ul>
    </div>
    <footer>
        <p class="centre">&copy; 2019 YourName.</p>
    </footer>
</body>
</html>