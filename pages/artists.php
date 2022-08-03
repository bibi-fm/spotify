<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'spotify_db');

if ($conn) {

    $query = 
    'SELECT name, LEFT(bio, 20), gender, COUNT(title) FROM artists 
    INNER JOIN songs on artist_id = artists.id 
    GROUP BY artist_id';

    $results = mysqli_query($conn, $query);

    $artists = mysqli_fetch_all($results, MYSQLI_ASSOC);

    foreach ($artists as $artist) {
        echo $artist['name'] . '<br>';
        echo $artist['LEFT(bio, 20)'] . '<br>';
        echo $artist['gender'] . '<br>';
        echo $artist['COUNT(title)'] . '<br>';
    }
} else {
    echo 'Problem connecting with the database';
}
