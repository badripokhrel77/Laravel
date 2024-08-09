<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="../navbar/nav.css">
    <link rel="stylesheet" href="../footer//footer.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<?php
    require '../navbar/nav.php';
    ?>
<body>
    <div class="Reg-form">
        <div class="header">
            <div class="head_c">
                <img src="../images/HRRS logo HD.webp" alt="HRRS">
            </div>
            <div class="head_d">
                <h1>Registration Form</h1>
            </div>
        </div>

        <form action="register.php" method="post">

            <div class="name">
                <div class="first">
                    <p>First Name:</p>
                    <div class="input-box"> <input type="text" name="firstname" placeholder="First Name" required> <i
                            class='bx bxs-user icon'></i>
                    </div>
                </div>
                <div class="first">
                    <p>Last Name:</p>
                    <div class="input-box">
                        <input type="text" name="lastname" placeholder="Last Name" required> <i
                            class='bx bxs-user icon'></i>
                    </div>
                </div>
            </div>
            <div class="name">
                <div class="first">
                    <p>Address:</p>
                    <div class="input-box">
                        <input type="text" name="Address" placeholder="Address" required> <i
                            class='bx bxs-map icon'></i>
                    </div>
                </div>
                <div class="first">
                    <p>phone Number:</p>
                    <div class="input-box">
                        <input type="text" name="phonenumber" placeholder="Phone Number" required> <i
                            class='bx bxs-phone icon'></i>
                    </div>
                </div>
            </div>
            <p>Email:</p>
            <div class="input-box">
                </class><input type="text" name="Email" placeholder="Email" required> <i
                    class='bx bxs-envelope icon'></i>
            </div>
            <p>password:</p>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required> <i class='bx bxs-lock-alt icon'></i>
            </div>
            <div class="btn">
                <button type="submit">Register</button>
            </div>
            <div class="login-link">
                <p>Already have an account?<a href="../Login/loginForm.php">&nbsp;Login</a></p>
            </div>
        </form>
    </div>
    <?php 
    include '../footer/footer.php';
    ?>
</body>
</html>