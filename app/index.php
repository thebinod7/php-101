<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Conditions</title>

    <style>
        .container {
            max-width: 80%;
            margin:auto;
            background-color: black;
            color: white;
            padding:10px
        }
    </style>
</head>
<body>
    <div>
        <h1>Conditions</h1>
        <div class="container">
            <?php
                $age = 20;
                // Conditions
                if ($age >= 18) {
                    echo "You are an adult";
                } else {
                    echo "You are a minor";
                }

                echo "<br>";

                // Arrays
                $languages = ['PHP', 'JavaScript', 'Python', 'Java', 'C#'];
                echo $languages[2];

                //  While Loops
                $a = 1;
                while($a <= 5) {
                    echo "<br> $a";
                    $a++;
                }

                // For Loops
                for ($i=0; $i < count($languages); $i++) { 
                    echo "<br> $languages[$i]";
                }

                // Functions
                function printFive(){
                    echo "<br /> Five";
                }

                printFive();

            ?>
        </div>
    </div>
</body>
</html>