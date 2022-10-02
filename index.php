<?php
    include_once 'includes2/dbh.inc.php';
?>

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
        // Get the post title
        $postTitle = rawurldecode($_GET["title"]);
        
        //Get the post that matches the postTitle
        include_once 'includes2/dbh.inc.php';
        $sql = "SELECT * FROM posts WHERE title='" .$postTitle."'";
        $result = mysqli_query($conn, $sql);

        //Get the first row from the result as an associative array
        $postDetails = mysqli_fetch_assoc($result);
        return $postDetails;
    }



?>


    <main>
        
        <ul>
            <?php
            foreach($postTitles as $postTitle) {
                    echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle . 
                    "</a></li>";
                }
            ?>

         
            
        
        </ul>
    

    </main>

    
</body>
</html>