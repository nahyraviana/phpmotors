<!DOCTYPE html5>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Motors</title>
    <meta name="description" content="Enhancement 1 Assignment for CSE340 at Brigham Young University - Idaho">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chathura:wght@100;300;400;700;800&display=swap"
        rel="stylesheet">
    <link href="css/mobile.css" rel="stylesheet">
    <link href="css/large.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
    </header>

    <nav>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/nav.php'; ?>
    </nav>
    <main>
        <h1>Welcome to PHP Motors!</h1>
        <div id="call-action">
            <h2 id="main-tittle">
                DMC Delorean</h2>

            <p>3 cup holders</p>
            <p>Superman doors</p>
            <p>Fuzzy Dice</p>
            <button>Own Today</button>
        </div>
        <div id="container">
            <div id="reviews">
                <h1>DMC Delorean Reviews</h1>
                <ul>
                    <li>"So fast it's like traveling in time."(4/5)</li>
                    <li>"Coolest ride on the road"(4/5)</li>
                    <li>"I'm feeling MArty McFly!"(5/5)</li>
                    <li>"The most futuristic ride of our day"(4.5/5)</li>
                    <li>"80's livin and I love it!"(5/5)</li>
                </ul>
            </div>
            <div class="upgrades">
                <h1 id="upgrades-tittle">Delorean Upgrades</h1>
                <div id="up1">
                    <img src="../phpmotors/images/upgrades/flux-cap.png" alt="Flux Capacitor" width="60">
                    <a href="#">Flux Capacitor</a>
                </div>
                <div id="up2">
                    <img src="../phpmotors/images/upgrades/flame.jpg" alt="Flame Decals" width="60">
                    <a href="#">Flame Decals</a>
                </div>
                <div id="up3">
                    <img src="../phpmotors/images/upgrades/bumper_sticker.jpg" alt="Bumper Sticker" width="60">
                    <a href="#">Bumper Sticker</a>
                </div>
                <div id="up4">
                    <img src="../phpmotors/images/upgrades/hub-cap.jpg" alt="Hub Caps" width="60">
                    <a href="#">Hub Caps</a>
                </div>
            </div>

        </div>

    </main>

    <footer>
        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
    </footer>

</body>

</html>