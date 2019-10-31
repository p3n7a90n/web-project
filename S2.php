<?php
session_start();
$usn= $_SESSION['usn1'];

$link= mysqli_connect("localhost","web","test","web");;
		if(mysqli_connect_error()){
			die("couldn't connect to the database");
		}


   $rand1=rand(1,5);
   //echo $rand1;
  

   $rand2=rand(6,10);
 //echo $rand2;
   $rand3=rand(11,15);
 //echo $rand3;
   $rand4=rand(16,20);
 //echo $rand4;
   $que1="select * from `s2` where qno=".$rand1." and marks=2";
  

   $que2="select * from `s2` where qno=".$rand2." and marks=5";
   $que3="select * from `s2` where qno=".$rand3." and marks=6";
   $que4="select * from `s2` where qno=".$rand4." and marks=8";
   //$que5="select question from `s1` where qno=".$rand5." and marks=10";

   
     $result1=mysqli_query($link,$que1) or die(mysql_error());

   $row1 = mysqli_fetch_array($result1);
    
   //echo nl2br($row['question']."\n");
   //echo "<br>"

  $result2=mysqli_query($link,$que2) or die(mysql_error());

   $row2 = mysqli_fetch_array($result2);
    
   //echo $row['question'];
   $result3=mysqli_query($link,$que3) or die(mysql_error());

   $row3= mysqli_fetch_array($result3);

    $result4=mysqli_query($link,$que4) or die(mysql_error());

   $row4 = mysqli_fetch_array($result4);
    //$result5=mysqli_query($link,$que5) or die(mysql_error());
     //$row5 = mysqli_fetch_array($result5);


if(isset($_POST['submit'])) 
{

$answer1 = $_POST['answer1'];
//echo $answer1;
$answer2 = $_POST['answer2'];
//echo $answer2;
$answer3 = $_POST['answer3'];
//echo $answer3;
$answer4 = $_POST['answer4'];
//echo $answer4;
//print(getdate())
$timezone = date_default_timezone_get();
//echo $timezone;
date_default_timezone_set('Asia/Calcutta');
$date = date('m/d/Y h:i:s a', time());
//echo $date;
//echo $usn;
$flag=1;



//Insert Query of SQL
$query1 = "insert into `marks` (usn,date,subject,answer,qno,marks) values ('$usn','$date','S2','$answer1','$rand1',2)";
if(!mysqli_query($link,$query1))
{  $flag=0;
  echo "<p>Insertion Failed For 1st Answer <br/> Some Fields are Blank....!!</p>";
}


$query2 = "insert into `marks` (usn,date,subject,answer,qno,marks)  values ('$usn','$date','S2','$answer2','$rand2',5)";
if(!mysqli_query($link,$query2))
{ $flag=0;
 echo "<p>Insertion Failed For 2nd Answer <br/> Some Fields are Blank....!!</p>";
}
$query3 = "insert into `marks` (usn,date,subject,answer,qno,marks)  values ('$usn','$date','S2','$answer3','$rand3',6)";
if(!mysqli_query($link,$query3))
{  $flag=0;
  echo "<p>Insertion Failed For 3rd Annwer <br/> Some Fields are Blank....!!</p>";
}
$query4 = "insert into `marks` (usn,date,subject,answer,qno,marks)  values ('$usn','$date','S2','$answer4','$rand4',8)";
if(mysqli_query($link,$query4))
{
 echo "<br/><br/><span>Data Inserted successfully...!!</span>";
 
}

  

else
{  $flag=0;
  echo "<p>Insertion Failed For 4th Answer<br/> Try next time</p>";
}

if($flag==1)
  header("Location:index.php");

}



 

?>
<html>
<head>
  <title>Question Paper</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
 
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav" style="background-color: #cbcccc;">
      <h1 style="text-align: center; padding-bottom: 15px;">Test</h1>
        <p><b><h4>Portions :</h4></b><br>
        - Chapter 1<br>
        - Chapter 2<br>
        - Chapter 3<br>
    </p>
<br>
     
    </div>
    <form method="post">

    <div class="col-sm-9">
      <h2><large>Subject 1</large></h2>
      <hr>

      <div class="question" id="q">

                  <div class="question" id="q">

      <p>Question</p>

        <div class="form-group">
          <textfield class="form-control" rows="6" required>
           
          <?php echo $row1['question']; ?>
         
        </textfield>
        </div>
      


        <div class="form-group">
          <textarea class="form-control" name="answer1" rows="6" required></textarea>
        </div>




<hr>
    </div>

              <div class="question" id="q">

      <p>Question</p>

        <div class="form-group">
          <textfield class="form-control" rows="1" required>
                 <?php echo $row2['question']; ?>
            
          </textfield>
        </div>
      


        <div class="form-group">
          <textarea class="form-control" rows="6" name="answer2" required></textarea>
        </div>

      


<hr>
    </div>

              <div class="question" id="q">

      <p>Question</p>
      
        <div class="form-group">
          <textfield class="form-control" rows="1" required>
            
           <?php echo $row3['question']; ?>
          
         </textfield>
        </div>
     

      
        <div class="form-group">
          <textarea class="form-control" rows="6" name="answer3" required></textarea>
        </div>

      


<hr>
    </div>

              <div class="question" id="q">

      <p>Question</p>
      
        <div class="form-group">
          <textfield class="form-control" rows="1" required>

           <?php echo $row4['question']; ?>
      </textfield>
        </div>
     

      
        <div class="form-group">
          <textarea class="form-control" rows="6" name="answer4" required>

 </textarea>
        </div>

<hr>
<hr>

<div style="padding-left: 30em;">
        <input class="submit"  name="submit" type="submit" value="Submit">
      
</div>
    </div>
  </div>
    </div>
  </div>
</div>
</form>

<footer class="container-fluid">
  <p style="text-align: center;">Exam Portal</p>
</footer>


</body>


</html>


