<?php include 'db.php';

$students_sql = "SELECT COUNT(id) FROM students";
$payments_sql = "SELECT SUM(amount_p) as total
                FROM payments ";
$course_sql = "SELECT COUNT(id) FROM courses";

// students 
$students = mysqli_query($conn, $students_sql);
$std_num = mysqli_fetch_column($students);

// payments
$res = mysqli_query($conn, $payments_sql);
$pay = mysqli_fetch_column($res);



// courses
$courses = mysqli_query($conn, $course_sql);
$courses_num = mysqli_fetch_column($courses);


 session_start();
 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-class | Dashboard</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <script src="bootstrap5/js/bootstrap.min.js"></script>
    <script src="bootstrap5/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <section class="container-fluid">
        <div class="row">
            
            <!-- ============================= -->
            <?php include 'sidebar.php'; ?>
            <!-- ============================= -->

            <div class="col-10">
            <!-- ============================= -->
            <?php include 'navbar.php'; ?>
            <!-- ============================= -->
                <div class="row mt-3 gap-2 gap-sm-0 overflow-scroll" style="height:88vh;">
                    <div class="col-sm-10 col-md-5 col-lg-3">
                        <div class="card" style="font-size: 1.5rem; background-color: #F0F9FF
                        ; color: #74C1ED;">
                            <div class="card-body">
                            <i class="bi bi-mortarboard-fill"></i>
                                <p class="text-muted ">Students</p>
                                <p class="fa-xs d-flex justify-content-end text-dark fw-bold fs-5">                                  
                                <?php
                                       echo $std_num;
                                       
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-5 col-lg-3 ">
                        <div class="card" style="font-size: 1.5rem; background-color: #FEF6FB
                        ; color: #EE95C5;">
                            <div class="card-body">
                            <i class="bi bi-bookmark-check-fill "></i>
                                <p class="text-muted">Course</p>
                                <p class="d-flex justify-content-end text-dark fw-bold fs-5">
                                    <?php
                                        echo $courses_num ;
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-5 col-lg-3 ">
                        <div class="card" style="font-size: 1.5rem; background-color: #FEFBEC
                        ; color: #00C1FE;">
                            <div class="card-body">
                            <i class="bi bi-currency-dollar "></i>
                                <p class="text-muted">Payments</p>
                                <p class="fa-xs d-flex justify-content-end text-dark fw-bold fs-5">
                                <?php
                                       echo 'DHS ' .$pay;
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-5 col-lg-3 ">
                        <div class="card bg-primary" style="font-size: 1.5rem;
                        ; color: #fff; background: linear-gradient(-120deg , rgb(250, 255, 193), rgb(0, 193, 254));;">
                            <div class="card-body">
                            <i class="bi bi-people-fill"></i>
                                <p class="text-muted">Users</p>
                                <p class="fa-xs d-flex justify-content-end text-dark fw-bold fs-5">
                                    3
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
    </section>
</body>

</html>