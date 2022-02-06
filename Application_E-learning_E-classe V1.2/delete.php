<?php

  include("db.php");
  $enroll_n = $_GET["enroll_n"];
  $result = mysqli_query($conn, "DELETE FROM eclass WHERE enroll_n=$enroll_n");
  header("location:students.php");
?>