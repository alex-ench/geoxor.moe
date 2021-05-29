<?php
include('release_preview_handler.php');
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Geoxor | <?php echo $title ?></title>
    <link rel="icon" href="./img/favicon.ico">
    <script src="https://kit.fontawesome.com/4abd74a538.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/General.css"/>
    <link rel="stylesheet" type="text/css" href="./css/Release_preview.css"/>
</head>
<body>
<div id="app">
    <header>
        <div class="wrap"><a href="index.php" class="router-link-active router-link-exact-active"
                             aria-current="page">
                <img class="logo" src="./img/logo.3bc4e30a.svg" alt="logo"></a>
            <nav>
                <ul class="nav-links">
                    <li><a href="tours.php" class="">Tours</a></li>
                    <li><a href="faq.php" class="">FAQ</a></li>
                    <li><a href="biography.php" class="">Biography</a></li>
                    <li><a href="contact.php" class="">Contact</a></li>
                    <li>
                        <div class="btn"><a href="releases.php" class=""><span><i class="fas fa-download"></i> Releases</span></a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="downloads">
        <div class="wrap">
            <a target="_blank" href="<?php echo $cover ?>">
                <img class="cover" src="<?php echo $cover ?>" alt="<?php echo $title ?>"></a>
            <div class="info">
                <div class="details">
                    <div><h1 class="title"><?php echo $title ?></h1>
                        <h3 class="type" style="<?php echo $btn_color ?>"><?php echo $type ?></h3>
                    </div>
                    <h2 class="artist"><?php echo $artist ?></h2>
                    <?php showType(); ?>
                    <h3 class="category">CREDITS</h3><a href="<?php echo $artist1_link ?>" target="_blank" class="credits">
                        <img src="<?php echo $artist1_icon ?>">
                        <h3 class="name"><?php echo $artist1_name ?></h3>
                        <h5 class="position"><?php echo $artist1_position ?></h5></a>
                    <?php showArtists(); ?>
                </div>
                <div class="audio-container">
                    <audio preload="auto" id="player" src="<?php echo $demo?>" type="audio/mp3"></audio>
                    <div class="controls-container">
                        <script>document.getElementById('player').volume = 0.2</script>
                        <button class="player-button" style="<?php echo $btn_color ?>" onclick="document.getElementById('player').play()"><i class="fa fa-play" aria-hidden="true"></i></button>
                        <button class="player-button" style="<?php echo $btn_color ?>" onclick="document.getElementById('player').pause()"><i class="fa fa-pause" aria-hidden="true"></i></button>
                        <button class="player-button" style="<?php echo $btn_color ?>" onclick="document.getElementById('player').volume+=0.1"><i class="fa fa-volume-up" aria-hidden="true"></i></button>
                        <button class="player-button" style="<?php echo $btn_color ?>" onclick="document.getElementById('player').volume-=0.1"><i class="fa fa-volume-down" aria-hidden="true"></i></button>
                        <script> setTimeout(function(){console.log(audio.duration)},200);</script>
                    </div>
                </div>
                <div class="download-container"><a class="download" href="<?php echo $download ?>" download style="<?php echo $btn_color ?>">
                    <i class="fas fa-download"></i> DOWNLOAD!</a></div>
            </div>
        </div>
    </section>
</div>
</body>
</html>