<?php 
include 'includes/user.info.php';
session_start();
$db = mysqli_connect('localhost','root','','find');

function clear($data){
    global $db;
    $data = mysqli_real_escape_string($db , htmlspecialchars($data));
    return $data;
}
if(isset($_SESSION['id'])){
    $id_login = $_SESSION['id'];
    $user_login =  $_SESSION['user'];
}
if(isset($_GET['logut'])){
    session_unset();
    session_destroy();
    unset($id_login);
    unset($user_login);
    header("Location:login.php");
}

// get browser 
// $ip_insert = UserInfo::get_ip();
// $os_insert = UserInfo::get_os();
// $browser_insert = UserInfo::get_browser();
// $device_insert = UserInfo::get_device();
// $query = mysqli_query($db , "INSERT INTO `prey`(`ip`,`os`,`browser`,`device`) VALUES('$ip_insert','$os_insert','$browser_insert','$device_insert')");
// if($query){
//     echo "hello";
// }