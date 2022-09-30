
   <nav class="navbar fixed-top navbar-expand-lg ">
      <div class="container">
        <a class="navbar-brand logo-text" href="home.php">NINE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">

            <li class="nav-item">
              <a href="home.php" class="nav-link  <?php if (basename ($_SERVER['PHP_SELF'])=="home.php"){echo "active";} else {echo "";}?>" >Home</a>
            </li>
            <li class="nav-item">
               <a href="services.php" class="nav-link <?= (basename ($_SERVER['PHP_SELF'])=="services.php")?"active":"";?>" >Services</a>
             </li>
             <li class="nav-item">
               <a href="games.php" class="nav-link <?= (basename ($_SERVER['PHP_SELF'])=="games.php")?"active":"";?>" >Games</a>
             </li>
             <li class="nav-item">
               <a href="awards.php" class="nav-link <?= (basename ($_SERVER['PHP_SELF'])=="awards.php")?"active":"";?>" >Awards</a>
             </li>
             <li class="nav-item">
               <a href="team.php" class="nav-link <?= (basename ($_SERVER['PHP_SELF'])=="team.php")?"active":"";?>" >Team</a>
             </li>
             <li class="nav-item">
               <a href="testimonials.php" class="nav-link <?= (basename ($_SERVER['PHP_SELF'])=="testimonials.php")?"active":"";?>" >Reviews</a>
             </li>
             <li class="nav-item">
               <a href="contact.php" class="nav-link <?= (basename ($_SERVER['PHP_SELF'])=="contact.php")?"active":"";?>" >Contact</a>
             </li>
          </ul>
          
        </div>
      
      </div>
    </nav>
    
    