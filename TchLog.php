

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
    width: 60%;

}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>

<h2 style="font-size: 70px;text-align: center;">Teachers Login Form</h2>

<form method="post">


  <div class="container"  style="margin-left: 15em;">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" style="border-radius: 200px;" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" style="border-radius: 200px;" required>
        
    <input type="submit" name="login" value="Log in"/>
    <div class="button3">
    <a href="StdLog.php">Login As Student</a>
  </div>

  </div>

</form>

</body>
</html>
<?php

session_start();

if(isset($_POST['login'])){

     
          $error="";
	if(!$_POST['uname'])$error.="</br > Please enter an USN";
	else if (strlen($_POST['uname'])!=10)$error.=" </br >please enter a valid length USN";;

		if(!$_POST['psw'])$error.=" </br >Please enter a password";
	   
	if($error) echo "There were error(s) while login ".$error;

	else{

		$link= mysqli_connect("localhost","web","test","web");
		if(mysqli_connect_error()){
			die("couldn't connect to the database");
		}
		$query="select * from `teacher` where usn= '".mysqli_real_escape_string($link,$_POST['uname'])."' and password= '".$_POST['psw']."'";
               //echo $query;
		$result=mysqli_query($link,$query);
		$results=mysqli_num_rows($result);
		//echo $result;
		//echo $results;
		if(!$results) echo "Database not exist for the given USN"; 

		else{
                            //$_SESSION['usn1'] = $_POST['uname'];
                            //echo $_SESSION['usn1'];



			header("Location:teacherdash.php");
               }		      
	}

}

?>
