
   <aside class="d-flex flex-column justify-content-between col-2  bg-sidebar vh-100 "  >
        <div class="mt-1 w-100">
            <h2 class="h2 border-start ps-2 ecls ">E-class</h2>
        </div>
        <div class="text-center d-none d-lg-inline-block ">
            <img src="./images/pexels-photo-2379004 1.png" class="rounded-circle" style="max-width: 100px;">
            <h5 class="mt-2"> <?php echo $_SESSION['name']; ?> </h5>
            <p>Admin</p>
        </div>
        <nav class="mt-2 ">
            <ul class="nav d-flex flex-column gap-1 text-start align-items-start ms-1 ms-sm-4" style="width: 70%;">
                <li class="w-100 py-2">
                    <a href="dashboard.php" class=" nav-link text-dark  d-none d-sm-inline">
                    <i class="bi bi-house-door-fill"></i>
                        Home</a>
                    <a href="dashboard.php" class="d-sm-none fs-3 p-2 text-dark"><i class="bi bi-house-door-fill"></i></a>
                </li>
                <li class="w-100 py-2">
                    <a href="courses.php" class=" nav-link  text-dark d-none d-sm-inline">
                    <i class="bi bi-bookmark-fill"></i>
                        Courses</a>
                    <a href="courses.php" class="d-sm-none fs-3 p-2 text-dark"><i class="bi bi-bookmark-fill"></i></a>
                </li>
                <li class="w-100 py-2">
                    <a href="students.php" class="  nav-link  text-dark d-none d-sm-inline">
                    <i class="bi bi-mortarboard-fill"></i>
                        Students</a>
                    <a href="students.php" class="d-sm-none fs-3 p-2 text-dark"><i class="bi bi-mortarboard-fill"></i></i></a>
                </li>
                <li class="w-100 py-2">
                    <a href="payment.php" class=" nav-link text-dark d-none d-sm-inline">
                    <i class="bi bi-currency-dollar"></i>
                        Payment</a>
                    <a href="payment.php" class="d-sm-none fs-3 p-2 text-dark"><i class="bi bi-currency-dollar"></i></a>
                </li>
                <li class="w-100 py-2">
                    <a href="#" class=" text-start nav-link text-dark d-none  d-sm-inline">
                    <i class="bi bi-file-earmark-person-fill"></i>
                        Report</a>
                    <a href="#" class="d-sm-none fs-3 p-2 text-dark"><i class="bi bi-file-earmark-person-fill"></i></a>
                </li>
                <li class="w-100 py-2">
                    <a href="#" class=" nav-link text-dark d-none  d-sm-inline">
                    
                    <i class="bi bi-sliders"></i>
                        Setting</a>
                    <a href="#" class="d-sm-none fs-3 p-2 text-dark"><i class="bi bi-sliders"></i></a></a>
                </li>
            </ul>
        </nav>
        <form action="">
            <?php $vide=""; ?>
            <div class="mt-2 ps-sm-4 align-items-center  d-flex">
                <input type="submit" name="logout" value="Logout" id="logout1" class=" nav-link text-dark d-none d-sm-inline bg-transparent border-0">
                <label for="logout1"> <i class="bi bi-box-arrow-right d-none d-sm-inline cursor-pointer"></i></label>
                <input type="submit" name="logout" id="logout2" class="d-sm-none fs-3 text-dark bg-transparent border-0  " value="<?php $vide ?>" >
                <label for="logout2"><i class="bi bi-box-arrow-right d-sm-none"></i></label>
            </div>
        </form>
    </aside>