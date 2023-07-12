<?php require("../inc/header.php"); ?>

<body>
    <style>
        .hello{
            background-color: yellow;
        }
    </style>

    <header class="container">
    <?php require("../inc/navbar.php"); ?>
    </header>

    <section>
        <div class="container py-5">
            <div class="title py-3">
                Manage Users
            </div>
            <div class="add-btn pb-4">
                <a name="" id="" class="btn hello btn-sm" href="create.php" role="button">Add user</a>

            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $select= "SELECT *FROM users";
                    $result=mysqli_query($con, $select);
                    $i=1;
                    while($user=mysqli_fetch_array($result)){
                        ?>
                        <tr>
                        <th scope="row"><?php echo $i++; ?></th>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['address']; ?></td>
                        <td><?php echo $user['phone']; ?></td>
                        <td>
                            <a name="" id="" class="btn btn-primary btn-sm " href="edit.php?id=<?php echo $user['id']; ?>" role="button">Edit</a>
                            <a name="" id="" class="btn btn-info btn-sm" href="view.php?id=<?php echo $user['id']; ?>" role="button">View</a>
                            <a name="" id="" class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $user['id']; ?>" onclick="return confirm('Do you want to delete data??')" role="button">Delete</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </section>

    <?php require("../inc/footer.php"); ?>