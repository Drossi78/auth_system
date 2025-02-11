# 🚀 Auth System - Benutzer-Authentifizierung mit PHP

Dieses Projekt ist ein **Benutzer-Authentifizierungssystem in PHP**, das es ermöglicht, sich zu **registrieren, anzumelden, auf ein geschütztes Dashboard zuzugreifen und sich abzumelden**.

---

## 📌 Funktionen
✅ Benutzerregistrierung und -anmeldung mit sicherem Passwort-Hashing  
✅ Verwaltung von Benutzersitzungen (Session Management)  
✅ **Dashboard mit zwei Seiten (`dashboard.php` und `dashboard2.php`)**, die Lebenslauf-Informationen anzeigen  
✅ Sichere Abmeldung (Logout)  
✅ Einfache HTML/CSS-Oberfläche  

---

## 🛠️ Installation

### 1️ **Projekt von GitHub klonen**
Falls das Projekt noch nicht lokal vorhanden ist, klone es mit folgendem Befehl:

git clone https://github.com/Drossi78/auth_system.git

### 2️ XAMPP starten (Apache & MySQL)
Falls du XAMPP verwendest:

Öffne das XAMPP Control Panel
Starte Apache und MySQL durch Klicken auf Start

### 3️ Datenbank erstellen

Öffne phpMyAdmin unter http://localhost/phpmyadmin/

## Erstelle eine neue Datenbank mit dem Namen auth_system

Führe folgendes SQL-Skript aus, um die users-Tabelle zu erstellen:
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


### 4 Projekt in XAMPP-Verzeichnis kopieren


## Projekt starten
Nachdem XAMPP läuft, öffne den Browser und gehe zu:
http://localhost/auth_system/

 ## Benutzer registrieren

Gehe zur Registrierungsseite:
http://localhost/auth_system/register.php

## Anmelden
Nach der Registrierung gehe zur Login-Seite:

http://localhost/auth_system/login.php

### Nach erfolgreicher Anmeldung wirst du zum Dashboard weitergeleitet.

## Dashboard-Seiten
Das Dashboard enthält zwei Seiten:

**Seite 1 (dashboard.php) → Zeigt den ersten Lebenslauf**
**Seite 2 (dashboard2.php) → Zeigt den zweiten Lebenslauf**
Du kannst zwischen beiden Seiten wechseln.

## Abmelden
Um sich abzumelden, klicke auf „Abmelden“ oder gehe direkt zu:

http://localhost/auth_system/logout.php


# Anpassungen 
Falls du die Datenbankverbindung anpassen möchtest, öffne config.php und ändere die Einstellungen:

$host = "localhost";
$dbname = "auth_system";
$username = "root";
$password = ""; // Falls dein MySQL ein Passwort hat, trage es hier ein


Autor :
Tekoulegha Dongmo Rossignol Blondel
tekoulegha@icloud.com
