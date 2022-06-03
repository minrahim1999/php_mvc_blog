<nav class="top-nav">
    <ul>
        <li>
            <a href="<?php echo BASE_URL; ?>/index">Home</a>
        </li>
        <li>
            <a href="<?php echo BASE_URL; ?>/about">About</a>
        </li>
        <li>
            <a href="<?php echo BASE_URL; ?>/projects">Projects</a>
        </li>
        <li>
            <a href="<?php echo BASE_URL; ?>/posts">Blog</a>
        </li>
        <li>
            <a href="<?php echo BASE_URL; ?>/contact">Contact</a>
        </li>
        <li class="btn-login">
            <?php if (isset($_SESSION['user_id'])): ?>
            <a href="<?php echo BASE_URL; ?>/users/logout">Log out</a>
            <?php
            else: ?>
            <a href="<?php echo BASE_URL; ?>/users/login">Login</a>
            <?php
            endif; ?>
        </li>
    </ul>
</nav>