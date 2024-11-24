<?php 

$URL = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";

$response = file_get_contents($URL);
$response = json_decode($response, true);
$data = $response['results']; // Extract the 'results' array

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Statistics</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@latest/css/pico.min.css">
</head>
<body>
    <header>
        <h1>Statistics of Students' Nationalities</h1>
    </header>
    <main class="container">
        <div class="overflow-auto">
        <table role="">
            <thead data-theme="dark">
                <tr>
                    <th>Year</th>
                    <th>Semester</th>
                    <th>The Programs</th>
                    <th>Nationality</th>
                    <th>Colleges</th>
                    <th>Number of Students</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($data)): ?>
                    <?php foreach ($data as $record): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($record['year']); ?></td>
                            <td><?php echo htmlspecialchars($record['semester']); ?></td>
                            <td><?php echo htmlspecialchars($record['the_programs']); ?></td>
                            <td><?php echo htmlspecialchars($record['nationality']); ?></td>
                            <td><?php echo htmlspecialchars($record['colleges']); ?></td>
                            <td><?php echo htmlspecialchars($record['number_of_students']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">No data available</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>


        </div>
        
    </main>
</body>
</html>



<!-- Format -->
<!-- 
Array
(
    [total_count] => 45
    [results] => Array
        (
            [0] => Array
                (
                    [year] => 2018-2019
                    [semester] => First Semester
                    [lfsl_ldrsy] => الفصل الدراسي الاول
                    [the_programs] => Number of students enrolled in bachelor programs
                    [lbrmj] => عدد الطلبة المقيدين في برامج البكالوريوس
                    [nationality] => Bahraini
                    [ljnsy] => بحريني
                    [colleges] => College of IT
                    [lklyt] => كلية تقنية المعلومات
                    [number_of_students] => 1622
                )

            [1] => Array
                (
                    [year] => 2018-2019
                    [semester] => First Semester
                    [lfsl_ldrsy] => الفصل الدراسي الاول
                    [the_programs] => Number of students enrolled in bachelor programs
                    [lbrmj] => عدد الطلبة المقيدين في برامج البكالوريوس
                    [nationality] => GCC National
                    [ljnsy] => خليجي
                    [colleges] => College of IT
                    [lklyt] => كلية تقنية المعلومات
                    [number_of_students] => 146
                ) -->
