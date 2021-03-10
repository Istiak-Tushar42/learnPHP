<!-- CONTACT US FORM START -->
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="contact">
<!-- <form action="testform.php" method="post" class="contact"> -->
    <h1>Get In Touch</h1>

    <fieldset>
        <legend>Contact Us</legend>

        <div class="form-field">
            <label for="name">Enter Name</label>
            <input type="text" name="name" class="input-field" value="">
        </div>

        <div class="form-field">
            <label for="age">Enter Age</label>
            <input type="text" name="age" class="input-field" value="">
        </div>

        <div class="submit-field">
            <button type="submit" name="save" class="submit-btn">Submit</button>
        </div>
    </fieldset>

    <div style="margin-top: 1.5rem">
      <?php
        if(isset($_POST['save'])) {
          echo $_POST['name'] . "<br>";
          echo $_POST['age'] . "<br>";
        }
      ?>
    </div>
</form>
<!-- CONTACT US FORM END -->
