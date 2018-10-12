<?php
/**
 * Created by PhpStorm.
 * User: phenicien
 * Date: 12/10/2018
 * Time: 00:32
 */
session_start();
ob_start();

include ("live.html");

$content = ob_get_clean();
include ("../layout.php");
?>
