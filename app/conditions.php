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
            background-color: blue;
        }
    </style>
</head>
<body>
    <div>
        <h1>Conditions</h1>
        <div class="container">
            <?php
                $age = 20;
                if ($age >= 18) {
                    echo "You are an adult";
                } else {
                    echo "You are a minor";
                }
            ?>
        </div>
    </div>
</body>
</html>