<?php
session_start();
$lang = strip_tags($_GET["lang"]);
$page = strip_tags($_GET["page"]);
if ($lang == "tr" || $lang == "en") {
    $_SESSION["lang"] = $lang;
    if (strlen($page) > 0) {
        header("Location:../".$page.".php");
    } else {
        header("Location:../index.php");
    }
} else {
    header("Location:../index.php");
}
?>