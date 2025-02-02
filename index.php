<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formulardaten abrufen
    $vorname = $_POST["vorname"];
    $nachname = $_POST["nachname"];
    $anliegen = $_POST["anliegen"];

    // E-Mail-Empfänger
    $empfaenger = "deine@email.com";

    // E-Mail-Betreff
    $betreff = "Neue Nachricht von $vorname $nachname";

    // E-Mail-Nachricht
    $nachricht = "Vorname: $vorname\n";
    $nachricht .= "Nachname: $nachname\n";
    $nachricht .= "Anliegen:\n$anliegen";

    // E-Mail-Header
    $header = "From: $vorname $nachname <$empfaenger>";

    // E-Mail senden
    mail($empfaenger, $betreff, $nachricht, $header);

    // Optional: Weiterleitung nach dem Absenden
    header("Location: danke.html");
    exit;
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>Pablo's Website</title>
</head>

<body>
<section id="Start">
    <div class="header">
        <a class="headl" href="#Start">Willkommen</a>
        <div class="headr">
            <a href="#Kontakt">Contact</a>
            <a href="#Social">Social Media</a>
            <a href="#About">About</a>
        </div>
    </div>
</section>

<hr>

<section id="About">
    <div class="container">
        <div class="card">
            <img src="Bilder/code-svgrepo-com.svg" alt="">
            <p>Ich liebe es, zu programmieren. Ich beherrsche bereits CSS und HTML un lerne aktuell JavaScript und PHP. Dabei ist es stets mein Ziel, mich weiterzuentwickeln und möglichst viele neue Sprachen zu erlernen.</p>
        </div>
        <div class="card">
            <img src="Bilder/education-svgrepo-com.svg" alt="">
            <p>Zurzeit besuche ich die 12. Klasse eines Gymnasiums in Bayern. Meine Lieblingsfächer sind Sport und Geografie.</p>
        </div>
        <div class="card">
            <img src="Bilder/basketball-court-svgrepo-com.svg" alt="">
            <p>Neben Videospielen spiele ich in meiner Freizeit gerne Basketball. Mein Lieblingsverein ist der Fc Bayern Basketball.
        </div>
    </div>
</section>

<hr>

<section id="Social">
    <div class="container">
        <div class="card">
            <a href="https://twitter.com/royal_miner" target="_blank"><img src="Bilder/twitter-154-svgrepo-com.svg" alt=""></a>
        </div>
        <div class="card">
            <a href="https://www.instagram.com/_royal_miner_/" target="_blank"><img src="Bilder/instagram-167-svgrepo-com.svg" alt=""></a>
        </div>
        <div class="card">
            <a href="https://laby.net/@Royal_Miner" target="_blank"><img src="Bilder/laby.png" alt=""></a>
        </div>
        <div class="card">
            <a href="https://open.spotify.com/user/8hag4vgtlmxrkfko6cdxs8rxc?si=139d762bc5994f30" target="_blank"><img src="Bilder/spotify-162-svgrepo-com.svg" alt=""></a>
        </div>
        <div class="card">
            <a href="https://github.com/RoyalMiner" target="_blank"><img src="Bilder/github-142-svgrepo-com.svg" alt=""></a>
        </div>

    </div>
</section>

<hr>

<section id="Kontakt">
    <div class="formular">
        <img class="profile" src="Bilder/person-border-svgrepo-com.svg" alt="">
        <form action="">
            <div class="untereinander">
                <label for="Vorname"></label>
                <input type="text" id="Vorname" name="vorname" placeholder="Vorname">
            </div>
            <div class="untereinander">
                <label for="Nachname"></label>
                <input type="text" name="nachname" id="Nachname" placeholder="Nachname">
            </div>
            <div class="untereinander">
                <label for="email"></label>
                <input type="email" name="email" id="email" placeholder="Email-Addresse">
            </div>
            <div class="untereinander">
                <label for="Anliegen"></label>
                <textarea name="anliegen" id="Anliegen" placeholder="Was willst du mir mitteilen?"></textarea>
            </div>
            <div class="untereinander">
                <input class="knopf" type="submit" value="Senden">
            </div>
        </form>
    </div>
</section>
<hr>

<div class="ende">
    <p style="font-weight: 400">Page created by Pablo Bela &copy</p>
</div>

</body>
</html>
