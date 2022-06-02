<?php 
	session_start();
    $db = mysqli_connect('localhost', 'root', '', 'user_db');

$id = 0;
$update = false;
$name = "";
$email = "" ;
$pass = "" ;
$user_type = "" ;

if(isset($_POST['save'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = md5($_POST['password']);
        $user_type = $_POST['user_type'];

        mysqli_query($db, "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')");
        $_SESSION['message'] = "Address saved"; 
        header('location:admin_page.php');
    }

if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    $user_type = $_POST['user_type'];

	mysqli_query($db, "UPDATE user_form SET name='$name', email='$email', password='$pass', user_type='$user_type' WHERE id=$id");
	$_SESSION['message'] = "Address updated!"; 
	header('location:admin_page.php');
}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM user_form WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location:admin_page.php');
}
?>