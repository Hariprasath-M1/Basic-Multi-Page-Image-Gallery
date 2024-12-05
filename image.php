<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image View</title>

    <!-- Link to the CSS file -->
    <link rel="stylesheet" href="./styles/image.css">
</head>
<body>

<?php include './views/header.php'; ?>

<?php if(!empty($_GET['image']) && !empty($imageTitles[$_GET['image']])): ?>
    <?php $image = $_GET['image']; ?>
    <div class="image-container">
        <h1 class="image-title"><?php echo e($imageTitles[$image]); ?></h1>
        <img src="./images/<?php echo rawurldecode($image); ?>" alt="" class="image">
        <p class="image-description"><?php echo str_replace("\n","<br />",e($imageDescriptions[$image])); ?></p>
    </div>
<?php else: ?>
<div class="notice">
    This image could not be found.
</div>
<?php endif; ?>

<a href="gallery.php">Back to gallery</a>
<br><br><br><br><br>

<?php include './views/footer.php'; ?>

</body>
</html>
