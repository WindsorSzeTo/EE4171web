<?php

if (isset($_GET['1'])) {
   
   productnav('1');

   }
   elseif (isset($_GET['2'])) {
    productnav('2');
   }
   elseif (isset($_GET['3'])) {
    productnav('3');
   }
   elseif (isset($_GET['4'])) {
    productnav('4');
   }
   elseif (isset($_GET['5'])) {
    productnav('5');
   }
    elseif (isset($_GET['6'])) {
    productnav('6');
   }
    elseif (isset($_GET['7'])) {
    productnav('7');
   }
   elseif (isset($_GET['8'])) {
    productnav('8');
   }
  


        
   

    function productnav($id){
        
        include "setupsession.php";
        session_start();

        // bedroom
        if($id=='1'){        
        $_SESSION['cart'][0]++;
        header("location:../bedroom.php");

       
        }
        elseif($id==2){
        $_SESSION['cart'][1]++;
        header("location:../bedroom.php");
        }

        // livingroom
        elseif($id==3){
        $_SESSION['cart'][2]++;
        header("location:../livingroom.php"); 
        }
        elseif($id==4){
        $_SESSION['cart'][3]++;
        header("location:../livingroom.php");
        }
        
        // outdoor
        elseif($id==5){
        $_SESSION['cart'][4]++;
        header("location:../outdoor.php");
        }
        elseif($id==6){
        $_SESSION['cart'][5]++;
        header("location:../livingroom.php");
        }

        // toilet
        elseif($id==7){
        $_SESSION['cart'][6]++;
        header("location:../toilet.php");
        }
        elseif($id==8){
        $_SESSION['cart'][7]++;
        header("location:../livingroom.php");
        }
    }
?>