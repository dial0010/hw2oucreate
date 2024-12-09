<?php
$pageTitle = "Get";
include "view-header.php";
?>
    <div class="container">
        <h1>Get</h1>
        <form id="getForm" method="get" action="get-result.php">
            <div class="mb-3">
                <label for="get-name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="get-name" name="my-name" placeholder="Enter your name" oninput="countGetCharacters()" required>
                <div id="get-char-count" class="form-text">0/50 characters</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
      // Function to count characters in the "Get" form
      function countGetCharacters() {
        const nameInput = document.getElementById('get-name');
        const charCount = nameInput.value.length;
        document.getElementById('get-char-count').textContent = `${charCount}/50 characters`;
      }

      // Form validation before submitting the form
      document.getElementById('getForm').addEventListener('submit', function(event) {
        const nameInput = document.getElementById('get-name');
        if (nameInput.value.trim() === "") {
          event.preventDefault();
          alert('Please enter your name before submitting.');
        }
      });
    </script>

<?php
include "view-footer.php";
?>
