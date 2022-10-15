<!DOCTYPE html>


<html>




<body>
    <div id="header">
        <h1>Chelsea's Bartending Blog</h1>
    </div>

<?php
    include "header.php";
    include "navigation.php";
    include "footer.php";
    include "head.php";
    
?>


<div id="sortable-blog-list">
    <input class="search" placeholder="Search" />
    <button class="sort" data-sort="title">Sort</button>
    <ul class="list">
        <?php
            $postTitles = getPostTitlesFromDatabase();
            foreach($postTitles as $postTitle) {
                echo "<li><a href='post.php?title=" . $postTitle 
                    . "' class='title'>" . $postTitle . "</a></li>";
            }
        ?>
    </ul>
</div>

<button onclick="revealMessage()">Click Me!</button>
<p id="hiddenMessage" style="display:none">You are AWESOME!</P>

<button>Alert me!</button>



<?php
    function getPostTitlesFromDatabase() {
        // Get all the post titles from the posts table
        include_once 'includes2/dbh.inc.php';
        $sql = "SELECT title FROM posts";
        $result = mysqli_query($conn, $sql);
        
        //Get each result row as an assoc array, then add title to $postTitles
        $postTitles = array();
        while($row = mysqli_fetch_assoc($result)){
            array_push($postTitles,$row['title']);
        }
        return $postTitles;

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