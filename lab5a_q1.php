<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
<?php
$name = "Clement Foong Wen Kai";
$matricNum = "AI220270";
$course = "Web Development";
$yearOfStudy = "3";
$address = "48, Jalan Universiti 46, Taman Universiti";
?>

<table border="">
    <tr>
        <td>Name</td>
        <td><?php echo "$name"; ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?= $matricNum ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?= $course ?></td>
    </tr>
    <tr>
        <td>Year of Study</td>
        <td><?= $yearOfStudy ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?= $address ?></td>
    </tr>
</table>

</body>
</html>
