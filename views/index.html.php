<?php
/**
 * Html page template
 *
 * @var Deployable\Http\Output\Web $this
 */
?>
<!DOCTYPE html>
<html>
<head>
    <?php include 'head.html.php' ?>
</head>
<body>
    <main>
        <div class="container">
            <ul><?php echo $this->getMessages('<li>%s</li>') ?></ul>
        </div>
    </main>
</body>
</html>
