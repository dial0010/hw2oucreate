<?php
$pageTitle = "Post";
include "view-header.php";
?>
    <h1>Post</h1>
    <form method="post" action="post-result.php" onsubmit="return validateForm()">
      <input type="text" name="my-name" id="my-name" oninput="countCharacters()" placeholder="Enter your name">
      <span id="char-count">0</span>/50 characters
      <input type="submit" value="Post data">
    </form>

    <script>
      function validateForm() {
        const nameInput = document.getElementById('my-name');
        if (nameInput.value.trim() === "") {
          alert("Please enter your name.");
          return false;
        }
        return true;
      }

      function countCharacters() {
        const nameInput = document.getElementById('my-name');
        const charCount = nameInput.value.length;
        document.getElementById('char-count').textContent = charCount;
      }

      // Confirm before form submission
      document.querySelector("form").addEventListener("submit", function() {
        if (confirm("Are you sure you want to submit this form?")) {
          return true;
        } else {
          return false;
        }
      });
    </script>

<?php
include "view-footer.php";
?>
