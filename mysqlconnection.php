<?php
$link= mysqli_connect("localhost","sanjay","sanjay","dbmsproject");
		if(mysqli_connect_error()){
			die("couldn't connect to the database");
		}



   $que1="select * from `s110m` where qno=".rand(1,5);

   $que2="select question from `s12m` where qno=".rand(1,5);
   $que3="select question from `s15m` where qno=".rand(1,5);
   $que4="select question from `s16m` where qno=".rand(1,5);
   $que5="select question from `s18m` where qno=".rand(1,5);

   
     $result1=mysqli_query($link,$que1) or die(mysql_error());

   $row = mysqli_fetch_array($result1);
    
   echo nl2br($row['question']."\n");
   //echo "<br>"

  $result2=mysqli_query($link,$que2) or die(mysql_error());

   $row = mysqli_fetch_array($result2);
    
   echo $row['question'];
   
   
 
   //$result2=mysqli_query($link,$que2) or die("error executing queries");
 // $result3=mysqli_query($link,$que3) or die("error executing queries");
 // $result4=mysqli_query($link,$que4) or die("error executing queries");
  //$result5=mysqli_query($link,$que5) or die("error executing queries");

?>
