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


    <div class="blog">
        <?php $articles = getArticles(); ?>

        <?php if ($articles) : ?>

            <?php foreach ($articles as $article) : ?>

                <div class="article">
                    <a href="/singleArticle.php?title=<?= $article['title']; ?>&content=<?= $article['content']; ?>">
                        <h1><?php echo $article['title']; ?></h1>
                    </a>
                    <p><?php echo $article['content']; ?></p>
                </div>

            <?php endforeach; ?>

        <?php else: ?>
            <p>Articles not found!!!!</p>
        <?php endif; ?>

    </div>
</div>

</body>
</html>

