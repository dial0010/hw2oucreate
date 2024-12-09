<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$pageTitle?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs5-toast"></script> <!-- Toast Notification -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> <!-- jQuery for smoother animations -->

    <style>
      body {
        background-color: #f8f9fa;
        color: #495057;
      }
      .navbar {
        background-color: #343a40;
      }
      .navbar-brand, .nav-link {
        color: white;
      }
      .navbar-brand:hover, .nav-link:hover {
        color: #ffc107;
      }
      .container {
        margin-top: 50px;
      }
      .active {
        color: #ffc107 !important;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/" data-bs-toggle="tooltip" title="Go to Home">My Website</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="/" data-bs-toggle="tooltip" title="Home Page">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post.php" data-bs-toggle="tooltip" title="Create a Post">Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post-result.php" data-bs-toggle="tooltip" title="View Post Results">Post Result</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="get.php" data-bs-toggle="tooltip" title="Enter Data">Get</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="get-result.php" data-bs-toggle="tooltip" title="View Get Results">Get Result</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <script>
      // Initialize Bootstrap Tooltips
      document.addEventListener('DOMContentLoaded', function() {
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        tooltipTriggerList.forEach(function (tooltipTriggerEl) {
          new bootstrap.Tooltip(tooltipTriggerEl);
        });
      });
    </script>
