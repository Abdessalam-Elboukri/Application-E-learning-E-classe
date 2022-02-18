<?php
  include('db.php');

    if (isset($_POST['search_item'])) {
        $value = $_POST['search'];
    
    $query = "SELECT * FROM students WHERE name='$value' ";
    $result = mysqli_query($conn, $query);
}
?>
        <nav class="d-flex justify-content-between align-items-center mt-3 navbar-expand">
                <div class="">
                    <a href="#"><i class="bi bi-arrow-left-short text-muted align-content-center fs-4"></i></a>
                </div> 
                <div class="d-flex justify-content-between align-items-center gap-3 search-ico">
                    <form method="POST" action="navbar.php">
                        <input type="search" class="form-control me-2" name="search" placeholder="Search...">
                    </form>
                    <div>
                        <a href="#"><i class="bi bi-bell text-muted fs-4"></i></a>
                    </div>
                </div>
        </nav>
