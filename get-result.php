<?php
$pageTitle = "Get result";
include "view-header.php";
?>
    <div class="container">
        <h1>Get Result</h1>
        <div id="result" class="alert alert-info">
            <?php
            if (isset($_GET['my-name']) && !empty($_GET['my-name'])) {
                // Sanitize output to prevent XSS
                echo "<p>The value sent is: " . htmlspecialchars($_GET['my-name']) . "</p>";
            } else {
                echo "<p>No data received. Please enter your name and submit again.</p>";
            }
            ?>
        </div>
    </div>

    <script>
      // Display success toast notification
      setTimeout(function() {
        const toast = new bootstrap.Toast(document.getElementById('toastMessage'));
        toast.show();
      }, 1000);
    </script>

<?php
include "view-footer.php";
?>
