<?php

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve all POST data
    $postData = $_POST;

    // Read the contents of an existing file
    $existingFileContent = file_get_contents('./../../database/contact.txt');

    // Create a file to store the information
    $fileName = './../../database/contact.txt';
    $fileContent = json_encode($postData);

    $fileContent = $existingFileContent . PHP_EOL . $fileContent;

    // Write the data to the file
    file_put_contents($fileName, $fileContent);

    // Redirect to a success page
    header('Location: ./send-succes.php');
    exit;
} else {
    // Redirect to an error page
    header('Location: ./../public/home.php');
    exit;
}