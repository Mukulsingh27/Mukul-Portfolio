<?php
       define("HOSTNAME","localhost");
       define("USERNAME","root");
       define("PASSWORD","");
       define("DBNAME","mukul");

    //    define("HOSTNAME","localhost");
    //    define("USERNAME","icmidas_phpapp");
    //    define("PASSWORD","Mukul123");
    //    define("DBNAME","icmidas_phpapp");

       $con = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DBNAME) or die("cannot connect to database");
       
    //    if($con){
    //        echo "You are Connected";
    //    }
?>