<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto <?php if ($page == 'home' ) echo 'active' ; ?>"
                href="index.php?hal=home">Home</a></li>
        <li><a class="nav-link scrollto <?php if ($page == 'About' ) echo 'active' ; ?>"
                href="index.php?hal=about">About</a></li>
        <li><a class="nav-link  scrollto <?php if ($page == 'Study' ) echo 'active' ; ?>"
                href="index.php?hal=study">Study</a></li>
        <li><a class="nav-link  scrollto <?php if ($page == 'Tasks' ) echo 'active' ; ?>"
                href="index.php?hal=tasks">Tasks</a></li>
        <li><a class="nav-link scrollto <?php if ($page == 'portfolio' ) echo 'active' ; ?>"
                href="index.php?hal=portfolio">Portfolio</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->