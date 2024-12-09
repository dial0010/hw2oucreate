<?php
$pageTitle = "Get";
include "view-header.php";
?>
    <h1>Get</h1>
    <form method="get" action="get-result.php" onsubmit="return validateGetForm()">
      <input type="text" name="my-name" id="get-name" oninput="countGetCharacters()" placeholder="Enter your name">
      <span id="get-char-count">0</span>/50 characters
      <input type="submit" value="Get data">
    </form>

    <script>
      function validateGetForm() {
        const nameInput = document.getElementById('get-name');
        if (nameInput.value.trim() === "") {
          alert("Please enter your name.");
          return false;
        }
        return true;
      }

      function countGetCharacters() {
        const nameInput = document.getElementById('get-name');
        const charCount = nameInput.value.length;
        document.getElementById('get-char-count').textContent = charCount;
      }
    </script>

<?php
include "view-footer.php";
?>

