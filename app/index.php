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

                // Connect database
                $host = "mysql";
                $user = "root";
                $pass = "root";
                $dbname = "demo_db"; // replace with your DB name
                try {
                    // PDO connection
                    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
                    $pdo = new PDO($dsn, $user, $pass);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // Read query to fetch data from 'users' table
                    $sql = "SELECT id, name, email FROM tbl_users";
                    $stmt = $pdo->query($sql);

                    // Display data
                    echo "<br><br><h3>Users List:</h3>";
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "ID: " . $row['id'] . " - Name: " . $row['name'] . " - Email: " . $row['email'] . "<br>";
                    }

                } catch (PDOException $e) {
                    echo "Connection failed: " . $e->getMessage();
                }

            ?>
        </div>
    </div>
</body>
</html>