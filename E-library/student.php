<?php
session_start();
require("database.php");
if(isset($_POST['submit']))
{
  if($_POST['submit']=="REGISTER")
  {
	$name=$_POST["name"];
    $email=$_POST["email"];
    $date=$_POST["date"];
    $gender=$_POST["gender"];
    $department=$_POST["department"];
	$college=$_POST["colllege"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    $student_regno=$_POST['student_regno'];
	$sql="INSERT INTO 
    student_portal(student_password,department,college,date,gender,student_name,email,student_regno)
    VALUES('$password','$department','$college','$date','$gender','$name','$email',$student_regno)";
	$result=mysqli_query($con,$sql);
    if($result)
	{
        echo "
        <script>
        if(alert('ACCOUNT IS CREATED WITH SUCCESS'))
        {
        ".header("Refresh:0.1;url=student.php")."
        }
        </script>";
     }
     else {
        echo mysqli_error($con);
     }
    }
   if($_POST['submit']=="login")
   {
	$regnumber=$_POST["regnumber"];
	$password=$_POST["password"];
	$sql="SELECT * FROM student_portal WHERE student_regno='$regnumber' AND student_password='$password'";
	$result=mysqli_query($con,$sql);
	$user=array();
    if(mysqli_fetch_array($result) != $user)
	{
	        $_SESSION["regnumber"]=$_POST['regnumber'];
			$_SESSION["password"]=$_POST['password'];
			header("Location:books.php");
     }
    else{
	echo "
	<script>
	if(alert('wrong input'))
	{
	".header("Refresh:0.1;url=student.php")."
    }
	</script>";
  }
}
}
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <title>login </title>
    <link rel="stylesheet" href="student.css">
 </head>
 <body>
 <div class="form-container">
    <div class="overlay">
    <div class="login">
        <div class="back">
            <a href=""><input type="submit"name="submit" class="send-btn"value="back" required></a>
        </div>
    
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn"onclick="login()">Login In</button>
                <button type="button" class="toggle-btn"onclick="register()">Registration</button>
            </div>
        <form  id="login" action="" class="form"method="POST">
     
            
            <input type="number" name="regnumber" class="input-field"placeholder="regnumber" required>
            <input type="password" name="password" class="input-field"placeholder="Enter password" required>
            <input type="checkbox" name="cpassword" class="check-box"><span>Remember Password</span>
            
            <button type="submit" name="submit"class="submit-btn"onclick="showalert()" value="login">Login</button>
        </form>    

        <form id="register" action="" class="form" method="POST">
           <input type="text" name="name" class="input-field"placeholder="Name" required >
            <input type="text" name="email" class="input-field"placeholder="email" required>
            <input type="date" name="date" class="input-field"placeholder="DD/MM/YY" required>
            <select name="gender" id=""class="input-field" placeholder="Gender">Gender
                <option value="">Gender</option>
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="others">others</option>
            </select>
            <select name="department" id=""class="input-field" placeholder="department">department
                <option value="department">department</option>
                <option value="information system">information system</option>
                <option value="information technology ">information system</option>
                <option value="medecine">Medecine</option>
                <option value="midwife">Midwife</option>
                <option value="nursing">nursing</option>
                <option value="bussiness and information tecnology">bussiness and information technology</option>
                <option value="statitics ">statitics</option>
                <option value="international economics ">International economics</option>
                <option value="computer engineering">computer engineering</option>
            </select>
            <select name="colllege" id=""class="input-field" placeholder="field">college
                <option value="College">College</option>
                <option value="CASS">CASS</option>
                <option value="CVM">CVM</option>
                <option value="CST">CST</option>
                <option value="CBE">CBE</option>
                <option value="CMHS">CMHS</option>
            </select>
            <input type="number" class="input-field"placeholder="Enter Reg.Number" required="required" name="student_regno">
            <input type="password" class="input-field"placeholder="Enter password" required="required" name="password">
            <input type="password" class="input-field"placeholder="confirm password" required name="cpassword">  
            <input type="checkbox" class="check-box"><span>I accept to th terms and condition</span>
            <button type="submit"class="submit-btn"name="submit" value="REGISTER">REGISTER</button>
        </form>
        </div>
    </div>
 </div>
    <script>
        var x=document.getElementById("login");
        var y=document.getElementById("register");
        var z=document.getElementById("btn");
        function register(){
            x.style.left="-40rem";
            y.style.left="5rem";
            z.style.left="7rem"
        }
        function login(){
            x.style.left="5rem";
            y.style.left="40rem";
            z.style.left="0"
        }
    </script>
 </body>
 </html>