<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>login</title>
</head>

<body>
<div class="background">
    <div class="container">
        <div class="box form-box">
            <?php
                include("./config.php");
                if(isset($_POST['submit'])){
                $users_Email = mysqli_real_escape_string($conn,$_POST['Email']);
                $users_Password = mysqli_real_escape_string($conn,$_POST['Password']);

                $result = mysqli_query($conn,"SELECT * FROM sign_up WHERE users_Email = '$users_Email' AND users_Password = '$users_Password'");
                $row = mysqli_fetch_assoc($result);
                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['users_Email'];
                    $_SESSION['username'] = $row['users_Name'];
        
                } else {
                    echo "<p>Invalid email or password. Please try again.</p></br>";
                    echo "<a href=''><button class='btn-back'>back</button></a>";
                }
                if(isset($_SESSION['valid'])){
                    header("location: home.php");
                }
            }else{
    

    ?>

            <header id="login"> LOGIN</header>
            <img src="./Rectangle 31.png" id="logo">
            <form action="" method="post">
                <div class="field input">
                    <label for="Email">Email</label>
                    <input type="email" name="Email" id="Email" required>

                </div>
                <div class="field input">
                    <label for="Password">Password</label>
                    <input type="password" name="Password" id="Password" required>

                </div>
                <div class="field">

                    <input type="submit" name="submit" class="btn" value="Login" required>

                </div>
                <div class="link sign-up">

                    <a href="./sign_up.html">Sign Up</a>

                </div>
                <div class="link forgot-password">

                    <a href="./reset_password.html">Forgot Password</a>

                </div>

            </form>

        </div>

        <?php }?>

    </div>

</div>

</body>

</html>