<?php
$pageTitle = "Post result";
include "view-header.php";
?>
    <div class="container">
        <h1>Post Result</h1>
        <div id="result" class="alert alert-info">
          <?php
          if (isset($_POST['my-name'])) {
              echo "<p>The value sent is: " . htmlspecialchars($_POST['my-name']) . "</p>";
          } else {
              echo "<p>No data received.</p>";
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
