<?php
$pageTitle = "Home";
include "view-header.php";
?>
    <div class="container my-5">
        <h1 class="text-center">Welcome to Our Website!</h1>
        <p class="text-center">This is the home page. Navigate through the menu to explore more.</p>
    </div>

    <script>
      // Highlight active navbar link
      document.addEventListener("DOMContentLoaded", function() {
        const currentPath = window.location.pathname;
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

        navLinks.forEach(link => {
          if (link.href.includes(currentPath)) {
            link.classList.add('active');
          }
        });
      });
    </script>

<?php
include "view-footer.php";
?>
