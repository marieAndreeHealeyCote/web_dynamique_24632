<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "Peter";
    echo $name;

    echo "<br>";

    $colors = array('Pink', 'Green', 'Black');
    print_r($colors);
    echo "<br>";

    echo $colors[1];
    echo "<br>";
    $student = array('name' => 'Peter', 'age' => 16, 'address' => 'Pie IX');

    print_r($student );

    echo "<br>".$student['name'];

    echo "<pre>";
    var_dump($student);
    echo "</pre>";
    ?>
    
</body>
</html>