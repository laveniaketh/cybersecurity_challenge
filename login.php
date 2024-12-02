<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>inkNote | Get Started</title>
    <link rel="icon" href="images/logo-light.png" type="image/x-icon" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <!-- CSS Style -->
    <link rel="stylesheet" href="login-reg.css" />


</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <!-- sign in -->
                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" class="sign-in-form" method="post">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <img src="images/login-reg-img/user.svg" class="icons" alt="user" />
                        <input type="text" class="input" name="username" placeholder="username" onfocus="clearMessage()" />
                    </div>
                    <div class="input-field">
                        <!-- <i class="fas fa-lock"></i> -->
                        <img src="images/login-reg-img/pw.svg" class="icons" alt="password" />
                        <input type="password" class="input" name="password" placeholder="password" onfocus="clearMessage()" />
                    </div>
                    <button type="submit" name="signin" class="btn btn-outline-dark btn-lg rounded-5 signin-button">Sign in</button>

                    <?php
                    require_once 'db_functions.php';

                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signin'])) {
                        $username = $_POST["username"];
                        $password = $_POST["password"];

                        if (empty($username) || empty($password)) {
                            echo "<p style='text-align: center;' id='msg'>Please enter your username and password!</p>";
                        } else {
                            $user = checkUserLogin($username);
                            if ($user) {
                                if (password_verify($password, $user["password"])) {
                                    session_start();
                                    $_SESSION['user_id'] = $user["user_id"];
                                    header("Location: home.php");
                                    exit();
                                } else {
                                    echo "<p style='text-align: center;' id='msg'>Incorrect password!</p>";
                                }
                            } else {
                                echo "<p style='text-align: center;' id='msg'>Username not found!</p>";
                            }
                        }
                    }
                    ?>


                </form>

                <!-- sign up -->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="sign-up-form" method="post" enctype="multipart/form-data">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <img src="images/login-reg-img/user.svg" class="icons" alt="user" />
                        <input type="text" name="username" placeholder="username" />
                    </div>
                    <div class="input-field">
                        <img src="images/login-reg-img/mail.svg" class="icons" alt="mail" />
                        <input type="email" name="email" placeholder="email" />
                    </div>
                    <div class="input-field">
                        <img src="images/login-reg-img/pw.svg" class="icons" alt="password" />
                        <input type="password" name="password" placeholder="password" />
                    </div>
                    <p>Add profile picture</p>
<div class="input-field">
    <img src="images/login-reg-img/user.svg" class="icons" alt="profile" />
    <input type="file" name="profile_pic" style="margin: auto;" />
</div>
<button type="submit" name="signup" class="btn btn-outline-dark btn-lg rounded-5 signup-button">Sign up</button>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signup'])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $profile_pic = "";

    if (empty($username) || empty($email) || empty($password)) {
        echo "<p style='text-align: center;' id='msg'>Please fill in all fields!</p>";
    } else {
        if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] == 0) {
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["profile_pic"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            $check = getimagesize($_FILES["profile_pic"]["tmp_name"]);
            if ($check !== false) {
                if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file)) {
                    $profile_pic = $target_file;
                } else {
                    echo "<p style='text-align: center;' id='msg'>Error uploading profile picture.</p>";
                }
            } else {
                echo "<p style='text-align: center;' id='msg'>File is not an image.</p>";
            }
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        if (registerUser($username, $email, $hashed_password, $profile_pic)) {
            session_start();
            $_SESSION['user_id'] = $conn->insert_id;
            header("Location: home.php");
            exit();
        } else {
            echo "<p style='text-align: center;' id='msg'>Error: Unable to register user.</p>";
        }
    }
}
?>
</form>


            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Login to your account to continue with inkNote.
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign in
                    </button>
                </div>
                <img src="images/login-reg-img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Create an account to get started with inkNote. Be a part of the community.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign up
                    </button>
                </div>
                <img src="images/login-reg-img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="login-reg.js"></script>
</body>

</html>