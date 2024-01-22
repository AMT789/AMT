
<!DOCTYPE html>
<html lang="en">
<head>
  <title>FHMKYC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      background-color:#634715 ;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>
    <?php
    $number_one=rand(0,8);
    $number_two=rand(0,8);
    $number_three=rand(0,8);
    $number_four=rand(0,8);
    $number_five=rand(0,8);
    $number_six=rand(0,8);
    ?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a style="position:absolute;top:60px;right:93px;" href="/"> 
      <img alt="" src="number/<?php echo$number_one; ?>.png"width="20px" height="20px" > 
      </a>
    <a style="position:absolute;top:60px;right:82px;" href="/"> 
      <img alt="" src="number/<?php echo$number_two; ?>.png"width="20px" height="20px" > 
      </a>
      <a style="position:absolute;top:60px;right:71px;" href="/"> 
      <img alt="" src="number/<?php echo$number_three; ?>.png"width="20px" height="20px" > 
      </a>
      <a style="position:absolute;top:60px;right:60px;" href="/"> 
      <img alt="" src="number/<?php echo$number_four; ?>.png"width="20px" height="20px" > 
      </a> 
      <a style="position:absolute;top:60px;right:49px;" href="/"> 
      <img alt="" src="number/<?php echo$number_five; ?>.png"width="20px" height="20px" > 
      </a>
      <a style="position:absolute;top:60px;right:38px;" href="/"> 
      <img alt="" src="number/<?php echo$number_six; ?>.png"width="20px" height="20px" > 
      </a>  
      
    </div><br>




<img alt="" src="number/Blank.jpg"width="360px" height="auto" >

</body>
</html>
