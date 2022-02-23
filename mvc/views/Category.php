<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Category</title>
</head>

<body>
    <div style="padding: 20px;">
        <div> <a href="./Category/create" class="btn btn-success float-right" style="margin-bottom: 20px; margin-top:20px;">Add Category</a></div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php $i = 0; ?>
                <?php foreach ($data['categories'] as $category) { ?>
                    <tr>
                        <th scope="row"><?php echo ++$i; ?></th>
                        <td><?php echo $category['name']; ?></td>
                        <td><?php echo $category['description']; ?></td>
                        <td>
                            <a href="./Category/update/<?php echo $category['id']; ?>" class="btn btn-primary">Edit</a>
                            <a href="./Category/delete/<?php echo $category['id']; ?>" class="btn btn-danger" < href="deletelink" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>