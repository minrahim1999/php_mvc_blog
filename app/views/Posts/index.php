<?php
require APPROOT . '/views/Includes/head.php';
?>

<div class="navbar dark">
    <?php
    require APPROOT . '/views/Includes/navigation.php';
    ?>
</div>
<div class="container">
    <?php if(isLoggedIn()): ?>
    <a class="btn green" href="<?php echo BASE_URL; ?>/posts/create">
        Create
    </a>
    <?php endif; ?>

    <?php foreach($data['posts'] as $post): ?>
    <div class="container-item">
        <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $post->user_id): ?>
        <a class="btn orange" href="<?php echo BASE_URL . "/posts/update/" . $post->id ?>">
            Update
        </a>
        <form action="<?php echo BASE_URL . "/posts/delete/" . $post->id ?>" method="POST">
            <input type="submit" name="delete" value="Delete" class="btn red">
        </form>
        <?php endif; ?>
        <h2>
            <?php echo $post->title; ?>
        </h2>

        <h3>
            <?php echo 'Created on: ' . date('F j h:m', strtotime($post->created_at)) ?>
        </h3>

        <p>
            <?php echo $post->body ?>
        </p>
    </div>
    <?php endforeach; ?>
</div>
<?php
require APPROOT . '/views/Includes/footer.php';
?>