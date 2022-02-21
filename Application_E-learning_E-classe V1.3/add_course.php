<?php 
 
    require_once 'db.php';
    
    
    if( isset($_POST['submit'])) {
        // Get image name
        $image = $_FILES['image']['name'];
        // --------------
        $title = $_POST['title'];
        $course_info = $_POST['info'];
        $lecture = $_POST['lectures'];
        $enrollers = $_POST['enrollers'];
        $time = $_POST['c_time'];

        // image file directory
  	    $target = "images/courses/".basename($image);

        // if( $name && $email && $phone && $enroll_n && $date_a){
    
        $sql = " INSERT INTO courses (`img`, `course_title`, `course_info`, `course_lectures`, `course_students`, `course_time`) VALUES ('$image', '$title', '$course_info', '$lecture', '$enrollers', '$time')"; 
        mysqli_query($conn,$sql);

		header('location: courses.php'); 

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
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
            height: 35px;
            outline: none;
            border: none;
            border-bottom: 1.8px solid gray;
            transition: all 0.4s ease-in-out;
        }
        input:focus {
            transform: translateY(-4px);
            border-color: #79B4B7;
        }

    </style>
</head>
<body>
    <main class="vh-100 d-flex justify-content-center align-items-center back" >
        <div class="col-lg-6 col-sm-8 col-md-7 ">
            <div class=" shadow bg-white p-3 " style="border-radius:17px">
                <div class="d-flex flex-column ">
                    <div class="text-center position-relative p-2 text-white" style="background:#79B4B7;">
                        <h3 >Ajouter un Course</h3>
                        <a href="courses.php" class="position-absolute fs-5 text-decoration-none text-white" style="right:10px; top:0px"><i class="bi bi-x-square-fill"></i></a>
                    </div>
                    <form method="POST" action="add_course.php" enctype="multipart/form-data"  class="d-flex flex-column gap-2 mt-2">
                    
                        <div class="d-flex flex-column">
                            <input type="file" name="image" id="image" class="input-form" >
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-6">Title</label>
                            <input type="text" name="title" id="title" >
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-6">Description</label>
                            <textarea name="info" id="info" cols="30" rows="3" style="resize: none; outline:none"></textarea>
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-6">Lectures</label>
                            <input type="number" name="lectures" id="lectures">
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-6">Number enrollers</label>
                            <input type="number" name="enrollers" id="enrollers">
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-6">Course Time</label>
                            <input type="text" name="c_time" id="c_time">
                        </div>
                        <div class="mt-2"> 
                            <input id="submit" type="submit" name="submit" value="Ajoute" class="px-4 pt-2 pb-2 border-0 text-white rounded-2" style="background:#79B4B7;"    > 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>

