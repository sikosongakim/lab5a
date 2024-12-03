<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "Izwan Hakim bin Abdul Tahar";
        $matric_number = "CI220059";
        $course = "Information Security";
        $year_of_study = "3rd Year";
        $address = "123, Jalan Universiti, Parit Raja, Johor";
    ?>

    <table border="1" cellpadding="5">
        <tr>
            <td><b>Name</b></td>
            <td><?php echo $name; ?></td> 
        </tr>
        <tr>
            <td><b>Matric Number</b></td>
            <td><?php echo $matric_number; ?></td> 
        </tr>
        <tr>
            <td><b>Course</b></td>
            <td><?php echo $course; ?></td> 
        </tr>
        <tr>
            <td><b>Year of Study</b></td>
            <td><?php echo $year_of_study; ?></td> 
        </tr>
        <tr>
            <td><b>Address</b></td>
            <td><?php echo $address; ?></td> 
        </tr>
    </table>
</body>
</html>
