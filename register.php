<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    try {
        $stmt->execute([$username, $email, $password]);
        echo "Registrierung erfolgreich! <a href='login.php'>Hier anmelden</a>";
    } catch (PDOException $e) {
        echo "Fehler: " . $e->getMessage();
    }
}
?>

<form method="post">
    Benutzername: <input type="text" name="username" required><br>
    E-Mail: <input type="email" name="email" required><br>
    Passwort: <input type="password" name="password" required><br>
    <button type="submit">Registrieren</button>
</form>
