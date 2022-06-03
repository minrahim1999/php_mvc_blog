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
        <h2>Register</h2>

        <form id="register-form" method="POST" action="<?php echo BASE_URL; ?>/users/register">
            <input type="text" placeholder="Username *" name="username">
            <span class="invalidFeedback">
                <?php echo $data['usernameError']; ?>
            </span>

            <input type="email" placeholder="Email *" name="email">
            <span class="invalidFeedback">
                <?php echo $data['emailError']; ?>
            </span>

            <input type="password" placeholder="Password *" name="password">
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>

            <input type="password" placeholder="Confirm Password *" name="confirmPassword">
            <span class="invalidFeedback">
                <?php echo $data['confirmPasswordError']; ?>
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