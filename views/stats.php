<!DOCTYPE html>
<html>
<head>
    <?php view('head.php', ['message' => $message]) ?>
</head>
<body>
    <main>
        <div class="container">
            <p><?php echo $message ?></p>
        </div>
    </main>
</body>
</html>
