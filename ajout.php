<?php
	if(isset($_POST['submit'])){
		$data = file_get_contents('users.json');
		$data_array = json_decode($data);
		//data in the POST
		$input = array(
			'Nom'    =>     $_POST['Nom'],  
            'Email'  =>     $_POST['Email'],  
            'Phone'  =>     $_POST['Phone'] ,
            'Enroll' =>     $_POST['Enroll'] ,
            'Date_A' =>     $_POST['Date_A'],
		);
		//append the POST data
		$data_array[] = $input;
		//return to json and put contents to our file
		$data_array = json_encode($data_array, JSON_PRETTY_PRINT);
		file_put_contents('users.json', $data_array);
		$_SESSION['message'] = 'User added Succufully';
	}
	else{
		$_SESSION['message'] = 'An error has been Occured';
	}
	// header('location:students.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajoute | e-class</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <script src="bootstrap5/js/bootstrap.min.js"></script>
    <script src="bootstrap5/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="style.css">
    <style>
        input{
            height: 40px;
            border: gray 1px solid;
            outline: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <main class="vh-100 d-flex justify-content-center align-items-center back" >
        <div class="col-lg-6 col-sm-8 col-md-7 ">
            <div class=" shadow bg-light p-3 " style="border-radius:17px">
                <div class="d-flex flex-column ">
                    <div class="text-center position-relative ">
                        <h1 >Ajoute un utilisateur</h1>
                        <a href="students.php" class="position-absolute fs-3 fw-500 text-decoration-none tetx-dark" style="left: 10px; top:10px"><</a>
                    </div>
                    <form method="POST" action="ajout.php"  class="gap-5">
                        <div class="d-flex flex-column">
                            <label for="" class="fs-5">Name</label>
                            <input type="text" name="Nom" id="nom" class="input-form" >
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-5">E-mail</label>
                            <input type="email" name="Email" id="email" >
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-5">Phone Number</label>
                            <input type="number" name="Phone" id="phone">
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-5">Enroll Number</label>
                            <input type="number" name="Enroll" id="enroll">
                        </div>
                        <div class="d-flex flex-column">
                            <label for="" class="fs-5">Date of admission</label>
                            <input type="date" name="Date_A" id="Date_A">
                        </div>
                        <div class="mt-2"> 
                            <input id="submit" type="submit" name="submit" value="Ajoute" class="px-4 pt-2 pb-2 bg-primary border-0 text-white rounded-2"   > 
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>

