<?php
//These are the defined authentication environment in the db service

<<<<<<< HEAD
// The MySQL service named in the docker-compose.yml
=======
// The MySQL service named compose.yml.
>>>>>>> 0bea5c6f61dad0dd65044ee01a68dd2410430eee
$host = 'database';

// Database use name
$user = 'root';

//database user password
$pass = 'root';

// database name
$mydatabase = 'blj21_soccer';
// check the mysql connection status

$conn = new mysqli($host, $user, $pass, $mydatabase);

// select query
$sql = 'SELECT * FROM coach_mast limit 10';

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $coach_mast[] = $data;
    }
}

foreach ($coach_mast as $user) {
    echo "<br>";
    echo $user->coach_id . " " . $user->coach_name;
    echo "<br>";
}

$sql = 'SELECT country_name FROM Soccer_Country';

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $Soccer_Country[] = $data;
    }
}

foreach ($Soccer_Country as $user) {
    echo "<br>";
    echo $user->country_name;
    echo "<br>";
}

?>
