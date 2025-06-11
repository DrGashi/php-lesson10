<?php
    include_once("config.php");
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $surname=$_POST['surname'];
        $email=$_POST['email'];

        $sql="INSERT INTO users(name, surname, email) VALUES (:name, :surname, :email)";
        $sqlQuery = $conn->prepare($sql);
        
        $sqlQuery->bindParam(':name', $name);
        $sqlQuery->bindParam(':surname', $surname);
        $sqlQuery->bindParam(':email', $email);

        $sqlQuery->execute();
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Add User</title>
    </head>
    <body>
        <fieldset>
            <legend>Add User</legend>
            <form action="add.php" method="post">
                <input type="text" name="name" id="name" placeholder="Name"><br>
                <input type="text" name="surname" id="surname" placeholder="Surname"><br>
                <input type="text" name="email" id="email" placeholder="Email"><br>
                <button type="submit" name="submit">Add</button>
            </form>
        </fieldset>
    </body>
</html>