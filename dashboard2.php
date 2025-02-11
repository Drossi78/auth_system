<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Zweite Seite</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>

<div class="container">
    <h1>Willkommen, <?php echo $_SESSION["user"]; ?>!</h1>

    <div class="nav">
        <a href="dashboard.php">Zur ersten Seite</a>
        <a href="dashboard2.php">Aktuelle Seite</a>
    </div>

    <h2>Persönliche Daten</h2>
    <div class="section">
        <p><strong>Name:</strong> Rossignol Blondel Tekoulegha Dongmo</p>
        <p><strong>Adresse:</strong> Bergstrasse 6, Butzbach</p>
        <p><strong>Email:</strong> tekoulegha@icloud.com</p>
        <p><strong>Telefon:</strong> 015904979558</p>
        <p><strong>Geburtsdatum:</strong> 13.05.1996</p>
        <p><strong>Staatsbürgerschaft:</strong> Kameruner</p>
    </div>

    <h2>Beruflicher Werdegang</h2>
    <div class="section">
        <ul>
            <li>02/2020 – Werkstudent als Web Entwicklung, B&R GmbH, Gießen</li>
            <li>05/2018 – 12/2019: Werkstudent, Fritz Winter Eisengießerei, Stadtallendorf</li>
            <li>05/2017 – 04/2018: Ferien-Job, Leitz & Schwarzbauer, Frankfurt am Main</li>
        </ul>
    </div>

    <h2>Ausbildung</h2>
    <div class="section">
        <ul>
            <li>10/2021 – WirtschaftsInformatik und Informatik, Bachelor (TH Mittelhessen, Friedberg)</li>
            <li>12/2017 – Deutsche Sprachprüfung für Hochschulzugang (Hochschule Darmstadt)</li>
            <li>2014 – Abitur (College Privee Les Lilas, Jaun)</li>
        </ul>
    </div>

    <h2>Zertifikate</h2>
    <div class="section">
        <ul>
            <li>01/2023 – Abschlusszertifikat Webtechniken: HTML</li>
            <li>03/2024 – Shopify Grundkurs</li>
            <li>04/2024 – Social Commerce: E-Commerce mit Social Media</li>
            <li>05/2024 – Social Media-Marketing – Grundlagen</li>
        </ul>
    </div>

    <h2>Kenntnisse</h2>
    <div class="section">
        <ul>
            <li>SQL, MySQL</li>
            <li>PHP</li>
            <li>JavaScript, TypeScript</li>
            <li>Netzwerktechnologien (LAN, WAN, VPN), TCP/IP</li>
            <li>Docker</li>
            <li>Projektmanagement-Methoden</li>
        </ul>
    </div>

    <h2>Sprachen</h2>
    <div class="section">
        <ul>
            <li>Französisch (C2)</li>
            <li>Englisch (B2)</li>
            <li>Deutsch (C1)</li>
        </ul>
    </div>

    <h2>Interessen</h2>
    <div class="section">
        <ul>
            <li>Reisen</li>
            <li>Basketball</li>
            <li>Gaming</li>
            <li>Tanzen</li>
        </ul>
    </div>

    <br>
    <a class="logout" href="logout.php">Abmelden</a>
</div>

</body>
</html>
