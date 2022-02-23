<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/miniProject/public/css/style.css">
    <title>Edit Category</title>
</head>

<body>
    <h2>Edit Category</h2>
    <form action="http://localhost/miniProject/Category/update/<?php echo $data['category']['id']; ?>" method="post" style="width: 500px; margin: 0 auto; margin-top: 150px;">
        <div>
            <?php if (isset($data['mess'])) {
                echo "<p style='color:red;'>" . $data['mess'] . "</p>";
            } ?>
        </div>
        <div class="container">
            <label for="uname"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required value="<?php echo $data['category']['name']; ?>">

            <label for="psw"><b>Description</b></label>
            <input type="text" placeholder="Enter Description" name="description" required value="<?php echo $data['category']['description']; ?>">

            <button type="submit" name="submit">Submit</button>
        </div>
    </form>
</body>

</html>