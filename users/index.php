<?php require("../inc/header.php"); ?>

<body>

    <header class="container">
    <?php require("../inc/navbar.php"); ?>
    </header>

    <section>
        <div class="container py-5">
            <div class="title py-3">
                Manage Users
            </div>
            <div class="add-btn pb-4">
                <a name="" id="" class="btn btn-primary btn-sm" href="create.php" role="button">Add user</a>

            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>
                            <a name="" id="" class="btn btn-primary btn-sm " href="#" role="button">Edit</a>
                            <a name="" id="" class="btn btn-info btn-sm" href="#" role="button">View</a>
                            <a name="" id="" class="btn btn-danger btn-sm" href="#" role="button">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <?php require("../inc/footer.php"); ?>