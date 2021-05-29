<?php
session_start();
include("database.php");
$dir = 'releases/img/';
$files = scandir($dir);
$result = $pdo->query("SELECT * FROM `releases` WHERE 1");

function showReleases()
{
    global $result, $dir;
    echo "<section class=\"downloads\"><div class=\"grid\">";
    while ($result2 = $result->fetch(PDO::FETCH_BOTH)) {
        $path = $dir . $result2['cover'] . ".png";
        $cover = $result2['cover'];
        echo "<div class=\"div\"><a href='release_preview.php?release=$cover'><img src='$path' alt='$cover' width='168px' height='168px'></a></div>";
    }
    echo "</div></section>";
}

?>