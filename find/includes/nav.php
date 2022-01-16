<?php
include 'includes/config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Find ip</title>
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-lg navbar-light bg-light m-5 border-10"  style="box-shadow:0px 0px 10px 0px white;">
  <a class="navbar-brand" href="#">Navbar</a>

 
    <ul class="navbar-nav mr-auto">
      <?php if(isset($id_login)){echo '
      <li class="nav-link">
        <a class="nav-link" href="?logut">Logut</a>
      </li>'; } ?>

    </ul>
</nav>