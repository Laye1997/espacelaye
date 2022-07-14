<?php
session_start();
// Create database connection using config file
include "../Connection.php";

// Fetch all users data from database
$result = mysqli_query($conn, "SELECT * FROM 'users' ORDER BY 'id' DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List members</title>
    <link rel="stylesheet" href="edit.css" />
</head>
<body>



    <table width='80%' border=1>

    <tr>
        <th>Nom</th> <th>Prenom</th> <th>Username</th><th>Email</th> 
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['first_name']."</td>";
        echo "<td>".$user_data['last_name']."</td>";
        echo "<td>".$user_data['username']."</td>";
        echo "<td>".$user_data['email']."</td>";
       // echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>
    

</body>
</html>
