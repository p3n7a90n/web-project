<?php 
   $link= mysqli_connect("localhost","web","test","web");
    if(mysqli_connect_error()){
      die("couldn't connect to the database");
    }

 //for question 1
  $que1="select * from `answers` where usn='1PE16IS001' and marks=2";
   $result1=mysqli_query($link,$que1) or die(mysql_error());
    $row1 = mysqli_fetch_array($result1);
    #echo $row1['answer']
    $qno1=$row1['qno'];
    //echo $qno1;
  
    $que11="select * from `s1` where qno='$qno1'";
     $result11=mysqli_query($link,$que11) or die(mysql_error());
    $row11 = mysqli_fetch_array($result11);
    //echo $row11['question'];
    
    //for question 2
    $que2="select * from `answers` where usn='1PE16IS001' and marks=5";
   $result2=mysqli_query($link,$que2) or die(mysql_error());
    $row2 = mysqli_fetch_array($result2);
    $qno2=$row2['qno'];
  
    $que22="select * from `s1` where qno='$qno2'";
     $result22=mysqli_query($link,$que22) or die(mysql_error());
    $row22 = mysqli_fetch_array($result22);
    
    
 //for question 3
   $que3="select * from `answers` where usn='1PE16IS001' and marks=6";
   $result3=mysqli_query($link,$que3) or die(mysql_error());
    $row3 = mysqli_fetch_array($result3);
    $qno3=$row3['qno'];
  
    $que33="select * from `s1` where qno='$qno3'";
     $result33=mysqli_query($link,$que33) or die(mysql_error());
    $row33 = mysqli_fetch_array($result33);
    

 //for question 4
   $que4="select * from `answers` where usn='1PE16IS001' and marks=8";
   $result4=mysqli_query($link,$que4) or die(mysql_error());
    $row4 = mysqli_fetch_array($result4);
    $qno4=$row4['qno'];
  
    $que44="select * from `s1` where qno='$qno4'";
     $result44=mysqli_query($link,$que44) or die(mysql_error());
    $row44 = mysqli_fetch_array($result44);


if(isset($_POST['submit'])) 
  { 
       $marks1= $_POST['marks'];
       #echo $marks1;

    $query = "insert into `evaluation` (usn,marks,subject) values ('1PE16IS001','$marks1','S1')";
    #echo $query;
     if(!mysqli_query($link,$query))
    {  $flag=0;
  echo "<p>Insertion Failed For 1st Answer <br/> Some Fields are Blank....!!</p>";
    }
}
  

?>
     
   

   

<html>
<head>
  <title>Evaluate</title>

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

    <div class="col-sm-9">
      <h2><large>Student 1</large></h2>
      <hr>

      <form method="post">

      <div class="question" id="q">


      <p>Question</p>

        <div class="form-group">
          <textfield class="form-control" rows="1" required>
             <?php echo $row11['question'];
              echo str_repeat("&nbsp;", 10);
              echo  "2 Marks"; ?>
             
        </textfield>
        </div>



        <div class="form-group">
          <textarea class="form-control" rows="6" required>
            <?php echo $row1['answers']; ?>
         </textarea>
        </div>


       

<hr>
    </div>

              <div class="question" id="q">

      <p>Question</p>

        <div class="form-group">
          <textfield class="form-control" rows="1" required>

         <?php echo $row22['question']; 
            echo str_repeat("&nbsp;", 10);
              echo  "5 Marks";?>
        </textfield>
        </div>



        <div class="form-group">
          <textarea class="form-control" rows="6" required>
          <?php echo $row2['answers']; ?>
     </textarea>


       

<hr>
    </div>

              <div class="question" id="q">

      <p>Question</p>

        <div class="form-group">
          <textfield class="form-control" rows="1" required>
           <?php echo $row33['question']; 
             echo str_repeat("&nbsp;", 10);
              echo  "6 Marks";?>
         </textfield>
        </div>



        <div class="form-group">
          <textarea class="form-control" rows="6" required>
           <?php echo $row3['answers']; ?>
         </textarea>
        </div>




<hr>
    </div>

              <div class="question" id="q">

      <p>Question</p>

        <div class="form-group">
          <textfield class="form-control" rows="1" required>

         <?php echo $row44['question']; 
            echo str_repeat("&nbsp;", 10);
              echo  "8 Marks";?>
        </textfield>
        </div>



        <div class="form-group">
          <textarea class="form-control" rows="6" required>
         <?php echo $row4['answers']; ?>
      </textarea>
        </div>


       

<hr>
    </div>

  <div class="question" id="q">

      <p>Marks Obtained</p>

        
        <div class="form-group">
           <textarea class="form-control" rows="1" required name=marks>    </textarea>
        </div>

         
        <input class="submit"  name="submit" type="submit" value="Submit">
    

       

<hr>
    </div>



</div>
  </div>
</form>
  </div>
</div>

<footer class="container-fluid">
  <p style="text-align: center;">Exam Portal</p>
</footer>

</body>
</html>
