<?php

   session_start();
  

   echo  $_SESSION['Patientname']." "." "." "." ";
   echo "Patient id :".$_SESSION['Patientid']." "." ";
   echo "Patient no:".$_SESSION['c']." "." "."<br>";


   echo "doctor name:".$_SESSION['doctor'];
   echo $_SESSION['department'];
  


 //  echo  $_SESSION['Patientname'];

 //  echo $_SESSION['Patientid'];

 //  echo $_SESSION['Patientage'];
  
 //  echo $_SESSION['payment_method'];
  
 //  echo $_SESSION['relative_relation'];
 
 // echo  $_SESSION['Patienphone'];
  
 //  echo $_SESSION['department'];
   
 //  echo $_SESSION['doctor'];
    
 //  echo	$_SESSION['counter'];
?>