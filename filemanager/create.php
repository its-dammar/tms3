<?php require("../inc/header.php"); ?>

<body>

    <header class="container">
        <?php require("../inc/navbar.php"); ?>
    </header>

    <section>
        <div class="container py-5 shadow  my-5">
            <div class="title pb-4">
                <h2> Add file</h2>
            </div>
            <div class="add-btn pb-4">
                <a name="" id="" class="btn btn-primary btn-sm" href="index.php" role="button">Manage files</a>

            </div>

            <?php
            if (isset($_POST['save'])) {
                $name = $_POST['name'];
                $filename = $_FILES['dataFile']['name']; // take full file name
                $filesize = $_FILES['dataFile']['size']; // take file size
                $explode = explode(".", $filename); // array to string conversion
                $fname = strtolower(@$explode[0]);  // convert  into lowercase
                $ext = strtolower(@$explode[1]);  // convert  into lowercase
                $file = str_replace(' ', '', $fname);
                $finalname = $file . time() . '.' . $ext;

                if ($name != "" && $finalname != "") {
                    if ($filesize <= 300000) {
                        if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg') {
                            if(move_uploaded_file($_FILES['dataFile']['tmp_name'],'../uploads/'.$finalname)){
                                $query="INSERT INTO filemanager(name, img_link) VALUES('$name', '$finalname')";
                                $result=mysqli_query($con, $query);
                                if($result){
                                    ?>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        <strong>File is submitted, Congratulation!</strong>
                                    </div>
        
                                <?php
                                header('Refresh:1; url=index.php');
                                }
                                else{
                                    header('Refresh:0');
                                    ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        <strong>File is not submitted, Try Again!</strong>
                                    </div>
        
                                <?php
                                }
                            }
                            else{
                                ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <strong>File is not uploaded, try again!</strong>
                                </div>
    
                            <?php
                            }
                        } else {
            ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                                <strong>File extension does not match, try again!</strong>
                            </div>

                        <?php
                        }
                    } else {
                        ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                            <strong>File size does not match, file size must be 2MB</strong>
                        </div>

                    <?php
                    }
                } else {
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        <strong>All fields are required</strong>
                    </div>

            <?php
                    // header("Refresh:1");
                }
            }
            ?>

            <form class="row" action="#" method="POST" enctype="multipart/form-data">
                <div class="mb-3 col-lg-6 col-md-6">
                    <label for="Name" class="form-label">File Name</label>
                    <input type="text" class="form-control" name="name" id="Name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-lg-6 col-md-6">
                    <label for="Phone" class="form-label">Image</label>
                    <input type="file" class="form-control" name="dataFile" id="Phone" aria-describedby="emailHelp">
                </div>
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary" name="save">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <?php require("../inc/footer.php"); ?>