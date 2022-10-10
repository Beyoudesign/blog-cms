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
    
    
<?php
    function getPostDetailsFromDatabase(){
        //Get the post title
        $postTitle = rawurldecode($_GET["The Art of Mixology"]);

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
    // Post details contains all the data to generate the blog from
    $postDetails = getPostDetailsFromDatabase();
?>
<h2> <?php echo $postDetails["title"]; ?> </h2>
<h3> <?php echo $postDetails["author"]; ?> </h3>
<h4> <?php echo $postDetails["date"]; ?> </h4>
<p> <?php echo $postDetails["content"]; ?> </p>




    <main>
       
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis purus sit amet volutpat consequat mauris nunc congue nisi. Pretium fusce id velit ut. Ultrices tincidunt arcu non sodales neque sodales ut. Tristique senectus et netus et malesuada fames ac turpis egestas. Diam sollicitudin tempor id eu nisl nunc mi ipsum faucibus. Metus dictum at tempor commodo ullamcorper a. Sapien eget mi proin sed libero enim sed faucibus turpis. Nisl pretium fusce id velit ut tortor pretium viverra. Quam viverra orci sagittis eu volutpat. Suscipit adipiscing bibendum est ultricies integer quis auctor. In fermentum posuere urna nec tincidunt praesent semper. Libero volutpat sed cras ornare arcu. Suspendisse ultrices gravida dictum fusce ut. Pharetra et ultrices neque ornare aenean. Iaculis eu non diam phasellus vestibulum lorem sed. Facilisis gravida neque convallis a cras semper auctor neque vitae. Venenatis a condimentum vitae sapien pellentesque.

                Pharetra diam sit amet nisl suscipit adipiscing. Massa vitae tortor condimentum lacinia quis vel eros donec ac. Sed vulputate odio ut enim blandit volutpat maecenas volutpat. Tellus cras adipiscing enim eu turpis egestas pretium. Sed felis eget velit aliquet sagittis id consectetur. Dolor morbi non arcu risus quis varius quam. Bibendum neque egestas congue quisque. Bibendum arcu vitae elementum curabitur vitae nunc sed velit. Ornare lectus sit amet est placerat in egestas erat imperdiet. Pharetra convallis posuere morbi leo. Blandit volutpat maecenas volutpat blandit. Fermentum iaculis eu non diam. Pharetra massa massa ultricies mi. Amet porttitor eget dolor morbi non. Elit ut aliquam purus sit amet luctus venenatis lectus. Amet porttitor eget dolor morbi. Pellentesque dignissim enim sit amet. Tempus iaculis urna id volutpat lacus laoreet. Nunc sed id semper risus in hendrerit gravida rutrum quisque.</p>


        </main>

    </div>

    <div id="footer">
        Site built using Apache, PHP, MySQL, VSC, HTML, CSS by beyoudesign
    </div>
</body>
</html>