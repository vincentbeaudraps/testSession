<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Inscription
    </title>
    <link rel="stylesheet" type="text/css"
          href="style.css">
</head>

<body>
<div class="header">
    <h2>S'inscrire</h2>
</div>

<form method="post" action="register.php">

    <?php include('errors.php'); ?>

    <div class="input-group">
        <label>Nom d'utilisateur</label>
        <input type="text" name="username"
               value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email"
               value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
        <label>Mot de passe</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Confirmer votre mot de passe</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group">
        <button type="submit" class="btn"
                name="reg_user">
            S'inscrire
        </button>
    </div>



    <p>
        Déjà un compte ?
        <a href="login.php">
            Se connecter ici
        </a>
    </p>



</form>
</body>
</html>