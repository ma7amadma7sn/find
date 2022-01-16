<?php include 'includes/nav.php'; ?>
<?php 
if(isset($_POST['login'])){
    $username = clear($_POST['username']);
    $password = clear($_POST['password']);
    if(empty($username) || empty($password)){
        $_SESSION['error_login'] = "تکایە خانەکان بە وردی پر بکەوە";
    }else{
        $query = mysqli_query($db , "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password' ");
            if(mysqli_num_rows($query) === 1){
                while($row = mysqli_fetch_assoc($query)){
                        $_SESSION['user'] = clear($row['username']);
                        $_SESSION['id'] = clear($row['id']);

                }
                header("Location:index.php");
            }

    }
}

?>
<div class="col-sm-6 m-auto">
<form class="mt-5 bg-white p-2 border-10 text-center" method="POST" action="login.php">
    <?php if(isset($_POST['login'])){ ?><div class="bg-danger text-white border-10 p-1"><?php echo $_SESSION['error_login'] ?></div><?php } ?>
    <input type="text" name="username" class="form-control mt-2" placeholder="Enter email">
    <input type="password" name="password" class="form-control mt-2" placeholder="Password">
  <button type="submit" name="login" class="btn btn-danger w-50 mt-2">login</button>
</form>
</div>

<?php include 'includes/footer.php'; ?>