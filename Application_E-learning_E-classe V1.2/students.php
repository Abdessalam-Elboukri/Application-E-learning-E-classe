
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-class | Students</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <script src="bootstrap5/js/bootstrap.min.js"></script>
    <script src="bootstrap5/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="style.css">
    <!-- <script>
        function submit()
        {
            document.getElementById("val_form").click(); // Simulates button click
            document.val_form.submit(); // Submits the form without the button
        }
    </script> -->
</head>

<body >
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
                        <h2 class=" style = font-size: 1.5rem">Students List</h2>
                        <div style="font-size: 1rem;">
                            <i class="fa fa-sort text-primary" aria-hidden="true"></i>
                            <a href="ajout.php" class="btn btn-primary text-uppercase ds-6">add new student</a>
                        </div>
                    </div>
                    <hr class="m-auto" style="width: 100%;">
                </div>
                <div class="row mt-2 px-2 table-responsive" style="height: 75vh;">
                    <table class="table">
                        <thead >
                            <tr class=" text-muted">
                                <th scope="col"></th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Enroll number</th>
                                <th scope="col">Date of admission</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="flex-column">
                         <!-- ---------------------------- -->
                        <?php
                            include_once 'db.php';
                            $query = "SELECT * FROM  student " ;
                            $result = mysqli_query($conn, $query);
                        
                            if (mysqli_num_rows($result) > 0) {
                        
                            $i=0;
                            while($row = mysqli_fetch_assoc($result)) {                                                   
                        ?>    
                        <tr class="" >
                                <td class="align-middle">
                                    <img src="./images/students.jpg"  width="50" height="50">
                                </td>
                                <td class="align-middle "><?php echo  $row['name']; ?></td>
                                <td class="align-middle"><?php echo $row['email']; ?></td>
                                <td class="align-middle"><?php echo $row['phone']; ?></td>
                                <td class="align-middle"><?php echo $row['enroll_n']; ?></td>
                                <td class="align-middle"><?php echo $row['date_a']; ?></td>
                                <td class="text-primary align-middle \">
                                <div class="d-flex flex-nowrap gap-3\">
                                <a href="edit.php?enroll_n=<?php echo $row['enroll_n']; ?>"><i class="fa fa-pencil"></i></a>
                                <a href="delete.php?enroll_n=<?php echo $row['enroll_n']; ?>"><i class="fa fa-trash-o ms-3"></i></a>
                                </div>
                                </td>
                                </tr>
                        <?php
                            $i++;
                            }
                        }else{
                            echo "No result found" ;
                        }
                        ?>

                            <form method="post" action="students.php" name="val_form" id="val_form" >
                                <input type="text" name="ii" class="d-none" id="ii" value="<?php echo $i ?>">
                                <input type="submit" class="d-none">
                            </form>

                    </tbody>
                    </table>
                    </table>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
</body>

</html>