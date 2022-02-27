<?php
   $bdd = mysqli_connect("localhost", "root", "", "qcm");
   if(!$bdd){
       echo "Database connected" . mysqli_connect_error();
   }
?>