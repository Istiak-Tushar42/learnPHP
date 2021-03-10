<?php
  if(isset($_FILES['image'])) {
    // echo "<pre>";
    //   print_r($_FILES);
    // echo "</pre>";

    $file_name = $_FILES['image']['name'];
    $file_type = $_FILES['image']['type'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];

    // echo $file_name . "<br>";
    // echo $file_type . "<br>";
    // echo $file_size . "<br>";
    // echo $file_tmp . "<br>";

    if(move_uploaded_file($file_tmp, "assets/uploaded-images/" . $file_name)) {
      echo "Successfully Uploaded";
    } else {
      echo "Couldn't upload the file";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>File Upload Global Variable</title>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <form action="" method="POST" enctype="multipart/form-data" class="contact bg-white">
        <h1>Get In Touch</h1>

        <fieldset>
            <legend>File Upload</legend>

            <div class="form-field">
                <label for="upload">Upload Image</label>
                <input type="file" name="image" class="input-field" value="">
            </div>

            <div class="submit-field">
                <button type="submit" name="save" class="submit-btn">Submit</button>
            </div>
        </fieldset>
    </form>
  </body>
</html>
