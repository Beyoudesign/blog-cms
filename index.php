<!DOCTYPE html>


<head>

<script src="hello.js"></script>

    

   






<title>
    Chelsea Johnson
</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

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

<button onclick="revealMessage()">Click Me!</button>
<p id="hiddenMessage" style="display:none">You are AWESOME!</P>





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