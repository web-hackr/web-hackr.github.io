<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'];

    // Save the message to a file, database, or perform any other desired action
    // For example, you can save messages to a text file
    file_put_contents('messages.txt', $message . PHP_EOL, FILE_APPEND);

    // Redirect back to the homepage after submission
    header('Location: index.php');
    exit;
}
?>
