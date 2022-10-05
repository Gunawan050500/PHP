<?php
error_reporting((0));
$acv = $_REQUEST['hal'];
?>
<nav id="navbar" class="navbar nav-menu">
    <ul>
        <li><a href="index.php?hal=home" class="nav-link scrollto <?= ($acv == 'home') ? 'active' : ''; ?>"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="index.php?hal=about" class="nav-link scrollto <?= ($acv == 'about') ? 'active' : ''; ?>"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="index.php?hal=study" class="nav-link scrollto <?= ($acv == 'study') ? 'active' : ''; ?>"><i class="bx bx-file-blank"></i> <span>Study</span></a></li>
        <li><a href="index.php?hal=tasks" class="nav-link scrollto <?= ($acv == 'tasks') ? 'active' : ''; ?>"><i class="bx bx-book-content"></i> <span>Tasks</span></a></li>
        <li><a href="index.php?hal=portfolio" class="nav-link scrollto <?= ($acv == 'portfolio') ? 'active' : ''; ?>"><i class="bx bx-server"></i> <span>Portfolio</span></a></li>
    </ul>
</nav><!-- .nav-menu -->