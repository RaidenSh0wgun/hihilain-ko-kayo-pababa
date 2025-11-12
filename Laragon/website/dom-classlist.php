<?php
    include_once("pages/sections/header.php");
?>
<div id="content">
    <h1>Hello World!</h1>
    <p>URL directory: <?php echo $_SERVER['PHP_SELF']; ?></p>
    <p>Basename of URL: <?php echo basename($_SERVER['PHP_SELF']); ?></p>
    <hr>
    <h1>getElementsByClassName('class')</h1>
    <button id="hide-class">Hide all elements with hide-me class</button>
    <p test="hello i am from an attribute" class="highlight">Hello</p>
    <p class="hide-me highlight">Hi</p>
    <p class="highlight">Good Morning</p>
    <p class="hide-me">Good bye</p>
    <p class="hide-me">World!</p>
</div>
<?php
    include_once("pages/sections/footer.php");
?>