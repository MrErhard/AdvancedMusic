<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/grid_styling.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mymain.css">
    <title>Region - Attractions</title>
</head>
<body>
    <?php
        include_once('header.php')
    ?> 
    <div class="main" role="main">
        <!-- Sort Form -->
        <form id="sortForm" action="attractions.php" method="post">
            <select name='filter' id="filter">
                <option value="0">All</option>
                <?php
                require_once 'myconnect.php';

                $sql = "SELECT Attractions_Type_ID, Attractions_Type_Name FROM Attractions_Type";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row["Attractions_Type_ID"] . '">' . $row["Attractions_Type_Name"] . '</option>';
                    }
                }
                ?>
                <input type="submit" value="Filter" class="button">
            </select>
        </form>            
            <!-- php to display songs -->
            <?php
            require_once 'myconnect.php';

            // Create the database query
            // Check if there is a sort order requested
            $sql = "SELECT attractions.* FROM attractions";
            if(isset($_REQUEST['filter'])){
                if ($_REQUEST['filter'] > 0) 
                {
                    $sql = $sql . " where Attractions_Type_ID = " . $_REQUEST['filter'];    
                }
            } 
           
            $result = $conn->query($sql);
            
            echo '<section id="musicList">';
            echo '<br>';
            echo '<div class="grid-container">';
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {


                    echo '<div class="grid-item">';
                        echo '<h1>' . $row["Attractions_Name"] . '</h1>';
                        echo '<img src="' . $row["Image"] . '">';
                        echo '<p>' . $row["Info"] . '</p>';
                        echo '<input type="button" value="edit" onclick="location.href=`editAttractions.php?id=' . $row["Attractions_ID"] . '`;">';
                        echo '<input type="button" value="delete" onclick="location.href=`deleteAttractions.php?id=' . $row["Attractions_ID"] . '`;">';
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