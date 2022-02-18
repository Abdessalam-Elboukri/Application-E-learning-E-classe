<?php
// including the database connection file
include_once("db.php");
 
if(isset($_POST['Update']))
{       $id = $_POST['id'];
        $image = $_FILES['image']['name'];
        $name = $_POST['Nom'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];
        $enroll_n = $_POST['Enroll'];
        $date_a = $_POST['Date_A'];    
        
        $target = "images/profiles/".basename($image);
        
    
        $result = mysqli_query($conn, "UPDATE students SET image='$image', name='$name', email='$email', phone='$phone' , enroll_n='$enroll_n' , date_a='$date_a'  WHERE id=$id ");

        header("Location: students.php"); 

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id ");
 
while($row = mysqli_fetch_array($result))
{
    $image = $row['image'];
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $enroll_n = $row['enroll_n'];
    $date_a = $row['date_a'];
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit | e-class</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <script src="bootstrap5/js/bootstrap.min.js"></script>
    <script src="bootstrap5/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <style>
        input{
            height: 35px;
            border: gray 1px solid;
            outline: none;
            border: none;
            border-bottom: 1.8px solid gray;
            transition: all 0.4s ease-in-out;
        }
        input:focus{
            transform: translateY(-4px);
            border-color: orange;
        }
    </style>
</head>
<body>
    <main class="vh-100 d-flex justify-content-center align-items-center back" >
        <div class="col-lg-6 col-sm-8 col-md-7 col-12 ">
            <div class=" shadow bg-white p-3 " style="border-radius:17px">
                <div class="d-flex flex-column ">
                    <div class="text-center position-relative p-2 text-white " style="background: #96C7C1;">
                        <h3> changement des infos de : <?php echo $name ?> </h3>
                        <a href="students.php" class="position-absolute fs-5 fw-500 text-decoration-none text-white" style="right:5px; top:0px"><i class="bi bi-x-square-fill"></i></a>
                    </div>
                    <form method="POST" action="edit.php" enctype="multipart/form-data" class="d-flex flex-column gap-3 mt-3">
                        
                        <input type="file" name="image" id="image" value="">
                        

                        <div class="d-flex flex-column">
                            <label for="nom" class="fs-6 text-muted">Name</label>
                            <input type="text" name="Nom" id="nom"  value="<?php echo $name ?>">
                        </div>
                        <div class="d-flex flex-column">
                            <label for="email" class="fs-6 text-muted">E-mail</label>
                            <input type="email" name="Email" id="email" value="<?php echo $email  ?>" >
                        </div>
                        <div class="d-flex flex-column">
                            <label for="phone" class="fs-6 text-muted">Phone Number</label>
                            <input type="number" name="Phone" id="phone" value="<?php echo $phone ?>">
                        </div>
                        <div class="d-flex flex-column">
                            <label for="enroll_n" class="fs-6 text-muted">Enroll Number</label>
                            <input type="number" name="Enroll" id="enroll_n" value="<?php echo $enroll_n ?>">
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-6 text-muted">Date of admission</label>
                            <input type="date" name="Date_A" id="Date_A" value="<?php echo $date_a ?>">
                        </div>

                        <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                        
                        <div class="mt-2"> 
                            <input id="submit" type="submit" name="Update" value="Update" class="px-4 pt-2 pb-2 border-0 text-white rounded-2" style="background: #96C7C1;"  > 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>