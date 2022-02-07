<?php
// including the database connection file
include_once("db.php");
 
if(isset($_POST['Update']))
{    
        $name = $_POST['Nom'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];
        $enroll_n = $_POST['Enroll'];
        $date_a = $_POST['Date_A'];    
    
        $result = mysqli_query($conn, "UPDATE student SET name='$name',email='$email',phone='$phone' , enroll_n='$enroll_n' , date_a='$date_a'  WHERE enroll_n=$enroll_n");

        header("Location: students.php");
}
?>
<?php
//error_reporting(0);
//getting id from url
$enroll_n = $_GET['enroll_n'];
 
//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM student WHERE enroll_n=$enroll_n");
 
while($row = mysqli_fetch_array($result))
{
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
                    <div class="text-center position-relative bg-primary p-2 text-white ">
                        <h3> changement des infos de : <?php echo $name ?> </h3>
                        <a href="students.php" class="position-absolute fs-5 fw-500 text-decoration-none tetx-dark" style="left:10px; top:-5px">x</a>
                    </div>
                    <form method="POST" action="edit.php"  class="d-flex flex-column gap-3 mt-3">
                        <div class="d-flex flex-column">
                            <label for="" class="fs-6 text-muted">Name</label>
                            <input type="text" name="Nom" id="nom"  value="<?php echo $name ?>">
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-6 text-muted">E-mail</label>
                            <input type="email" name="Email" id="email" value="<?php echo $email ?>" >
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-6 text-muted">Phone Number</label>
                            <input type="number" name="Phone" id="phone" value="<?php echo $phone ?>">
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-6 text-muted">Enroll Number</label>
                            <input type="number" name="Enroll" id="enroll_n" value="<?php echo $enroll_n ?>">
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-6 text-muted">Date of admission</label>
                            <input type="date" name="Date_A" id="Date_A" value="<?php echo $date_a ?>">
                        </div>
                        <div class="mt-2"> 
                            <input id="submit" type="submit" name="Update" value="Update" class="px-4 pt-2 pb-2 bg-primary border-0 text-white rounded-2"   > 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
