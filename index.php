<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
</head>
<body>
    <h1>INTERFACE DE VALIDATION</h1>
    <ul>
        <li>Votre mot de passe doit contenir entre 6 et 10 caractere</li>
    </ul>
    <form method="post" action="verification.php">
        <label for="Password">Nouveau Mot de Passe </label>
        <input type="text" name="password" id="password"><br><br>
        <label for="confirmation">confirmation Mot de Passe </label>
        <input type="text" name="confirmation" id="confirmation"><br><br>
        <input type="submit" value="Suivant">
        
    </form>
</body>
</html>