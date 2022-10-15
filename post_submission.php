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
    include "head.php";
    
?>




    

  

    <div id="subheading">
        <h2>Create a new blog post</h2>
    </div>
   

    
        <!-- <form action="submit-post.php" method="POST">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title"><br><br>
            <label for="author">Author:</label>
            <input type="text" id="author" name="author"><br><br>
            <label for="date">Date:</label>
            <input type="text" id="date" name="date"><br><br>
            <label for="content">Content:</label>
            <textarea id="content" name="New Blog" rows="10" cols="110"></textarea><br><br>
            <input type="submit" value="Submit">
            <button type="submit" name="Submit">Blog Post</button>
        

        </form> -->

        <form action="submit-post.php" method="POST">
            <input type="text" name="title" placeholder="Title">
            <br><br>
            <input type="text" name="author" placeholder="Author">
            <br><br>
            <input type="date" name="date" placeholder="Date">
            <br><br>
            <input type="text" name="content" placeholder="Content">
            <br><br>
            <button type="submit" name="Submit">Blog Post</button>
            <br><br>

    </form>

       

   




    
</body>
</html>