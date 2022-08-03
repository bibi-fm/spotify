<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="text" name="userInput" placeholder="Search for Songs...">
        <input type="submit" name="searchBtn" value="Search">
        <input type="submit" name="descBtn" value="Ascending">
        <input type="submit" name="ascBtn" value="Descending">
    </form>
</body>

</html>

<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'spotify_db');

if (isset($_POST['ascBtn'])) {
    if ($conn) {

        $query =
            'SELECT title, poster, name from songs
    INNER JOIN artists on artist_id = artists.id
    ORDER BY title ASC';

        $results = mysqli_query($conn, $query);

        $songs = mysqli_fetch_all($results, MYSQLI_ASSOC);

        foreach ($songs as $song) {
            echo $song['title'] . ' ';
            echo $song['poster'] . ' ';
            echo $song['name'] . '<br>';
        }
    } else {
        echo 'Problem connecting with the database';
    }
} else if (isset($_POST['descBtn'])) {

    if ($conn) {

        $query =
            'SELECT title, poster, name from songs
    INNER JOIN artists on artist_id = artists.id
    ORDER BY title DESC';

        $results = mysqli_query($conn, $query);

        $songs = mysqli_fetch_all($results, MYSQLI_ASSOC);

        foreach ($songs as $song) {
            echo $song['title'] . ' ';
            echo $song['poster'] . ' ';
            echo $song['name'] . '<br>';
        }
    } else {
        echo 'Problem connecting with the database';
    }
} else {

    if ($conn) {

        $query =
            'SELECT title, poster, name from songs
        INNER JOIN artists on artist_id = artists.id
        ORDER BY title DESC';

        $results = mysqli_query($conn, $query);

        $songs = mysqli_fetch_all($results, MYSQLI_ASSOC);

        foreach ($songs as $song) {
            echo $song['title'] . ' ';
            echo $song['poster'] . ' ';
            echo $song['name'] . '<br>';
        }
    } else {
        echo 'Problem connecting with the database';
    }
}

?>