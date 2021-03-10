<!DOCTYPE html>
<html lang="en">
    <head>
    		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" initial-scale="1" user-scalable="no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    		<meta name="title" content="">
    		<meta name="" content="">
    		<meta name="" content="">
        <title>Turnet</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <div class="container">
            <!-- PHP INCLUDE FUNCTION -->
            <?php include 'header.php'; ?>

            <!-- MAIN SECTION START -->
            <main class="main">
                <!-- PHP INCLUDE_ONCE FUNCTION -->
                <?php include_once 'main-sec.php'; ?>

                <!-- PHP REQUIRE_ONCE FUNCTION -->
                <?php require_once 'sidebar.php'; ?>
            </main>
            <!-- MAIN SECTION END -->

            <!-- PHP REQUIRE FUNCTION -->
            <?php require 'footer.php'; ?>
        </div>
    </body>
</html>
