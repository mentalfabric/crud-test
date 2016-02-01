<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge Shmallenge</title>
</head>
<body>

// Check connection
<?php 
        $host = "127.0.0.1";
        $user = "quackattack999";
        $password = "";
        $db = "crud";
        //$port = 3306;

// Create connection
       $connection = new mysqli($host, $user, $password, $db);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
    $query="SELECT * FROM people";
$results = $connection->query($query);
echo '<table>';
while ($row = mysqli_fetch_array($results)) {
    echo '<tr>';
    foreach($row as $field) {
        echo '<td>' . htmlspecialchars($field) . '</td>';
    }
    echo '</tr>';
} 
?>
</table>
</body>
</html>