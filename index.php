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
        // TO DO in Module 4
        // get this data from a database instead of hardcoding it
        $postTitles = array("The Art of Mixology", "Perfecting your Counts", "Balance is Key");
        return $postTitles;

        <?php
    function getPostDetailsFromDatabase(){
            //Get the post title
            $postTitle = rawurldecode($_GET"The Art of Mixology");
    
            include_once 'includes2/dbh.inc.php'; //Connect to the database
    
            //Get the post that matches the postTitle
            $sql = "SELECT * FROM posts WHERE title='" .$postTitle ."'";
            $result = mysqli_query($conn,$sql);
    
            //Get the first row from the result as an associative array
            $postDetails = mysqli_fetch_assoc($result);
            return $postDetails;
        }
        ?>
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