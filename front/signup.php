<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trouver ma traduction - Connexion</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <div class="form-parent d-flex">
        <form action="form.php" class="d-flex">
            <h1>Créer un compte</h1>

            <div class="w-50-percent d-i-flex form-input-parent">
                <label for="username" class="w-50-percent mb-10">Nom d'utilisateur</label>
                <input type="text" class="form-input mb-50" id="username">
            </div>

            <div class="w-50-percent d-i-flex form-input-parent">
                <label for="email" class="w-50-percent mb-10">Adresse mail</label>
                <input type="email" class="form-input mb-50" id="email">
            </div>

            <div class="w-50-percent d-i-flex form-input-parent" id="password-div">
                <label for="password" class="mb-10">Mot de passe</label>
                <input type="password" id="password" class="form-input">
            </div>
                    
            <div class="w-50-percent d-i-flex" id="remember">
                <input type="checkbox" name="remember" id="remember-input">
                <label for="remember-input">Se souvenir de moi</label>
            </div>

            <div class="d-i-flex d-flex">
                <input type="submit" value="S'inscrire" class="submit-btn">
            </div>

            <div class="d-flex" id="no-account-p">
                <p>Vous avez déjà un compte ?</p>
            </div>
            
            <div class="d-i-flex d-flex">
                <a href="signin.php" class="other-btn">Connectez-vous</a>
            </div>
        </form>
    </div>

    

    <footer class="d-flex">
        <ul id="terms" class="d-flex">
            <li>Conditions d'utilisations</li>
            <li>Cookies</li>
            <li>A propos</li>
        </ul>
    </footer>
</body>
</html>