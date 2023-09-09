
<?php include'header.php' ?>
<body>
  <div class="container-scroller">
   <?php include'navbar.php' ?> 
   
     
    
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
       <?php include'sidebar.php' ?> 
      <!-- partial -->
     <?php
    if(isset($_GET['page'])){

      $page = $_GET['page'];
      switch ($page){
        case'home':
        include "page/home.php";
        break;
        case'api-key':
        include "page/api-key.php";
        break;
        case'user':
        include "page/user.php";
        break;
        case'data-sekolah':
        include "page/data-sekolah.php";
        break;
        case'data-code':
        include "page/data-code.php";
        break;
        case'data-code-tahun':
        include "page/data-code-tahun.php";
        break;
        
        
        
      }
    }else {
      include "page/home.php";
    }

    ?>
   <?php include'footer.php' ?>

