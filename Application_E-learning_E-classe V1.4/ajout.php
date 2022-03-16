<?php 
 
    include 'db.php';
    
    $msg="";
    $error="";
    if( isset($_POST['submit'])) {
        // Get image name
        $image = $_FILES['image']['name'];
        // --------------
        $name = $_POST['Nom'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];
        $enroll_n = $_POST['Enroll'];
        $date_a = $_POST['Date_A'];

        // image file directory
  	    $target = "images/profiles/".basename($image);

        if($image && $name && $email && $phone && $enroll_n && $date_a){
    
        $sql = " INSERT INTO students (`image`, `name`, `email`, `phone`, `enroll_n`, `date_a`) VALUES ('$image', '$name', '$email', '$phone', '$enroll_n', '$date_a')"; 
        mysqli_query($conn,$sql);
		header('location: students.php'); 

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }
    } else{
        $error = "You should fill all fields";
        header('location:ajout.php');
    }
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <style>
        input{
            height: 32px;
            outline: none;
            border: none;
            border-bottom: 1.8px solid gray;
            transition: all 0.4s ease-in-out;
        }
        input:focus {
            transform: translateY(-4px);
            border-color: #96C7C1;
        }
    </style>
</head>
<body>
    <main class="vh-100 d-flex justify-content-center align-items-center back" >
        <div class="col-lg-6 col-sm-8 col-md-7 ">
            <div class=" shadow bg-white p-3 " style="border-radius:17px">
                <div class="d-flex flex-column ">
                    <div class="text-center position-relative p-2 text-white " style="background: #96C7C1;">
                        <h3 >Ajouter un utilisateur</h3>
                        <a href="students.php" class="position-absolute fs-5 text-decoration-none text-white" style="right:5px; top:0px"><i class="bi bi-x-square-fill"></i></a>
                    </div>
                    <form method="POST" action="ajout.php" enctype="multipart/form-data"  class="d-flex flex-column gap-2 mt-3">
                        <div class="d-flex flex-column">
                            <input type="file" name="image" id="image" class="input-form"  >
                            
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-6">Name</label>
                            <input type="text" name="Nom" id="nom" class="input -form" >
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-6">E-mail</label>
                            <input type="email" name="Email" id="email" required>
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-6">Phone Number</label>
                            <input type="tel" name="Phone" id="phone" required>
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-6">Enroll Number</label>
                            <input type="number" name="Enroll" id="enroll" required>
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-6">Date of admission</label>
                            <input type="date" name="Date_A" id="Date_A" required>
                        </div>
                        <div class="mt-2"> 
                            <input id="submit" type="submit" name="submit" value="Ajoute" class="px-4 pt-2 pb-2 border-0 text-white rounded-2" style="background:#79B4B7;"  > <p class="d-inline"><?php echo $error ?></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>

