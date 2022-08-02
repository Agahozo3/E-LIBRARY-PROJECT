<?php
session_start();
if(!isset($_SESSION['regnumber']) && !isset($_SESSION['password'])){
  header("Location:student.php");
}
?>
<!doctype html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale="1.0>
    <link rel="stylesheet" type="text/css" href="./books.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
 <title>book store </title>
</head>
<body>
     <header>
      <nav>
          <label>E-library</label>
          <ul>
            <li><a href="./library.html">home</a></li>
            <li><a href="ct.html">contact</a></li>
            <li><a href="books.html">books</a></li>
      </nav>
     </header>
     <div class="two">
          <input type="text" placeholder="search.." name="search" size="40">
          <button type="submit"><i class="fa fa-search"></i></button>
  </div>

   <label class="title"> online book store</label>
   <div class="sidenav">
    <p><b>books:</b></p>
    <a href="y.html">math</a><br>
    <a href="compbook.html">computer </a><br>
    <a href="physics.html">physics</a><br>
    <a href="citizenship.html">citizenship</a><br>
    <a href="biology.html">biology</a><br>
  </div>
</body>
</html>



























































































