<?php

    $connection = new MongoDB\Driver\Manager("mongodb://localhost:27017");

    $options = []; /* put desired options here, should you need any */

    $query = new MongoDB\Driver\Query($options);
    $rows = $connection->executeQuery('users.users', $query); // $mongo contains the connection object to MongoDB
    foreach($rows as $r){
    var_dump($r);
    echo '<br>';
}

?>