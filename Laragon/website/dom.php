<?php 
    include_once("includes/datasample.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro to JS HTML DOM</title>
    <!-- You can put JS codes here inside <script> html tag -->
    <!-- Script tags here inside head tag are only for initialization -->
    <script>
        // JavaScript codes here
        const msg = "Hello world"
    </script>
</head>
<body>
    <h1 id="header">JS HTML Data Object Manipulation</h1>
    <p id="msg"></p>
    <button id="hideme">Hide header</button>
</body>
<script>
    const head = document.getElementById('header')
    console.info("<?php echo $carpool[0]["driver"];?>");
    // document methods must be after body tag
    // to get the id of an HTML tag
    // use: .getElementById("id_name")
    // document=> points to the html or php page
    
    // .getElementById() and similar has a lot of methods
    document.getElementById("msg").innerHTML = msg

    // addEventListener method applies an event function on an HTML tag
    document.getElementById('hideme').addEventListener("click", () =>{
        // .style applies css on an HTML tag
        // .style.rule applies a rule in a style of an HTML tag
        if(head.style.visibility === "hidden"){
            head.style.visibility = "visible"
            head.style.color = "#f00"
        }else{
            head.style.visibility = "hidden"
        }
    })

    // .getElementsByClassName() needs a loop to apply methods on it
</script>
</html>