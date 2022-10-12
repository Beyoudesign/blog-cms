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
    </div>

<?php
    include "header.php";
    include "navigation.php";
    include "footer.php";
?>

<!-- <div id="subheading">
        <h2>The Art of Mixology</h2>
        <h3>Chelsea Johnson</h3>
        <h4>10/10/2022</h4>
        <h5>Crafting delicious and fun drinks!</h5>
        
    </div> -->



    
    
<?php
    function getPostDetailsFromDatabase(){
        //Get the post title
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

<?php
    function showAllPosts(){
        //Get the post title
        // $postTitle = rawurldecode($_GET["title"]);

        //Get the post that matches the postTitle
        include_once "./includes2/dbh.inc.php";
        $sql = "SELECT * FROM posts" .$postTitle."'";
        $result = mysqli_query($conn, $sql);

        //Get the first row from the result as an associative array
        $allPosts = mysqli_fetch_assoc($result);
        return $allPosts;

    }
?>

<?php
    // Post details contains all the data to generate the blog from
    $allPosts = showAllPosts();
?>

<?php
    // Post details contains all the data to generate the blog from
    $postDetails = getPostDetailsFromDatabase();
?>

<h2> <?php echo $allPosts["title"]; ?> </h2>
<h3> <?php echo $allPosts["author"]; ?> </h3>
<h4> <?php echo $allPosts["date"]; ?> </h4>
<p> <?php echo $allPosts["content"]; ?> </p>


<h2> <?php echo $postDetails["title"]; ?> </h2>
<h3> <?php echo $postDetails["author"]; ?> </h3>
<h4> <?php echo $postDetails["date"]; ?> </h4>
<p> <?php echo $postDetails["content"]; ?> </h5>





    </div>

   
</body>
</html>