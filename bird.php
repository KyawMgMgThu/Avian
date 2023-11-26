<?php

require_once "./PHP/main.php";

$data = $birds->connect();

$birds = $birds->bird();


?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/earlybirds.svg" type="image/x-icon">
    <title>Avian</title>


   <!-- fontaware cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

   <!-- css file -->
   <link rel="stylesheet" href="style.css">
</head>
<body>
       <!-- header start -->
   <header class="header">

    <section class="flex">

       <div class="logo">
          <i class="fa-solid fa-feather"></i>
      
      <div class="avian">
         <span>A</span>
         <span>v</span>
         <span>i</span>
         <span>a</span>
         <span>n</span>
     </div>
 </div>

       <div class="icons">
          <a href="index.php"><div id="home-btn" class="fa-solid fa-house"></div></a>
         <a href="bird.php"> <div id="bird-btn" class="fa-solid fa-dove"></div></a>
          <div id="toggle-btn" class="fas fa-sun"></div>
       </div>
    </section>

 </header>
 <!-- header end  -->

 <!--Birds start-->
 <section class="video-container">
    <h1 class="heading">BIRDS</h1>
   
   <div class="row">
   <?php foreach ($birds as $bird) : ?>
    <div class="box-container">
       <a href="look.php?id=<?php echo $bird['Id']; ?>" class="box">
          <img src="<?php echo $bird['ImagePath'] ?>" alt="">
          <h3><?php echo $bird['BirdEnglishName'] ?></h3>
          <p><?php echo $bird['BirdMyanmarName'] ?></p>
       </a>


    </div>
    <?php endforeach; ?>
   </div>
    
 </section>
 <!--Birds end-->


 <!-- footer start -->

 <footer class="footer">

    &copy; 2023 by <span>Kyaw Mg Mg Thu</span>

 </footer>




 <!-- footer end -->

 <!-- js file  -->
 <script>
let body = document.body;
let toggleBtn = document.getElementById('toggle-btn'); 
let darkMode = localStorage.getItem('dark-mode');

const enableDarkMode = () => {
   toggleBtn.classList.replace('fa-sun', 'fa-moon');
   body.classList.add('dark');
   localStorage.setItem('dark-mode', 'enabled');
}

const disableDarkMode = function () {
   toggleBtn.classList.replace('fa-moon', 'fa-sun');
   body.classList.remove('dark');
   localStorage.setItem('dark-mode', 'disabled');
}

if (darkMode === 'enabled') {
   enableDarkMode();
}

toggleBtn.onclick = function (e) {
   darkMode = localStorage.getItem('dark-mode');
   if (darkMode === 'enabled') {
      disableDarkMode();
   } else {
      enableDarkMode();
   }
}

function showBoxes() {
   let boxContainer = document.querySelector('.box-container');
   let boxes = document.querySelectorAll('.box');


   boxContainer.classList.add('show');


   boxes.forEach((box, index) => {
       setTimeout(() => {
           box.classList.add('show');
       }, index * 100); 
   });
}
if (window.location.href.includes('bird.html')) {
   showBoxes();
}

 </script>
</body>
</html>