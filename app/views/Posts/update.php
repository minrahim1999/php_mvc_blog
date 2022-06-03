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
        Update post
    </h1>

    <form action="<?php echo BASE_URL; ?>/posts/update/<?php echo $data['post']->id ?>" method="POST">
        <div class="form-item">
            <input type="text" name="title" value="<?php echo $data['post']->title ?>">

            <span class="invalidFeedback">
                <?php echo $data['titleError']; ?>
            </span>
        </div>

        <div class="form-item">
            <textarea name="body" placeholder="Enter your post..."><?php echo $data['post']->body ?></textarea>

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