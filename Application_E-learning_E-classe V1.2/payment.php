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
                <div class="row mt-5 flex-row">
                    <div class="title col-lg-4 col-md-6 col-sm-12">
                        <h2 style="font-size:19px; ">Payements Details</h2>
                    </div>
                    <div class="d-flex gap-2 align-items-center justify-content-end col-lg-8 col-md-6 col-sm-12">
                        <div style="font-size: 1.2rem;">
                            <i class="fa fa-sort text-primary" aria-hidden="true"></i>
                        </div>
                    </div>
                    <hr class="m-auto" style="width: 97%;">
                </div>
                <div class="row mt-2 px-5 table-responsive">
                    <table class="table">
                        <thead>
                            <tr class=" text-muted">
                                <th scope="col">Name</th>
                                <th scope="col">Payment Shedule</th>
                                <th scope="col">Bill Number</th>
                                <th scope="col">Amounts Paid</th>
                                <th scope="col">Balance Amount</th>
                                <th scope="col">Date</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="flex-column">

        
                    <?php
                        include_once 'db.php';
                        $query = "SELECT * FROM  payment " ;
                        $result = mysqli_query($conn, $query);
                    
                        if (mysqli_num_rows($result) > 0) {
                    
                        $i=0;
                        while($row = mysqli_fetch_assoc($result)) {                                                   
                    ?> 

                                <tr class="mt-1">
                                        <td class="align-middle "><?php echo  $row['name'] ?></td>
                                        <td class="align-middle"><?php echo $row['payment_shedule'] ?></td>
                                        <td class="align-middle"><?php echo $row['bill_a'] ?></td>
                                        <td class="align-middle"><?php echo 'DHS ' . $row['amount_p']  ?></td>
                                        <td class="align-middle"><?php echo 'DHS ' . $row['balace_a'] ?></td>
                                        <td class="align-middle"><?php echo $row['date'] ?></td>
                                        <td class="text-primary align-middle">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </td>
                                       </tr> 
                                       
                            <?php
                                $i++ ;
                                }
                            }                                   
                                else{
                                        echo 'no result found';
                                    }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
</body>

</html>