<?php
session_start();
$conn = mysqli_connect('localhost', 'root', 'root', 'spotify_db');

if ($conn) {
    echo 'Connected successfully<br>';

    $query = 'SELECT * FROM songs';

    $results = mysqli_query($conn, $query);

    $table = mysqli_fetch_all($results, MYSQLI_ASSOC);

    /*echo '<pre>';
            var_dump($table[0]['email']);
            echo '</pre>';*/
} else {
    echo 'Problem connecting with the database';
}

$title = $_POST['title'];
//$date = NOW();
//$user = ;
/**SELECT * FROM `users`
INNER JOIN playlists ON users.id = user_id
INNER JOIN; */
if (isset($_POST['create-btn']))  {
    if ($conn) {
        echo 'Connected successfully<br>';

        $query = "INSERT INTO playlists(title, creation_date, user_id)
        VALUES('$title', '$date', '$user')";

        $result = mysqli_query($conn, $query);

        if ($result)
            echo 'Successfully inserted in the DB.';
        else
            echo 'Problem inserting.';
    } else {
        echo 'Problem connecting with the database';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlists</title>
</head>

<body>
    <?php if (isset($_COOKIE['isLogIn'])) : ?>
        <div>
            <form method="POST">
                <h3>Create a new playlist</h3>
                <label for="title">Choose a title for your playlist:</label>
                <input type="text" name="title">
                <label for="song">Choose a song:</label>
                <select name="song" id="">
                    <?php
                    foreach ($table as $value) {
                        echo "<option>" .  $value['title'] . "</option>";
                    } ?>
                </select>
                <?php

                /*echo "<pre>"; 
                var_dump($table); 
                echo "</pre>";*/
                ?>
                <button type="submit" name="create-btn">Create</button>
            </form>
        </div>
        <div>
            <h2>My playlists</h2>
        </div>
    <?php endif; ?>
    <?php if (!isset($_COOKIE['isLogIn'])) : ?>
        <p>You do not have access to this page. Please login.</p>
        <a href='./login.php'>Login</a>
    <?php endif; ?>
</body>

</html>