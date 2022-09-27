<?php
    include "header.php";
    include "navigation.php";
    include "footer.php";
    
?>

<html>

<head>

<title>
    Chelsea Johnson
</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
    
<?php
    function getPostTitlesFromDatabase() {
        // TO DO in Module 4
        // get this data from a database instead of hardcoding it
        
?>
    <main>
        
        <ul>
            <?php
                $postTitles = getPostTitlesFromDatabase();

                foreach($postTitles as $postTitle) {
                    echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle . 
                    "</a></li>";
                }
            ?>

            <li><a href="post.php">The Art of Mixology</a></li>
            <li><a href="post.php">Perfecting your Counts</a></li>
            <li><a href="post.php">Balance is Key</a></li>
            
        
        </ul>
    

    </main>

    
</body>
</html>