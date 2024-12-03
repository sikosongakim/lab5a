<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    function calculateArea($length, $width) {
        return $length * $width;
    }

    $length = 4; // Example value
    $width = 2;  // Example value
    $area = calculateArea($length, $width);
    ?>

    <p>
        <strong>The area of a rectangle with a length of <?php echo $length; ?> 
        and a width of <?php echo $width; ?> is <?php echo $area; ?>.</strong>
    </p>
</body>
</html>
