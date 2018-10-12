<?php
/**
 * Created by PhpStorm.
 * User: phenicien
 * Date: 11/10/2018
 * Time: 21:54
 */

session_start();
ob_start();


echo "<a href=\"/view/09.php\">day 9</a>";
$content = ob_get_clean();
include ("./layout.php");
?>


