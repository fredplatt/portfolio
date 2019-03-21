<?php

require_once 'php/dbConnection.php';
require 'php/functions.php';

$db = getdbConnection();
$getAboutText = getAboutText($db);
$aboutMeText = createParagraphs($getAboutText);

?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <link rel='stylesheet' type='text/css' href='css/normalize.css'>
    <link rel='stylesheet' type='text/css' href='css/styles.css'>
    <link rel="shortcut icon" type="image/png" href="img/favicon.gif"/>
    <title>Plattfolio</title>
</head>
<body>
    <header>
        <h1 class="title">Full-Stack Fred</h1>
        <h2 class="title">Web developer</h2>
    </header>
    <main>
        <img src="img/fred2.jpg" alt="Fred">
        <h2>About Fred Platt</h2>

        <?php echo $aboutMeText; ?>

    </main>
    <section>
        <h2>Portfolio</h2>
        <div class="pilot">Pilot Shop</div>
        <div class="preview">Coming soon!</div>
        <div class="preview">Coming soon!</div>
        <div class="preview">Coming soon!</div>
        <div class="preview">Coming soon!</div>
        <div class="preview">Coming soon!</div>
    </section>
    <footer>
        <h4>Talk to Fred!</h4>
        <a href="mailto:fred_platt@hotmail.com" class="contact"><img src="img/email.png" alt="email"></a>
        <a href="tel:+447757182517" class="contact"><img src="img/phone.png" alt="Phone"></a>
        <a href="https://github.com/fredplatt" target="_blank"><img src="img/github.png" alt="GitHub"></a>
        <a href="https://twitter.com/frederickplatt" target="_blank"><img src="img/twitter.png" alt="Twitter"></a>
        <a href="php/login.php" class="contact"><img src="img/settings.png" alt="Admin"></a>
    </footer>
</body>
</html>