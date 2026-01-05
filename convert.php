<?php
$csvFile = '../degree.csv';
$jsonFile = 'database.json';

$data = [];
if (($handle = fopen($csvFile, 'r')) !== false) {
    // Skip header
    fgetcsv($handle);
    while (($row = fgetcsv($handle)) !== false) {
        $id = trim($row[0]);
        $degree = trim($row[1]);
        if ($degree === '') {
            $degree = 'N/A';
        }
        $data[$id] = $degree;
    }
    fclose($handle);
}

file_put_contents($jsonFile, json_encode($data, JSON_PRETTY_PRINT));
echo "Database updated successfully.";
?>
