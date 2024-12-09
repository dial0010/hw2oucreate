<?php
$pageTitle = "Post result";
include "view-header.php";
?>
<h1>Post result</h1>
<div id="post-result">
    <?php
    echo getDisplay();
    ?>
</div>

<script>
  function getDisplay() {
    <?php
    if (isset($_POST['my-name'])) {
        echo 'document.getElementById("post-result").innerHTML = "<p>The value sent is:</p>" + "' . $_POST['my-name'] . '";';
    } else {
        echo 'document.getElementById("post-result").innerHTML = "<p>Nothing posted to the page.</p>";';
    }
    ?>
  }
</script>

<?php
include "view-footer.php";

function getDisplay() {
    if (isset($_POST['my-name'])) {
        return "<p>The value sent is:</p>" . $_POST['my-name'];
    } else {
        return "<p>Nothing posted to the page.</p>";
    } 
}
?>
