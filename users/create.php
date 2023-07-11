
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

            if(isset($_POST['save'])){
                $name= $_POST['name'];
                $phone= $_POST['phone'];
                $address= $_POST['address'];
                $email= $_POST['email'];
                $password= md5($_POST['password']);

                if($name!="" && $phone!="" && $address!="" && $email!="" && $password!=""){
                    $submit="INSERT INTO users (name, phone, address, email, password) 
                    VALUES ('$name','$phone','$address','$email', '$password')";
                    $submit_result=mysqli_query($con,$submit);
                    if($submit_result){
                        ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                           <strong>Data are submitted</strong>
                           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
   
                       <?php
                       header("Refresh:2; url=index.php");
                    }
                    else{
                        ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                           <strong>Data are not submitted</strong>
                           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
   
                       <?php
                       header("Refresh:2; url=create.php");
                    }
                }
                else{
                    ?>
                     <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>All Fields are required</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>

                    <?php
                    header("Refresh:2; url=create.php");
                }

            }
            
            ?>
            <form class="row" action="#" method="POST" enctype="multipart/form-data">
                <div class="mb-3 col-lg-6 col-md-6">
                    <label for="Name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="Name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-lg-6 col-md-6">
                    <label for="Phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" name="phone" id="Phone" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-lg-6 col-md-6">
                    <label for="Address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="Address" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-lg-6 col-md-6">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-lg-6 col-md-6">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary" name="save">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <?php require("../inc/footer.php"); ?>