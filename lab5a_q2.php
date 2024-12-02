<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
<?php
$students = [
        [
            'name' => 'Clement Foong',
            'program' => 'BIS',
            'age' => '22',
        ],
        [
            'name' => 'Bob',
            'program' => 'BIS',
            'age' => '20',
        ],
        [
            'name' => 'Raju',
            'program' => 'BIT',
            'age' => '22',
        ],
];
?>

<table border="">
    <tr>
        <th>Name</th>
        <th>Program</th>
        <th>Age</th>
    </tr>
    <?php foreach ($students as $student): ?>
        <tr>
            <td><?= $student['name'] ?></td>
            <td><?= $student['program'] ?></td>
            <td><?= $student['age'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>