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
        <div class="article">
            <h1>title</h1>
            <p>content</p>
        </div>
    </div>
</div>

</body>
</html>

