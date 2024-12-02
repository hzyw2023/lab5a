<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangle Area Calculator</title>
</head>
<body>
<h1>Rectangle Area Calculator</h1>
<form method="post">
    <label>
        Length: <input type="number" name="length" step="1" required>
    </label>
    <br><br>
    <label>
        Width: <input type="number" name="width" step="1" required>
    </label>
    <br><br>
    <button type="submit">Calculate Area</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Function to calculate the area
    function calculateArea($length, $width)
    {
        return $length * $width;
    }

    // Retrieve user input
    $length = $_POST['length'];
    $width = $_POST['width'];

    // Calculate and display the area
    $area = calculateArea($length, $width);
    echo "<p><strong>The area of a rectangle with a length of $length and a width of $width is $area</strong></p>";
}
?>
</body>
</html>
