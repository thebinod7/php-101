<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

</head>
<body class="mx-20">
    <h1 class="text-3xl font-bold underline">
      Hello world!
    </h1>

    <div id="tbl-users" class="mt-5">
    <button type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Add User</button>

    <div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
               $host = "mysql";
               $user = "root";
               $pass = "root";
               $dbname = "demo_db"; 

               $conn = new mysqli($host, $user, $pass, $dbname);
               if($conn->connect_error){
                    die("Database connection error: " . $conn->connect_error);
               }
               $sql = "SELECT * FROM tbl_users";
               $result = $conn->query($sql);
               if(!$result){
                    die("Invalid data: " . $conn->error);
               }

               while($row=$result->fetch_assoc()){ 
                echo "<tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200'>
                <th scope='row' class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white'>
                    $row[id]
                </th>
                <td class='px-6 py-4'>
                    $row[name]
                </td>
                <td class='px-6 py-4'>
                    $row[email]
                </td>
                <td class='px-6 py-4'>
                    <a href='/edit.php?id=$row[id]' class='bg-green text-white'>Edit </a> | 
                    <a href='/delete.php?id=$row[id]' class='bg-green text-red-500'>Delete </a>
                </td>
                </tr>
                ";
               }
             ?>
        
        </tbody>
    </table>
    </div>
    </div>

</body>
</html>