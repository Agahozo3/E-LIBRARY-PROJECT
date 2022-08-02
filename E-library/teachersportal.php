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
      $college=$_POST["college"];
      $password=$_POST["password"];

      
      $sql="INSERT INTO 
      teachers_portal(Teacher_Email,Teacher_password,date,gender,department,college,teacher_name)
      VALUES('$email','$password','$date','$gender','$department','$college','$name')";
      $result=mysqli_query($con,$sql);
      if($result)
      {
          echo "
          <script>
          if(alert('ACCOUNT IS CREATED WITH SUCCESS'))
          {
          
          }
          </script>";
       }
       else {
          echo mysqli_error($con);
       }
      }
     if($_POST['submit']=="login")
     {
      $name=$_POST["name"];
      $email=$_POST["email"];
      $password=$_POST["password"];
      $sql="SELECT * FROM teachers_portal WHERE teacher_name='$name', Teacher_email='$email' AND Teacher_password='$password'";
      $result=mysqli_query($con,$sql);
      $user=array();
      if(mysqli_fetch_array($result) != $user)
      {   
              
              $_SESSION["email"]=$_POST['name'];
              $_SESSION["email"]=$_POST['email'];
              $_SESSION["password"]=$_POST['password'];
              header("Location:books.php");
       }
      else{
      echo "
      <script>
      if(alert('wrong input'))
      {
      ".header("Refresh:0.1;url=teachersportal.php")."
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
    <link rel="stylesheet" href="teachersportal.css">
 </head>
 <body>
 <div class="form-container">
    <div class="overlay">

    </div>
    
  
    <div class="login">
        <div class="back">
            <a href="../library.html"><input type="submit"name="submit" class="send-btn"value="back" required></a>
        </div>
    
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn"onclick="login()">Login In</button>
                <button type="button" class="toggle-btn"onclick="register()">Registration</button>
            </div>
        <form  id="login" action="" class="form">
     
            <input type="text" name="name" class="input-field"placeholder=" name" required>
            <input type="text" name="email" class="input-field"placeholder=" email" required>
            <input type="password" name="password" class="input-field"placeholder="Enter password" required>
            <input type="checkbox" name="cpassword" class="check-box"><span>Remember Password</span>
            
            <button type="submit" name="login"class="submit-btn"onclick="showalert()">Login</button>
        </form>    

        <form id="register" action="" class="form" method="POST">
           <input type="text" name="name" class="input-field"placeholder="Name" required >
            <input type="email" name="email" class="input-field"placeholder="email" required>
            <input type="date" name="date" class="input-field"placeholder="DD/MM/YY" required>
            <select name="gender" id=""class="input-field" placeholder="Gender">Gender
                <option value="">Gender</option>
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="others">others</option>
            </select>
            <select name="department" id=""class="input-field" placeholder="colllege">department
                <option value="department">department you teach </option>
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
            <select name="college" id=""class="input-field" placeholder="field">college
                <option value="College"  >College you teach</option>
                <option value="CASS">CASS</option>
                <option value="CVM">CVM</option>
                <option value="CST">CST</option>
                <option value="CBE">CBE</option>
                <option value="CMHS">CMHS</option>
            </select>
            
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