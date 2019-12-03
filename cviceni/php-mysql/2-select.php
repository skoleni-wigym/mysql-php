<?php

include('./1-connection.php');

$result = $db->query('SHOW DATABASES');

$data = $result->fetch_fields();

print_r($data);
die;

foreach ($data as $row) {
    echo $row->name . '<br>';
}