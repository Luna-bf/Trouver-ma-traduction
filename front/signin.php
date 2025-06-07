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

            <div class="w-50-percent d-i-flex form-input-parent" id="mt-first-input">
                <label for="username-email" class="w-50-percent mb-10 mt-first-label">Nom d'utilisateur ou email</label>
                <input type="text" class="form-input mb-50" id="username-email">
            </div>

            <div class="w-50-percent d-i-flex form-input-parent">
                <label for="password" class="mb-10">Mot de passe</label>
                <input type="password" id="password" class="form-input">
                <a href="#" id="forgotten-password">Mot de passe oublié ?</a>
            </div>
                    
            <div class="w-50-percent d-i-flex" id="remember">
                <input type="checkbox" name="remember" id="remember-input">
                <label for="remember-input">Se souvenir de moi</label>
            </div>

            <div class="d-i-flex d-flex">
                <input type="submit" value="Se connecter" class="submit-btn">
            </div>
        </form>

        <div class="d-flex account-parent">
            <div class="d-flex" id="account-p">
                <p>Vous n'avez pas de compte ?</p>
            </div>
            
            <div class="d-i-flex d-flex">
                <a href="signup.php" class="other-btn">Inscrivez-vous</a>
            </div>
        </div>
    </div>
</body>
</html>