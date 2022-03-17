
<?php

session_start();

    include("db.php");

    // initializing variables ; define variables and set to empty values
    $name = "";      
    $email    ="";
    $password ="";
    $comfirm_pass="";
    $errors = array();
    // LOGIN USER
    if (isset($_POST['signup_user'])) {
    $name = mysqli_real_escape_string($conn, $_POST['full-name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password =mysqli_real_escape_string($conn,$_POST['password']);
    $comfirm_pass = mysqli_real_escape_string($conn,$_POST['comf-password']);
// -------------
    
// ------------- 
    if(empty($name) && empty($email) && empty($password) && empty($comfirm_pass)){
        array_push($errors, "You should fill all the fields");
    }
    else if (empty($name)) {
        array_push($errors, "name is required");
    }
    else if (empty($email)) {
        array_push($errors, "Email is required");
    }
    else if (empty($password)) {
        array_push($errors, "Password is required");
    }
    else if (empty($comfirm_pass)) {
        array_push($errors, "Password comfirmation is required");
    }
    else if($password !== $comfirm_pass){
        array_push($errors, "passwords are not match");
    }

    if (count($errors) == 0) {

        $sql = "SELECT * FROM accounts WHERE user_email='$email' ";
        $rs = mysqli_query($conn, $sql);
        $check = mysqli_num_rows($rs);
        if($check == 1){
            array_push($errors, "This account already exist");
        }
        else{
        $query = " INSERT INTO accounts (`name`, `user_email`, `user_pass`) VALUES ( '$name', '$email', '$password')"; 
        $results = mysqli_query($conn, $query);
        // if (mysqli_num_rows($results) == 1) {

        // $data_v=mysqli_fetch_array($results);
        $_SESSION['name'] = $data_v['name'] ;
        $_SESSION['email'] = $email ;
        $_SESSION['password'] = $password;

        header('location: index.php');

        }

    }   
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
        <div class="bg-light shadow" style=" border-radius: 20px; padding:12px 26px">
            <div class=" d-flex flex-column">
                <div class="ms-4">
                    <h1 class="ps-2 border-start h2">E-class</h1>
                </div>
                <div class="text-center">
                    <h3 class="text-uppercase">Sign Up</h3>
                </div>
                
                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" id="signup-form">

                <?php include 'error_login.php'; ?>

                <div class="input-control d-flex flex-column text-muted ">
                        <label for="">Full Name</label>
                        <input type="text" name="full-name" id="name-signup" value="" placeholder="Enter your Name"
                            class="w-100 rounded-3 border p-2 bg-transparent form-control">
                            <div class="error"></div>
                    </div>

                    <div class="input-control d-flex flex-column text-muted ">
                        <label for="">E-mail</label>
                        <input type="email" name="email" id="email-signup" value="" placeholder="Enter your email"
                            class="w-100 rounded-3 border p-2 bg-transparent form-control">
                            <div class="error"></div>
                    </div>
                    <div class="input-control d-flex flex-column text-muted mt-3 text">
                        <label for="">Password</label>
                        <input type="password" name="password" id="pass-signup" value="" placeholder="Enter your password"
                            class="w-100 rounded-3 border p-2 bg-transparent form-control">
                            <div class="error"></div>
                    </div>
                    <div class="input-control d-flex flex-column text-muted mt-3 text">
                        <label for="">Comfirm Password</label>
                        <input type="password" name="comf-password" id="comfirmpass-signup" value="" placeholder="Comfirm your password"
                            class="w-100 rounded-3 border p-2 bg-transparent form-control">
                            <div class="error"></div>
                    </div>
                    <div class="mt-3">
                        <input type="submit" value="Sign Up" name="signup_user" class="btn btn-info w-100 rounded-3 border-1 text-decoretion-none text-white text-uppercase" >
                    </div>
                    </form>
                    <div class="text-center mt-3">
                        <p class="text-muted h6">Already have an account<a href="index.php" class="text-info ms-1">Sign In</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="js/signup_val.js"></script>
</body>

</html>