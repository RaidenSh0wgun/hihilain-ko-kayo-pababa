<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="css/style.css">
    <!-- all JS events here must be initialization only -->
    <?php 
        // strtoupper() -> capitalize all letters
        // strtolower() -> small caps all letters
        // basename() -> gets the base name of a URL 
        // (e.g. 
        //  basename(https://facebook.com/whateverpagehere)
        //  basename value: whateverpagehere
        // )
        // $_SERVER['PHP_SELF'] => gets the URL of your page file
    ?>
    <title>Final Lesson | <?php echo strtoupper(basename($_SERVER['PHP_SELF']));?></title>
</head>
<body>
