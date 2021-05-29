<?php
include('tours_handler.php')
?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Geoxor | Tours</title>
    <link rel="icon" href="./img/favicon.ico">
    <script src="https://kit.fontawesome.com/4abd74a538.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./css/General.css"/>
    <link rel="stylesheet" type="text/css" href="./css/Tours.css"/>
    <script language="javascript">document.body.style.overflow = 'hidden'</script>
</head>
<body name="body">
<div id="app">
    <header>
        <div class="wrap"><a href="index.php" class="router-link-active router-link-exact-active"
                             aria-current="page"><img class="logo" src="./img/logo.3bc4e30a.svg" alt="logo"></a>
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
    <div id="tours" class="tours">
        <h1 class="tours-main-label">Tours</h1>
        <div class="tours-full-width">
            <div class="vc_row tours-grid-section">
                <div class="vc_column-inner">
                    <?php
                    showTours();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>