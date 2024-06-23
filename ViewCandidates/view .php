<?php

// connection data base
$link = new mysqli('localhost', 'admin', 'password123', 'voting_system');
if ($link === false) {
  die('Could not connect: ' . mysql_error());
  exit();
}

// get data from data base
$result = mysqli_query($link, 'SELECT * FROM candidate');
 
if (mysqli_num_rows($result) > 0) {
    $rows = mysqli_fetch_assoc($result);
}

mysqli_close($result);
mysqli_close($link);

// API frame
$data = array();

for ($i = 0; $i < count($rows); $i++)
{
    $data[$i] = array();
    $data[$i]['can_name']       = $rows['candidate_name'][$i];
    $data[$i]['can_serial']     = $rows['candidate_serial'][$i];
    $data[$i]['can_photo']      = $rows['candidate_photo'][$i];
    $data[$i]['can_description'] = $rows['candidate_description'][$i];
}

require_once('home.php');

?>