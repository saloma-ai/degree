<?php
// Read the JSON database
$database = json_decode(file_get_contents('database.json'), true);

// Get the submitted ID
$id = $_POST['id'] ?? '';

// Check if ID exists in the database
if (isset($database[$id])) {
    $degree = $database[$id];
    echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Exam Degree Result</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f4f4f4; }
        .container { background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); text-align: center; }
        h1 { color: #333; }
        .result { font-size: 24px; color: #4CAF50; margin: 20px 0; }
        a { color: #4CAF50; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class='container'>
        <h1>Exam Degree Result</h1>
        <div class='result'>Your degree for ID $id is: $degree</div>
        <a href='index.html'>Search another ID</a>
    </div>
</body>
</html>";
} else {
    echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Exam Degree Result</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f4f4f4; }
        .container { background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); text-align: center; }
        h1 { color: #333; }
        .error { font-size: 24px; color: #f44336; margin: 20px 0; }
        a { color: #4CAF50; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class='container'>
        <h1>Exam Degree Result</h1>
        <div class='error'>ID not found. Please check your ID and try again.</div>
        <a href='index.html'>Try again</a>
    </div>
</body>
</html>";
}
?>
