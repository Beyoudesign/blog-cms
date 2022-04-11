<?php
    include "header.php";
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

    <div id="subheading">
        <h2>Create a new blog post</h2>
    </div>

    <main>
        <form action="/post_submission.php">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title"><br><br>
            <label for="author">Author:</label>
            <input type="text" id="author" name="author"><br><br>
            <label for="date">Date:</label>
            <input type="text" id="date" name="date"><br><br>
            <label for="content">Content:</label>
            <textarea id="content" name="New Blog" rows="10" cols="110"></textarea><br><br>
            <input type="submit" value="Submit">
        

        </form>

        </main>

    </div>

    <div id="footer">
        Site built using Apache, PHP, MySQL, VSC, HTML, CSS by beyoudesign
    </div>
</body>
</html>