<?php
require APPROOT . '/views/Includes/head.php';
?>

<div class="navbar dark">
    <?php
    require APPROOT . '/views/Includes/navigation.php';
    ?>
</div>
<div class="container-login">
    <div class="wrapper-login">
        <h2>Sign in</h2>

        <form action="<?php echo BASE_URL; ?>/users/login" method="POST">
            <input type="text" placeholder="Username *" name="username">
            <span class="invalidFeedback">
                <?php echo $data['usernameError']; ?>
            </span>

            <input type="password" placeholder="Password *" name="password">
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>

            <button id="submit" type="submit" value="submit">Submit</button>

            <p class="options">Not registered yet? <a href="<?php echo BASE_URL; ?>/users/register">Create an
                    account!</a></p>
        </form>
    </div>
</div>
<?php
require APPROOT . '/views/Includes/footer.php';
?>