<!-- CMS.php -->

<?php

// Include the class files
include 'Article.php';
include 'User.php';

// Create an article and a user
$article = new Article("PHP CMS", "Building a CMS with PHP and classes.");
$user = new User("john_doe", "john@example.com");

// Display the article and user details
$article->display();
$user->display();

?>
