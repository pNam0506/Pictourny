<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
<div class="background">
    <div class="container">
        <div class="box form-box">
            
            <?php
            include("./config.php");
            if(isset($_POST['submit'])){
                $users_Name = $_POST['UserName'];
                $users_Email = $_POST['Email'];
                $users_Password = $_POST['Password'];
                $confirm_Password = $_POST['ConfirmPassword']; // เพิ่มการรับค่ารหัสผ่านยืนยัน

                // เพิ่มการตรวจสอบว่ารหัสผ่านและการยืนยันรหัสผ่านตรงกันหรือไม่
                if($users_Password !== $confirm_Password) {
                    echo "<div class='message'>
                            <p>Passwords do not match, please try again</p>
                        </div> <br>";
                } else {
                    $verify_query = mysqli_query($conn,"SELECT users_Email FROM sign_up WHERE users_Email = '$users_Email'");

                    if(mysqli_num_rows($verify_query) != 0 ){
                        echo "<div class='message'>
                                <p>This email is already registered, please try another one</p>
                            </div> <br>";
                    } else {
                        mysqli_query($conn,"INSERT INTO sign_up(users_Name,users_Email,users_Password) VALUES('$users_Name','$users_Email','$users_Password')") or die("Error Occurred");

                        echo "<div class='message'>
                                <p>Registration successful</p>
                            </div> <br>";

                        echo "<a href='home.php'><button class='btn'>Login Now</button></a>";
                    }
                }
            } else {
            ?>
            <header id="sign-up"> SIGN UP</header>
            <img src="./Rectangle 31.png" id="logo">
            <form action="" method="post">
                <div class="field input">
                    <label for="UserName">Name</label>
                    <input type="text" name="UserName" id="UserName" required>
                </div>
                <div class="field input">
                    <label for="Email">Email</label>
                    <input type="email" name="Email" id="Email" required>
                </div>
                <div class="field input">
                    <label for="Password">Password</label>
                    <input type="password" name="Password" id="Password" required>
                </div>
                <div class="field input">
                    <label for="ConfirmPassword">Confirm Password</label>
                    <input type="password" name="ConfirmPassword" id="Enter_Password" required>
                </div>
                <div class="field">
                    <input type="submit" name="submit" class="btn-create" value="Create Account">
                </div>
                <div class="link sign-up">
                    <a href="./login.html">Login</a>
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>
