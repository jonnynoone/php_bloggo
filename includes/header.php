<?php
include 'config/config.php';
include 'libraries/Database.php';
include 'helpers/format_helper.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to Bloggo!</title>
    
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="index.php">Home</a>
          <a class="blog-nav-item" href="posts.php">All Posts</a>
          
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <div class="logo"><img src="images/logo.png" alt="Logo"></div>
        <h1 class="blog-title">Bloggo</h1>
        <p class="lead blog-description">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit vulputate nulla, non scelerisque sed velit et ornare.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">