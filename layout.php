<!doctype html>
<html lang="fr">
<body>
<?php
session_start();
include $_SERVER['DOCUMENT_ROOT']."/view/header.php";
echo $content;
include $_SERVER['DOCUMENT_ROOT']."/view/footer.php";
?>
</body>
</html>
