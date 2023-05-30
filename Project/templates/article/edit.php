<?php include __DIR__ . "/../header.php";
?>
<form action="/phplabs/Project/www/article/update/<?= $article->getId(); ?>" method="post">
    <input type="text" name="title" id="" value=<?= $article->getTitle(); ?>>
    <input type="text" name="text" id="" value=<?= $article->getText(); ?>>
    <input type="text" name="author" id="" value=<?= $article->getAuthorId()->getNickname(); ?>>
    <button type="submit">Обновить</button>
</form>

<?php include __DIR__ . "/../footer.html"; ?>