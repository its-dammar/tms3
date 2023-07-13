<?php require("../connection/config.php"); 
session_start();


// secure 
if(isset($_SESSION['email'])){

}
else{
    echo header("Location: ../index.php?msg=login_success");
}

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Tms</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>