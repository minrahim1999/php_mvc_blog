<?php
require APPROOT . '/views/Includes/head.php';
?>

<div class="navbar dark">
    <?php
    require APPROOT . '/views/Includes/navigation.php';
    ?>
</div>

<div class="container center">
    <h1>
        Create new post
    </h1>

    <form action="<?php echo BASE_URL; ?>/posts/create" method="POST">
        <div class="form-item">
            <input type="text" name="title" placeholder="Title...">

            <span class="invalidFeedback">
                <?php echo $data['titleError']; ?>
            </span>
        </div>

        <div class="form-item">
            <textarea name="body" placeholder="Enter your post..."></textarea>

            <span class="invalidFeedback">
                <?php echo $data['bodyError']; ?>
            </span>
        </div>

        <button class="btn green" name="submit" type="submit">Submit</button>
    </form>
</div>
<?php
require APPROOT . '/views/Includes/footer.php';
?>