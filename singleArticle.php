<?php require_once 'functions.php'; ?>
<?php
if (isset($_SESSION['access']) && !$_SESSION['access']) {
    header('Location: /access_denied.php');
    exit;
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Тег FORM</title>
</head>

<body>

<div>
    <a href="/?logout">Logout</a>
    <p>Hello "<?php viewUserName(); ?>"</p>
    <a href="javascript:history.back(1)" title="...">назад</a>


    <div class="blog">
        <?php $article = $_GET; ?>
        <?php if ($article) : ?>

            <div class="article">
                <h1><?php echo $article['title']; ?></h1>
                <p><?php echo $article['content']; ?></p>
            </div>

        <?php else: ?>
            <p>Article not found!!!!</p>
        <?php endif; ?>

    </div>
</div>

</body>
</html>

