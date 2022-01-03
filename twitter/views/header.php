<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Stylesheet -->
    <link rel="stylesheet" href = "http://cloned-twitter-com.stackstaging.com/content/12-twitter/styles.css">

    

    <title>Twitter Clone</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="http://cloned-twitter-com.stackstaging.com/content/12-twitter/">Twitter</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="?page=twitter">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=timeline">Timeline</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=yourtweets">Tweets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=publicprofiles">Profiles</a>
        </li>
        
      </ul>
      <div class="d-flex">
        <?php
        if ($_SESSION['id']) { ?>
          <a class="btn btn-outline-success"  href ="?function=logout">Logout</a>
          <?php
        } else {
        ?>
       <button class="btn btn-outline-success"  data-bs-toggle="modal" data-bs-target="#exampleModal">Login/Signup</button>
       <?php } ?>
       
      </div>
    </div>
  </div>
</nav>

    