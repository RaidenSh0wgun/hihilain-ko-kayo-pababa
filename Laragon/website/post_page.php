<?php
    // $_POST contains an array of variables received via the HTTP POST method.
    /*
        two main ways to send variables via the HTTP POST method
            > HTML forms
            > JavaScript HTTP requests 
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Lesson</title>
</head>
<body>
    <h1>POST using forms</h1>
    <h2>Send POST variables on same page</h2>
    <form method="post">
        <div>
            <label for="input-msg">Message</label><br/>
            <input id="input-msg" name="msg" type="text" placeholder="Enter a message..." />
        </div>
        <div style="margin-top: 20px">
            <label for="input-link">URL</label><br/>
            <input id="input-link" name="link" type="text" placeholder="Enter a valid link..." />
        </div>

        <button 
            type="submit"
            style="padding: 10px; background-color: #F00; color: #FF0; font-weight: bold; margin-top: 20px;"
        >Send</button>
    </form>

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
    <hr>
    <h2>Send POST variables to another page</h2>
    <form action="page2.php" method="post">
        <div>
            <label for="input-msg-2">Message</label><br/>
            <input id="input-msg-2" name="msg" type="text" placeholder="Enter a message..." />
        </div>
        <div style="margin-top: 20px">
            <label for="input-link-2">URL</label><br/>
            <input id="input-link-2" name="link" type="text" placeholder="Enter a valid link..." />
        </div>

        <button 
            type="submit"
            style="padding: 10px; background-color: #F00; color: #FF0; font-weight: bold; margin-top: 20px;"
        >Send</button>
    </form>

</body>
</html>