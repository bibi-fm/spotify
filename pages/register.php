<?php
if (isset($_POST['register-btn'])) {

    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && str_contains($_POST['email'], "@") && $_POST['password'] === $_POST['check-pass']) {
        echo "Thank you for registering! You can now login on this page <a href = './login.php'>Login</a><br>";

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $conn = mysqli_connect('localhost', 'root', 'root', 'spotify_db');

        if ($conn) {
            echo 'Connected successfully<br>';

            $query = "INSERT INTO users(username, email, password)
        VALUES('$username', '$email', '$password')";

            $result = mysqli_query($conn, $query);

            if ($result)
                echo 'Successfully inserted in the DB.';
            else
                echo 'Problem inserting.';
        } else {
            echo 'Problem connecting with the database';
        }
    }
    if (empty($_POST['username'])) {
        echo "Please enter your username <br>";
    }
    if (empty($_POST['email']) || !str_contains($_POST['email'], "@")) {
        echo "You must enter an email and it must contain '@'. <br>";
    }
    if (empty($_POST['password'])) {
        echo "A password is required. <br>";
    } else if ($_POST['password'] != $_POST['check-pass']) {
        echo "Both passwords need to be a match. <br>";
    }

    /*var_dump($_POST['username']);
    var_dump($_POST['email']);
    var_dump($_POST['password']);*/
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" placeholder="Username">
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email" placeholder="Email">
        <br>
        <label for="password">Password:</label>
        <input type="text" name="password" placeholder="Password">
        <br>
        <label for="check-pass">Confirm Password:</label>
        <input type="text" name="check-pass" placeholder="Confirm Password">
        <br>
        <button type="sumbit" name="register-btn">Register</button>
        <br>
    </form>
</body>

</html>