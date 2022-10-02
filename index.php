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
    <div id="header">
        <h1>Chelsea's Bartending Blog</h1>
 


<nav>
    <div id="navigation">
    <a href="index.php">HOME</a>
    <a href="post.php">BLOGS</a>
    <a href="post_submission.php">NEW BLOG POSTS</a>
</div>
</nav>
    </div>
    
<?php
    function getPostTitlesFromDatabase() {
        // Get all the post titles from the posts table
        include_once 'includes2/dbh.inc.php';
        $sql = "SELECT title FROM posts";
        $result = mysqli_query($conn, $sql);
        

    }

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

         
            
        
        </ul>
    

    </main>

    
</body>
</html>