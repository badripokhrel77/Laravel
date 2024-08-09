<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="../navbar/nav.css">
    <link rel="stylesheet" href="../footer//footer.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>
    <?php
    include '../navbar/nav.php';
    ?>
<body>
    <div class="wrapper">
        <form action="login.php" method="post">
            <div class="header">
                <div class="head_a">
                    <img src="../images/HRRS logo HD.webp" alt="HRRS">
                </div>
                <div class="head_b">
                    <h2>Login </h2>
                </div>
            </div>
            <div class="input-box"> <input type="text" name="email" placeholder="Email" required> <i
                    class='bx bxs-envelope'></i>
            </div>
            <div class="input-box"> <input type="password" name="password" placeholder="password" required> <i
                    class='bx bxs-lock-alt'></i> </div>
            <div class="remember-forgot">
                <lable> <input type="checkbox">&nbsp;Remember me</lable> <a href="#">Forgot password? </a>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Don't have an account?<a href="..//Register/registerForm.php">&nbsp;Register</a></p>
            </div>
        </form>
    </div>
    <?php 
    include '../footer/footer.php';
    ?>
</body>

</html>