<?php
    //$title="This is my CRUD page, yo";
    $title=$_GET["title"];
    if ($title=="") {
        $title="My CRUD Cohort Home Page";
    }
    $header="This is the header";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
   <h1><?php echo $header; ?></h1> 
   <p><?php $sql = "SELECT id, firstname, lastname FROM people";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
     }
} else {
     echo "0 results";
};
?>
    </p>
</body>
</html>