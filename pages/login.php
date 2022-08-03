<?php
session_start();
if (isset($_POST['submit-btn'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $_SESSION['email'] = $_POST['email'];

        $conn = mysqli_connect('localhost', 'root', '', 'spotify_db');

        if ($conn) {
            echo 'Connected successfully<br>';

            $query = 'SELECT * FROM users';

            $results = mysqli_query($conn, $query);

            $table = mysqli_fetch_all($results, MYSQLI_ASSOC);

            /*echo '<pre>';
            var_dump($table[0]['email']);
            echo '</pre>';*/
            

            if ($table[0]['email'] === $_POST['email'] && $table[0]['password'] === $_POST['password']) {
                echo "User successfully logged in.<br>";
                setcookie('isLogIn', true);
            } else {
                echo "The credentials are incorrect. / User does not exist.<br>";
            }

            /*foreach ($table as $attributes) {
                echo $attribute['email'] . '<br>';
                echo $attribute['password'] . '<hr>';
            }*/
        } else {
            echo 'Problem connecting with the database';
        }

        //header("Location: ");

        /*echo '<pre>';
        var_dump($_SESSION);
        echo '</pre>';
        echo '<pre>';
        var_dump($_COOKIE);
        echo '</pre>';*/
    } else {
        echo "Password and email are mandatory!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>

<body>
    <form method="POST" action="">
        <label for="email">Email:</label>
        <input type="text" name="email">
        <br>
        <label for="password">Password:</label>
        <input type="text" name="password">
        <br>
        <button type="submit" name="submit-btn">Log In</button>
    </form>
</body>

</html>