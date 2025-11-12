<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Go back</a>
    <h1>$_GET from index.php</h1>
    
    <p>
        <?php 
            if(isset($_GET["msg"]) && strlen($_GET["msg"]) > 0){
                echo $_GET["msg"];  
            }else{
                echo "No message recieved";
            }
        ?>
    </p>

    <?php
        // isset() checks if a variable is other than a null; if variable exists it will return true, else it will return false
        // isset() returns a boolean
        if(isset($_GET["link"])){
            echo "<a href='{$_GET['link']}' target='_blank'>Go to {$_GET['link']}</a>";
        }
    ?>

    <hr>
    <h1>POST DATA from post_page.php</h1>
    <p>
        <?php 
            if(isset($_POST["msg"]) && strlen($_POST["msg"]) > 0){
                echo $_POST["msg"];
            }else{
                echo "No message received via HTTP POST method";
            }
        ?>
    </p>

    <br>
    <?php 
        if(isset($_POST["link"]) && strlen($_POST["link"]) > 0)
        {
    ?>
        <a href="<?php echo $_POST['link']; ?>" target="_blank">
            Go to <?php echo $_POST['link']; ?>
        </a>
    <?php 
        }
    ?>
</body>
</html>