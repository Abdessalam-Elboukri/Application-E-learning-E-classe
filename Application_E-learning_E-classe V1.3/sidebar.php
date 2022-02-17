
   <aside class="d-flex flex-column justify-content-between col-2 p-2 bg-sidebar vh-100"  >
        <div class="mt-1 w-100">
            <h2 class="h2 border-start ps-2 ecls ">E-class</h2>
        </div>
        <div class="text-center d-none d-lg-inline-block ">
            <img src="./images/pexels-photo-2379004 1.png" class="rounded-circle" style="max-width: 100px;">
            <h5 class="mt-2"> <?php echo $_SESSION['name']; ?> </h5>
            <p>Admin</p>
        </div>
        <nav class="mt-2 ">
            <ul class="nav  d-flex flex-column gap-3 text-start align-items-center">
                <li>
                    <a href="dashboard.php" class="btn nav-link text-dark p-2 d-none d-sm-inline">
                    <i class="bi bi-house-door-fill"></i>
                        Home</a>
                    <a href="dashboard.php" class="d-sm-none fs-3 p-2 text-dark"><i class="bi bi-house-door-fill"></i></a>
                </li>
                <li>
                    <a href="courses.php" class="btn nav-link p-2 text-dark d-none d-sm-inline">
                    <i class="bi bi-bookmark-fill"></i>
                        Courses</a>
                    <a href="courses.php" class="d-sm-none fs-3 p-2 text-dark"><i class="bi bi-bookmark-fill"></i></a>
                </li>
                <li>
                    <a href="students.php" class="btn p-2 nav-link  text-dark d-none d-sm-inline">
                    <i class="bi bi-mortarboard-fill"></i>
                        Students</a>
                    <a href="students.php" class="d-sm-none fs-3 p-2 text-dark"><i class="bi bi-mortarboard-fill"></i></i></a>
                </li>
                <li>
                    <a href="payment.php" class="btn nav-link p-2 text-dark d-none d-sm-inline">
                    <i class="bi bi-currency-dollar"></i>
                        Payment</a>
                    <a href="payment.php" class="d-sm-none fs-3 p-2 text-dark"><i class="bi bi-currency-dollar"></i></a>
                </li>
                <li>
                    <a href="#" class="btn text-start nav-link text-dark d-none p-2 d-sm-inline">
                    <i class="bi bi-file-earmark-person-fill"></i>
                        Report</a>
                    <a href="#" class="d-sm-none fs-3 p-2 text-dark"><i class="bi bi-file-earmark-person-fill"></i></a>
                </li>
                <li>
                    <a href="#" class="btn nav-link text-dark d-none p-2 d-sm-inline">
                    
                    <i class="bi bi-sliders"></i>
                        Setting</a>
                    <a href="#" class="d-sm-none fs-3 p-2 text-dark"><i class="bi bi-sliders"></i></a></a>
                </li>
            </ul>
        </nav>
        <div class="mt-3  justify-content-center  d-flex">
            <a href="index.php" class=" nav-link text-dark p-2 d-none d-sm-inline">Logout
            <i class="bi bi-box-arrow-right"></i>
            </a>
            <a href="index.php" class="d-sm-none fs-3 p-2 text-dark"><i class="bi bi-box-arrow-right"></i></a>
        </div>
    </aside>
