<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h2>Home</h2>
    <?php
    while ($row = mysqli_fetch_array($data['sv'])) {
        echo $row['id'] . '<br>';
        echo $row['hoten'] . '<br>';
        echo $row['namsinh'] . '<br>';
        echo '<br>';
    }
    ?>
</body>

</html>