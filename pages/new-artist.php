<?php
if (isset($_POST['submitBtn'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'spotify_db');

    var_dump($_POST['artist-name']);
    var_dump($_POST['bio']);
    var_dump($_POST['gender']);
    var_dump($_POST['year']);

    $name = $_POST['artist-name'];
    $bio = $_POST['bio'];
    $gender = $_POST['gender'];
    $year = $_POST['year'];

    if ($conn) {
        echo 'Connected successfully<br>';

        $query = "INSERT INTO artists(name, bio, gender, birth_year)
        VALUES('$name', '$bio', '$gender', '$year')";

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
    <title>Create new Artist</title>
</head>

<body>
    <form method="POST">
        <label for="artist-name">Artist Name:</label>
        <input type="text" name="artist-name">
        <br>
        <label for="bio">Biography:</label>
        <textarea name="bio" id="" cols="30" rows="10"></textarea>
        <br>
        <label for="gender">Gender:</label>
        <select name="gender" id="">
            <option value=""></option>
            <option value="female">Female</option>
            <option value="male">Male</option>
            <option value="other">Other</option>
            <option value="not-say">Prefer not to say</option>
        </select>
        <br>
        <label for="year">Year of Birth:</label>
        <input type="number" min="1900" max="2099" step="1" name="year" value="2022"/>
        <br>
        <button type="submit" name="submitBtn">Add new Artist</button>
    </form>
</body>

</html>