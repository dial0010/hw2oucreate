<?php
$pageTitle = "Home";
include "view-header.php";
?>
    <h1>Home</h1>

    <script>
      // Function to highlight the current page in the navbar
      function highlightNavbar() {
        const navbarLinks = document.querySelectorAll('.navbar-nav .nav-link');
        navbarLinks.forEach(link => {
          if (link.href.includes(window.location.pathname)) {
            link.classList.add('active');
          }
        });
      }

      // Call highlightNavbar when the page is loaded
      window.onload = highlightNavbar;
    </script>

<?php
include "view-footer.php";
?>
