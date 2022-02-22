<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Add Category</title>
</head>

<body>
    <form action="../Category/create" method="post" style="width: 500px; margin: 0 auto; margin-top: 150px;">
        <div class="container">
            <label for="uname"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>

            <label for="psw"><b>Description</b></label>
            <input type="text" placeholder="Enter Description" name="description" required>

            <button type="submit" name="submit">Submit</button>
        </div>
    </form>
</body>

</html>