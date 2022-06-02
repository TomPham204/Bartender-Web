<?php 

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        
        $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'admin'){

            $_SESSION['admin_name'] = $row['name'];
            header('location:admin_page.php');

        }elseif($row['user_type'] == 'user'){

            $_SESSION['user_name'] = $row['name'];
            header('location:user_page.php');

        }
    }else{
        $error[] = 'incorrect email or password!';
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>

    <link rel="stylesheet" href="css/register.css" />
</head>
<body>
<div class="grid-container">
    <nav class="flex navbar">
        <span class="logo">Webapp pj</span>
        <div class="nav">
          <a href="about.php">About</a>
        </div>
    </nav>

    <div class="info-pane flex">
        <h3>Welcome to our site</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima
          voluptas rem est rerum ratione error eligendi, ipsam nihil
          exercitationem eius excepturi dolores facilis unde perferendis ipsum
          reiciendis earum maxime? Labore?
        </p>
    </div>
    <div class="form-flex">
        <form action="" method="post">
            <h3>Login now</h3> 
            <?php 
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <input type="email" name="email" required placeholder="enter your email">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="submit" name="submit" value="login now" class="form-btn">
            <p>don't have an account? <a href="register_form.php">Register Now</a></p>
        </form>
    </div>
</div>
</body>
</html>