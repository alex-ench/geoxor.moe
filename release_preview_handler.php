<?php
session_start();
$release = $_GET['release'];
include("database.php");
$dir = 'releases/img/';
$files = scandir($dir);
$table_releases = $pdo->query("SELECT * FROM `releases` WHERE cover='$release'")->fetch(PDO::FETCH_BOTH);

$artist = $table_releases['artist'];
$title = $table_releases['title'];
$cover = "./releases/" . $table_releases['cover'] . ".png";
$type = $table_releases['type'];
$description = $table_releases['description'];
$demo = $table_releases['demo'];
$download = $table_releases['download'];
$table_credits_artist1 = $pdo->query("SELECT T.id, A.name, A.position, A.link, A.icon FROM releases T INNER JOIN credits A ON T.artist_1 = A.id WHERE title='$title'")->fetch(PDO::FETCH_BOTH);
$artist1_name = $table_credits_artist1['name'];
$artist1_position = $table_credits_artist1['position'];
$artist1_link = $table_credits_artist1['link'];
$artist1_icon = $table_credits_artist1['icon'];
$table_credits_artist2 = $pdo->query("SELECT T.id, A.name, A.position, A.link, A.icon FROM releases T INNER JOIN credits A ON T.artist_2 = A.id WHERE title='$title'")->fetch(PDO::FETCH_BOTH);
$artist2_name = $table_credits_artist2['name'];
$artist2_position = $table_credits_artist2['position'];
$artist2_link = $table_credits_artist2['link'];
$artist2_icon = $table_credits_artist2['icon'];
$btn_color = $table_releases['btn_color'];

function showType()
{
    global $type;
    global $description;
    global $table_releases;
    if ($type == "Single") {
        echo "<h3 class=\"category\">SONG BIO</h3>
                        <p class=\"description\">$description</p>";
    } elseif ($type == "EP" | $type == "Album") {
        $show = explode(', ', $table_releases['description']);
        echo "<div class='tracklist'><h3 class=\"category\">TRACKLIST</h3><ol>";
        foreach ($show as $value) {
            echo "<li class='description'>" . $value . "</li>";
        }
        echo "</ol></div>";
    }
}

function showArtists()
{
    global $artist2_name;
    if ($artist2_name != "NULL") {
        global $artist2_link, $artist2_icon, $artist2_name, $artist2_position;
        echo "<a href=\"$artist2_link\" target=\"_blank\" class=\"credits\">
          <img src=\"$artist2_icon\">
          <h3 class=\"name\">$artist2_name</h3>
          <h5 class=\"position\">$artist2_position</h5></a>";
    }
}
?>
