<?php
// get_news.php

require_once('db.php');

// Retrieve news data from the "news" table
$query = "SELECT id, title, description, image_name, author, publish_date FROM news ORDER BY publish_date DESC";
$result = mysqli_query($link, $query);

// Prepare an array to hold the news data
$newsArray = array();

while ($row = mysqli_fetch_assoc($result)) {
    $newsArray[] = $row;
}

// Send the news data as a JSON response
header('Content-Type: application/json');
echo json_encode($newsArray);
?>
