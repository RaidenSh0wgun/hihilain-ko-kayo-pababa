<?php 
    // $_GET and $_POST
    /* 
        syntax of $_GET:
            $_GET["url_var"]

        syntax of $_POST:
            $_POST["post_var"]

        
    */
    include_once("pages/sections/header.php");
?>

<body>
    <div id="content">
    <h1>$_GET with links</h1>
    <a href="/website?msg=hello world!!&link=page2.php ">$_GET message</a>
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
    
    <h1>$_GET using forms (not recommended)</h1>
    <!-- 
        form method default is GET
        <form action="url" method="POST | GET">
            
        </form>

        where:
         > action -> goes to another page, if url is not provided it will still submit the form on the same page
         (e.g. /website#)
         > method -> defaults to GET


        input html tag
        -> for user inputs

        syntax:
        <input
            name="" -> important
            value="" -> optional, place a value inside if you want a default value
            placeholder="" -> optional, UX purposes
            type="" -> important
        />

        input types:
            > text
            > tel
            > email
            > submit -> it acts a button but input html tags are not customizable
            > password
            > image
            > file
            > date
            > checkbox

        label html tag
        -> for labeling input tags in place of placeholder attribute
        -> placeholder attribute and label can coexist

        syntax:
        <label for="id_of_input">text here</label>

        button html tag
        -> for clicking
        -> DOM of JavaScript is needed here
        -> customizable (css)

        syntax:
        <button 
            type="" -> important
        >
            text here
        </button>
    -->
    <form action="page2.php" method="GET">
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

    <hr/>

    <h1><a href="post_page.php">Go to POST page</a></h1>

    <hr>
    <h1><a href="associative_array.php">Go to Associative Array page</a></h1>

    <hr>
    <h1><a href="dom.php">Go to Data Object Manipulation of JavaScript</a></h1>
    </div>
</body>
</html>