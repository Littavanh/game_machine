   <?php
    $tokenkey = $_SESSION['gm_tokenKey'];
    ?>

   <ul class="navbar-nav">
     <li class="nav-item">
       <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
     </li>
     <li class="nav-item d-none d-sm-inline-block">
       <a href="index.php" class="nav-link mn_home">Home</a>
     </li>
     <li class="nav-item d-none d-sm-inline-block">
       <a href="#" class="nav-link mn_contact">Contact</a>
     </li>
     <li class="nav-item d-none d-sm-inline-block">
       <a href="logout.php" class="nav-link mn_logout">Logout</a>
     </li>
     <li class="nav-item d-none d-sm-inline-block">
       <!-- <p href="#"><?= $tokenkey ?></p> -->
     </li>
     
   </ul>
   