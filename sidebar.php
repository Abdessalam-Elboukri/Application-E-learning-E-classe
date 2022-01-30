<?php 
   echo '
   <aside class="d-flex flex-column col-2 p-2 bg-sidebar" >
        <div class="mt-2 w-100">
            <h2 class="h2 border-start ps-2 ecls ">E-class</h2>
        </div>
        <div class="text-center d-none d-lg-inline-block ">
            <img src="./images/pexels-photo-2379004 1.png" class="rounded-circle" style="max-width: 100PX;">
            <h5 class="mt-2">Abdo</h5>
            <p>Admin</p>
        </div>
        <nav class="mt-5 ">
            <ul class="nav d-flex flex-column gap-4  align-items-lg-start align-items-center">
                <li>
                    <a href="dashboard.php" class="nav-link col-9 text-dark p-2 d-none d-sm-inline">
                        <i class="fa fa-home" aria-hidden="true" ></i>
                        Home</a>
                    <a href="index.php" class="d-sm-none fs-3 p-2 text-dark"><i class="fa fa-home "></i></a>
                </li>
                <li>
                    <a href="#" class="btn text-start nav-link p-2 text-dark d-none d-sm-inline">
                        <i class="fa fa-bookmark" aria-hidden="true"></i>
                        Courses</a>
                    <a href="index.php" class="d-sm-none fs-3 p-2 text-dark"><i class="fa fa-bookmark " aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="students.php" class="btn text-start p-2 nav-link  text-dark d-none d-sm-inline">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        Students</a>
                    <a href="index.php" class="d-sm-none fs-3 p-2 text-dark"><i class="fa fa-graduation-cap " aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="payment.php" class="btn text-start nav-link p-2 text-dark d-none d-sm-inline">
                        <i class="fa fa-usd" aria-hidden="true"></i>
                        Payment</a>
                    <a href="index.php" class="d-sm-none fs-3 p-2 text-dark"><i class="fa fa-usd " aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#" class="btn text-start nav-link text-dark d-none p-2 d-sm-inline">
                        <i class="fa fa-file-text-o" aria-hidden="true"></i>
                        Report</a>
                    <a href="index.php" class="d-sm-none fs-3 p-2 text-dark"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#" class="btn text-start nav-link text-dark d-none p-2 d-sm-inline">
                        <i class="fa fa-sliders" aria-hidden="true"></i>
                        Setting</a>
                    <a href="index.php" class="d-sm-none fs-3 p-2 text-dark"><i class="fa fa-sliders" aria-hidden="true"></i></a></a>
                </li>
            </ul>
        </nav>
        <div class="mt-5  justify-content-center justify-content-sm-start d-flex">
            <a href="index.php" class="btn text-start nav-link text-dark p-2 d-none d-sm-inline">Logout
                <i class="fa fa-sign-out " aria-hidden="true"></i>
            </a>
            <a href="index.php" class="d-sm-none fs-3 p-2 text-dark"><i class="fa fa-sign-out " aria-hidden="true"></i></a>
        </div>
    </aside>';
?>