<!DOCTYPE html>
<html lang="rs">
<head>
    <title>-GamesTRIO-</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href= '<?= DIR_CSS . 'main.css' ?>'  >
    <link rel='stylesheet' type='text/css' href= '<?= DIR_CSS. 'style.css' ?>'  >


</head>
<body>

<div class="header">
    <div class="columns">
        <div>
            <div id="social-holder">
                <span id="site-name">-GamesTRIO-</span>
                <a href="index.php?page=login">
                    <img alt="Login"
                         src="<?= DIR_IMG . 'login.png' ?>">
                </a>
                <a href="#">
                    <img alt="Facebook"
                         src="<?= DIR_ICONS . 'facebook.svg' ?>">
                </a>
                <a href="#">
                    <img alt="Twitter"
                         src="<?= DIR_ICONS . 'twitter.svg' ?>">
                </a>
                <?php if (isset($_SESSION ["admin"]) || isset($_SESSION["user"])): ?>
                <a href= "index.php?page=logout">
                    <img alt="Logout"
                         src="<?= DIR_IMG . 'logout.png' ?>" >
                </a>
                <?php endif ?>
                <nav id="main-menu">
                    <a href="index.php" target="_self">Home page</a>
                    <a href="index.php?page=gamelist" target="_self">Game list</a>
                    <a href="index.php?page=genres" target="_self">Genres</a>
                    <a href="index.php?page=installation" target="_self">Installation instructions</a>
                    <a href="index.php?page=faq">F.A.Q</a>
                    <a href="index.php?page=contact">Contact information</a>
                </nav>
            </div>
        </div>
    </div>





















