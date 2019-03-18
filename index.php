<?php

require('php/functions.php');

$db = new PDO('mysql:host=127.0.0.1; dbname=portfolio', 'root');
$getAboutText = getAboutText($db);
$text = createParagraphs($getAboutText);

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
        <h2 class="title">Web developer and nice enough bloke</h2>
    </header>
    <main>
        <h2>About Fred Platt</h2>
        <?php echo $text; ?>
<!--        <div class="textLeft">-->
<!--            <p></p>-->
<!--            <img src="img/fred2.jpg" alt="fredPlatt">-->
<!--        </div>-->
<!--        <div class="textRight">-->
<!--            <p class="childText2">Beyond coding, I conduct orchestras professionally and have a deep love of classical music. I direct Resonance Orchestra in Bristol and the University of Bath Orchestra. My favourite gig to date was putting a 100-strong orchestra under Concorde at the Aerospace Museum to perform Shostakovich. 500 people came, it was a really special night!</p>-->
<!--            <img src="img/conductor.jpg" alt="Conductor Fred">-->
<!--        </div>-->
<!--        <div class="textLeft">-->
<!--            <p>In my free time I enjoy riding my motorcycle, which I often do off-road. It is lovely to get out into the countryside and reconnect with nature, so occasionally I will take a tent or a hammock and have a weekend away from the city, out in the wilderness! Beyond that I enjoy cooking, climbing, playing with my niece and nephews and very occasionally doing absolutely nothing.</p>-->
<!--            <img src="img/bike2.jpg" alt="Biker Fred">-->
<!--        </div>-->
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
    </footer>
</body>
</html>