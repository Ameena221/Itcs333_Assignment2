<?php 

$URL = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";


$response = file_get_contents($URL);
$response = json_decode($response, true);

//Testing 
// echo "<pre>"; 
// print_r($response);
// echo "</pre>";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/pico.min.css">
</head>
<body>
    <table>
        <?php 
        foreach ($response as $key => $value) {
            echo "". $key ."". $value ."";


        }
        
        ?>
    </table>


    <table>
        <th>
            <td></td>
            <td></td>
        </th>
    </table>
    
</body>
</html>