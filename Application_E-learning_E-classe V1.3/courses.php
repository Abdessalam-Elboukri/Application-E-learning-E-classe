<?php 
include("check_destroy_session.php");

    include "db.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses | E-Class</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <script src="bootstrap5/js/bootstrap.min.js"></script>
    <script src="bootstrap5/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="container-fluid">
        <div class="row flex-nowrap">

            <!-- _____________________________ -->
            <?php include 'sidebar.php'; ?>

            <!-- _______________________________ -->

            <div class="col-10">
                <?php include 'navbar.php'; ?>

                <!-- ============================= -->
                <div class="row mt-5 flex-row">
                    <div class="col-10  d-flex flex-nowrap justify-content-between w-100">
                        <h2 class=" style = font-size: 1.2rem">Courses List</h2>
                        <div style="font-size: 1rem;">
                            <i class="fa fa-sort text-primary" aria-hidden="true"></i>
                            <a href="add_course.php" class="btn btn-primary text-uppercase ds-6">add new course</a>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 px-2 table-responsive" style="height: 73vh;">
                    <table class="table">
                        <thead>
                            <tr class=" text-muted">
                                <th scope="col"></th>
                                <th scope="col" style="font-size:14px;">Information</th>
                                <th scope="col" style="font-size:14px;">Lectures</th>
                                <th scope="col" style="font-size:14px;">N° Enroller</th>
                                <th scope="col" style="font-size:14px;">Course time</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $query = "SELECT * FROM  courses ";
                            $result = mysqli_query($conn, $query);

                            if (mysqli_num_rows($result) > 0) {

                                $i = 0;
                                while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td class="align-middle">
                                    <?php
                                        echo "<img src='images/courses/".$row['img']."' width=\"100px\" height=\"130px\" class=\"\">"
                                    ?>
                                </td>
                                <td class="align-middle" width="420px">
                                    <h5><?php echo $row['course_title'] ?></h5>
                                    <div style="height:80px; overflow:scroll;">
                                        <p style="font-size: 15px;"><?php echo $row['course_info'] ?></p>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <b style="color: purple;"> <?php echo '<i class="bi bi-file-play me-1 fs-5"></i>' . $row['course_lectures'] . '</b> lectures' ?> 
                                </td>
                                <td class="align-middle">
                                    <b style="color: purple;"><?php  echo '<i class="bi bi-person-fill me-1 fs-5"></i>' . $row['course_students'] . '</b> Students' ?>
                                </td>
                                <td class="align-middle" >
                                    <b style="color: purple;"><?php echo '<i class="bi bi-clock-fill me-1"></i>' . $row['course_time'].  '</b> hours'  ?>
                                </td>
                                <td class="text-primary align-middle">
                                    <i class="bi bi-eye-fill"></i>
                                </td>
                            </tr>
                            <?php
                                }
                            }
                            ?>
                            

</body>
</html>