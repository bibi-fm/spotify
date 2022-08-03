<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'spotify_db');


if(isset($_COOKIE['isLogIn']) && $_COOKIE['isLogIn'] == true) {
if ($conn) {
    $query ='SELECT username, email from users';
    $results = mysqli_query($conn, $query);
    $users = mysqli_fetch_all($results, MYSQLI_ASSOC);
    foreach ($users as $user) {
        echo $user['username'] . ' ';
        echo $user['email'] . ' ';
    }
} else {
    echo 'Problem connecting with the database';
}
} else {
    echo 'You are not logged in';
}
