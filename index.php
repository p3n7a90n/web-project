<?php
   session_start();
   // echo "sanjay";
   $usn=$_SESSION['usn1'];
   //echo $usn;
 ?>
<html>
<head>
  <title>Exam Portal Dashboard</title>

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
      <h1 style="text-align: center; padding-bottom: 15px;">Exam Portal</h1>
<br>
      
    </div>

    <div class="col-sm-9">
      <h2><large>Course And Subjects</large></h2>
      <hr>
      <h2>SUBJECT 1</h2>


      <p>
        <b>Portions : </b><br><br>
        - Chapter 1<br>
        - Chapter 2<br>
        - Chapter 3<br>
      </p>
      <br>
      <div class="button3">
      <a href="S1.php" target="_blank">Start Exam</a>
      </div>
      
      <h4><small></small></h4>
      <hr>
      <h2>SUBJECT 2</h2>

      <p>
        <b>Portions : </b><br><br>
        - Chapter 1<br>
        - Chapter 2<br>
        - Chapter 3<br>
      </p>
      <br>
      <div class="button3">
      <a href="S2.php" target="_blank">Start Exam</a>
      </div>

      <hr>   
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p style="text-align: center;">Exam Portal</p>
</footer>

</body>


</html>

