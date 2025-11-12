<?php
    // associative arrays are arrays that use named keys that you assign to them. 
    // similar to JavaScript Objects
    // syntax/structure:
    /*
        $var = [ "key" => "value" ]
    */

    // to call:
    /*
       echo $var["key"];
    */

    // to re-assign a new value:
    /*
        $var["key"] = "new_value";
    */

    // Values:
    /*
        > string
        > numbers (int, float, decimal)
        > arrays
    */

    // NOTE: array of associative arrays
    /*
        $var = [
            [
                "key" => "value",
            ],
            [
                "key" => "value",
            ],
            [
                "key" => "value",
            ],
        ]

        equivalent to JS:
        const var = [
            {
                key: value,
            },
            {
                key: value,
            },
            {
                key: value,
            },
        ]
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array Lesson</title>
</head>
<body>
    <h1>Associative array sample</h1>
    <?php 
        $urls = [
            [
                "name" => "Google",
                "url" => "https://google.com"
            ],
            [
                "name" => "W3Schools",
                "url" => "https://w3schools.com"
            ],
            [
                "name" => "Wikipedia",
                "url" => "https://wikipedia.com"
            ],
            [
                "name" => "Tenor",
                "url" => "https://tenor.com"
            ]
        ];
    ?>

    <h4>To call an array of associative array do this: <span style="color: #00F">$var[index_pos]["key"]</span></h4>
    <a href="<?php echo $urls[0]["url"] ?>" target="_blank">
        <?php 
            echo "Go to " . $urls[0]["name"] . " website";
        ?>
    </a>
    
    <!-- remove google url -->
    <?php array_shift($urls);  ?>

    <hr>

    <h1>Loop through / Iterate an array of associative array</h1>
    <?php
        // $car = [
        //     "brand" => "Ford",
        //     "model" => "Mustang",
        //     "year" => 1964
        // ];

        /*
            foreach($var as $key => $value){
                // code to execute
            }

            // without the "=> $value", $key will become $value 
        */
        // foreach($car as $c){
        //     echo "$c<br/>";
        // }
    ?>

    <?php
        echo "<h4>Iterate normally using foreach</h4>";
        foreach($urls as $url){
            foreach($url as $key => $value){
                echo "$key: $value <br/>";
            }
        }
        echo "<br><br>";
        echo "<h4>Apply to an HTML tag</h4>";
        // to apply it to an HTML tag
        for($x = 0; $x <= count($urls) - 1; $x++){
            ?>
                <a href="<?php echo $urls[$x]["url"]; ?>" target="_blank">
                    <?php 
                        echo "Go to ". $urls[$x]["name"] . " website";
                    ?>
                </a>
                <br/>
            <?php
        }
    ?>

    <hr>
    <h1>Associative array from another page</h1>
    <?php 
        // Note: all include_once or include functions must be at the very top of the file
        // Note 2: for the sake of readability for this lesson I'll use include_once here for now
        include_once("includes/datasample.php");
        foreach($carpool as $car){
            foreach($car as $key => $value){
                if($key != "passengers"){
                    echo "<p>$key: $value</p>";
                }else{
                    echo "<p>$key:</p>";
                    echo "<ol>";
                    for($x = 0; $x < count($value); $x++){
                        echo "<li>" . $value[$x] . "</li>";
                    }
                    echo "</ol>";
                }
            }
            echo "<hr>";
        }
    ?>

</body>
</html>