<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-class</title>
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap.css">
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
                    <div>
                        <?php 
                            echo $error ;
                        ?>
                    </div>
                    <form action="index.php" methode="POST" id="login-form">
    
     <?php
        // include('db.php');
        // session_start();
        // $user_check=$_SESSION['email'];

        // $ses_sql=mysqli_query($conn,"select email_user from accounts where email_user='$user_check' ");
        // $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
        // $login_session=$row['username'];
        // if(!isset($login_session))
        // {
        // header("Location: login.php");
        // }
    ?> 
    <?php
    // define variables and set to empty values
    $email = $password  = "";

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
    <?php
        include("db.php");
    ?>
                        
                        <div class=" d-flex flex-column text-muted ">
                            <label for="" class="col-form-label">E-mail</label>
                            <input type="email" name="email" id="email-login" placeholder="Enter your email"
                                class="w-100 rounded-3 border p-2 bg-transparent form-control">
                        </div>
                        <div class=" d-flex flex-column text-muted mt-3 text">
                            <label for="">Password</label>
                            <input type="password" name="pass" id="pass-login" placeholder="Enter your password"
                                class="w-100 rounded-3 border p-2 bg-transparent form-control">
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <input type="checkbox">
                            <label for="" class="ms-3" style="font-size:13px">Remember me</label>
                        </div>
                        <div class="mt-3">
                            <a href="dashboard.php" class="btn btn-info w-100 rounded-3 border-1 text-decoretion-none text-white text-uppercase" >Sign in</a>
                        </div>
                        </form>
                        <div class="text-center mt-3">
                            <p class="text-muted fs-6">Forgot your password?<a href="#" class="text-info">Reset Password</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>