PHP:PHP is server side scripting language.

Local server:
Xampp: Mac, windows   : htdoc  :- create a folder
Wampp: windows		: www   :- create a folder
Lamp: Linux
Mamp: mac, linux

1. install local server & set up it,

2. start wampp or xampp

3. create a project inside the www folder

4. file structure:
admin

  assets
     css
       style.css
     js
       min.js
     img

  index.php ( login page)
  register.php ( sign Up)
  home.php

  users
    create.php
    view.php
    edit.php
    index.php
    delete.php

  Gallery
    create.php
    view.php
    edit.php
    index.php
    delete.php

 inc
   header.php
   footer.php
   navbar.php
   sidebar.php

loginprocess
   login.php
   logout.php

connection
   config.php   (write code for database connection)


To run the project
localhost/project_name  ( browser)

1. For CURD:
Create:

a. create database:
localhost/phpmyadmin  (browser)

b. left: new ( click:- add database name)
crate table

c. id | int | AI
name | VARCHAR( 255) | 50 |
phone | VARCHAR( 255) | 15 |
address | VARCHAR( 255) | 100 |
email | VARCHAR( 255) | 50 |
password | VARCHAR( 255) | 200 |
status | Int |  default (1)|
created_at | Timestamp | CURRENT_TIMESTAMP |
updated_at |  Timestamp | CURRENT_TIMESTAMP |


d. connection -: config.php

$servername= "localhost";
$username= "root";
$password= "";
$dbname="tms3";

$con =new mysqli($servername, $username, $password, $dbname);

E. create.php

form attribute: action="" method="POST" enctype="multipart/form-data"

add name attribute in every input element: name="database field name"

and add name attribute in button element too.

f.  inside create.php

     <?php
<!-- first step  -->
            if(isset($_POST['save'])){
                $name= $_POST['name'];
                $phone= $_POST['phone'];
                $address= $_POST['address'];
                $email= $_POST['email'];
                $password= md5($_POST['password']);

<!-- second step :  -->
                if($name!="" && $phone!="" && $address!="" && $email!="" && $password!=""){
                    $submit="INSERT INTO users (name, phone, address, email, password) 
                    VALUES ('$name','$phone','$address','$email', '$password')";
                    
                    <!-- third step : check database connect or not-->

                    $submit_result=mysqli_query($con,$submit);

                    <!-- forth step : check data are submitted or not -->

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










