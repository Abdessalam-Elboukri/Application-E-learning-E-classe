
<?php

use LDAP\Result;

        include("db.php");
        session_start();

        // initializing variables ; define variables and set to empty values
                            
        $email    = "";
        $password = "";
        $errors = array();

        // LOGIN USER
        if (isset($_POST['login_user'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
    
        if (empty($email)) {
            array_push($errors, "Email is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
    
        if (count($errors) == 0) {
            // $user_pass = md5($password);
            $query = "SELECT * FROM accounts WHERE user_email='$email' AND user_pass='$password'";
            $results = mysqli_query($conn, $query);
            if (mysqli_num_rows($results) == 1) {

                // $_SESSION['success'] = "You are now logged in";
             header('location: dashboard.php');

             $data_v=mysqli_fetch_array($results);
             $_SESSION['name'] = $data_v['name'] ;

            }else {
                array_push($errors, "Wrong email/password combination");
        }
    }
  }
?>  
<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-class</title>
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="./bootstrap5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class=" d-flex justify-content-center align-items-center back">
        <div class=" col-lg-4 col-sm-8 col-md-6 ">
            <div class="bg-light p-4 shadow" style=" border-radius: 20px;">
                <div class=" d-flex flex-column">
                    <div class="ms-4">
                        <h1 class="ps-2 border-start">E-class</h1>
                    </div>
                    <div class="text-center">
                        <h3 class="text-uppercase">Sign In</h3>
                        <p class="text-muted">Enter your credentials to access your account</p>
                    </div>
                    
                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" id="login-form">

                        <?php include 'error_login.php'; ?>

                        <div class=" d-flex flex-column text-muted ">
                            <label for="">E-mail</label>
                            <input type="email" name="email" id="email-login" value="<?php echo $email ?>" placeholder="Enter your email"
                                class="w-100 rounded-3 border p-2 bg-transparent form-control">
                        </div>
                        <div class=" d-flex flex-column text-muted mt-3 text">
                            <label for="">Password</label>
                            <input type="password" name="password" id="pass-login" value="<?php echo $password ?>" placeholder="Enter your password"
                                class="w-100 rounded-3 border p-2 bg-transparent form-control">
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <input type="checkbox">
                            <label for="" class="ms-3" style="font-size:13px">Remember me</label>
                        </div>
                        <div class="mt-3">
                            <input type="submit" value="Login" name="login_user" class="btn btn-info w-100 rounded-3 border-1 text-decoretion-none text-white text-uppercase" >
                        </div>
                        </form>
                        <div class="text-center mt-3">
                            <p class="text-muted h6">Forgot your password?<a href="#" class="text-info ms-1">Reset Password</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>