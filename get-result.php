<?php
$pageTitle = "Get result";
include "view-header.php";
?>
    <h1>Get result</h1>
    <div id="get-result">
        <?php
        if (isset($_GET['my-name'])) {
            echo "<p>The value sent is:</p>" . $_GET['my-name'];
        } else {
            echo "<p>Nothing sent to the page.</p>";
        }
        ?>
    </div>

    <script>
      // Additional JavaScript logic can be added here if needed.
    </script>

<?php
include "view-footer.php";
?>
