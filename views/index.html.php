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
            <ul>
                <?php foreach ($this->getMessages() as $message): ?>
                <li><?php echo $message ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    </main>
</body>
</html>
