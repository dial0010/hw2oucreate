<?php
$pageTitle = "Post";
include "view-header.php";
?>
    <div class="container">
        <h1>Post</h1>
        <form id="postForm" method="post" action="post-result.php">
          <div class="mb-3">
            <label for="my-name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="my-name" name="my-name" placeholder="Enter your name" oninput="countCharacters()" required>
            <div id="char-count" class="form-text">0/50 characters</div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
      // Function to count characters
      function countCharacters() {
        const nameInput = document.getElementById('my-name');
        const charCount = nameInput.value.length;
        document.getElementById('char-count').textContent = `${charCount}/50 characters`;
      }

      // Function to validate the form before submitting
      document.getElementById('postForm').addEventListener('submit', function(event) {
        const nameInput = document.getElementById('my-name');
        if (nameInput.value.trim() === "") {
          event.preventDefault();
          alert('Please enter your name before submitting.');
        }
      });
    </script>

<?php
include "view-footer.php";
?>
