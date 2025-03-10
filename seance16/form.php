<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            display: block;
            margin: 5px;
        }
    </style>
</head>
<body>
    <form action="insert-form.php" method="post">
        <label for="prenom">Prenom</label>
        <input type="text" id="prenom" name="prenom">
        <label for="courriel">Courriel</label>
        <input type="email" id="courriel" name="courriel">
        <label for="mdp">Mot de Passe</label>
        <input type="password" id="mdp" name="mdp">
        <label for="naissance">Date de naissances</label>
        <input type="date" id="naissance" name="naissance">
        <input type="submit" value="Save">
    </form>
</body>
</html>
