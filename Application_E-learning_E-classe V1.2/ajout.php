<?php 
 
    require_once 'db.php';
    
    
    if( isset($_POST['submit'])) {
        $name = $_POST['Nom'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];
        $enroll_n = $_POST['Enroll'];
        $date_a = $_POST['Date_A'];
    
        $sql = " INSERT INTO student (`name`, `email`, `phone`, `enroll_n`, `date_a`) VALUES ('$name', '$email', '$phone', '$enroll_n', '$date_a')"; 
        mysqli_query($conn,$sql);
		header('location: students.php'); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter | e-class</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <script src="bootstrap5/js/bootstrap.min.js"></script>
    <script src="bootstrap5/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="style.css">
    <style>
        input{
            height: 35px;
            border: gray 1px solid;
            outline: none;
            border: none;
            border-bottom: 1px solid gray;
            transition: all 0.4s ease-in-out;
        }
        input:focus {
            transform: translateY(4px);
            border-color: orange;
        }
    </style>
</head>
<body>
    <main class="vh-100 d-flex justify-content-center align-items-center back" >
        <div class="col-lg-6 col-sm-8 col-md-7 ">
            <div class=" shadow bg-white p-3 " style="border-radius:17px">
                <div class="d-flex flex-column ">
                    <div class="text-center position-relative bg-warning p-2 text-white ">
                        <h3 >Ajouter un utilisateur</h3>
                        <a href="students.php" class="position-absolute fs-5 fw-500 text-decoration-none tetx-dark" style="left:10px; top:-5px">x</a>
                    </div>
                    <form method="POST" action="ajout.php"  class="d-flex flex-column gap-2 mt-3">
                        <div class="d-flex flex-column">
                            <label for="" class="fs-6">Name</label>
                            <input type="text" name="Nom" id="nom" class="inpu-form" >
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-6">E-mail</label>
                            <input type="email" name="Email" id="email" >
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-6">Phone Number</label>
                            <input type="number" name="Phone" id="phone">
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-6">Enroll Number</label>
                            <input type="number" name="Enroll" id="enroll">
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-6">Date of admission</label>
                            <input type="date" name="Date_A" id="Date_A">
                        </div>
                        <div class="mt-2"> 
                            <input id="submit" type="submit" name="submit" value="Ajoute" class="px-4 pt-2 pb-2 bg-primary border-0 text-white rounded-2"   > 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>

