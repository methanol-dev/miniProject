<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/miniProject/public/css/style.css">
    <title>Delete Category</title>
</head>

<body>
    <h2>Bạn có chắc muốn xóa danh mục này?</h2>
    <form action="http://localhost/miniProject/Category/delete/<?php echo $data['category']['id'];?>" method="post" style="width: 500px; margin: 0 auto; margin-top: 150px;">
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