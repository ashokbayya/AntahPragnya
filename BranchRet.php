<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 $con=mysqli_connect('localhost','root','','ap') or die(mysqli_error());
 $req=$_POST['id'];
 $query=mysqli_query($con,"SELECT * FROM event WHERE branchId='".$req."'");
 $full="";
 $num_eve= mysqli_num_rows($query);
 if($num_eve!=0)
 {
     while($row= mysqli_fetch_array($query, MYSQL_NUM))
     {
         $j=1;
         while($j<4)
         {
            $full=$full.$row[$j];
            $full=$full."%";
            $j=$j+1;
         }
         $full=$full."\n";
     }
     echo $full;
 }
 //$num_rows= mysqli_num_rows($query);
 //echo $num_rows;
 /*if($num_rows!=0)
 {
     while($num_rows!=0)
     {
         $row= mysqli_fetch_assoc($query);
         $branchid=$row['branchId'];
         $eName=$row['eName'];
         $time=$row['date'];
         echo $branchid;
         echo $eName;
         echo $time;
         $num_rows=$num_rows-1;
         
     }
 }
*/ 