<?php require("../inc/header.php"); ?>

<body>

    <header class="container">
        <?php require("../inc/navbar.php"); ?>
    </header>

    <section>
        <div class="container py-5 shadow  my-5">
            <div class="title pb-4">
                <h2> Add User</h2>
            </div>
            <div class="add-btn pb-4">
                <a name="" id="" class="btn btn-primary btn-sm" href="index.php" role="button">Manage users</a>

            </div>

            <?php
            if (isset($_GET['id'])){
                $id=$_GET['id'];

                $select="SELECT *FROM users where id =$id";
                $select_result = mysqli_query($con, $select);

                // fetch single row data
                // $select_data=mysqli_fetch_assoc($select_result);
                $select_data=$select_result->fetch_assoc();     
            }


            ?>
            <form class="row" action="#" method="POST" enctype="multipart/form-data">
                <div class="mb-3 col-lg-6 col-md-6">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" readonly disabled class="form-control" name="name" value="<?php echo $select_data['name']; ?>" id="Name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-lg-6 col-md-6">
                    <label for="Phone" class="form-label">Phone</label>
                    <input type="tel" readonly disabled class="form-control" name="phone" value="<?php echo $select_data['phone']; ?>" id="Phone" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-lg-6 col-md-6">
                    <label for="Address" class="form-label">Address</label>
                    <input type="text" readonly disabled class="form-control" name="address" id="Address" value="<?php echo $select_data['address']; ?>" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-lg-6 col-md-6">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" readonly disabled class="form-control" name="email" value="<?php echo $select_data['email']; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </form>
        </div>
    </section>

    <?php require("../inc/footer.php"); ?>