<?php session_start(); ?>
<nav>
    <div class="logo">
        <span>
            <a href="index.php">TITLE</a>
        </span>
    </div>
    <div class="wrapper">
        <ul>
            <li><a href="index.php">Main Page</a></li>
            <!--<li><a href="login.php">Login</a></li>
            <li><a href="logout.php">Logout</a></li>-->

            <?php if (isset($_SESSION['logged_in'])): ?>             
                <li><a href="login.php">Admin Panel</a></li>
                <li><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>