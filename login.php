<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Connexion
    </title>

    <link rel="stylesheet" type="text/css"
          href="style.css">
</head>
<body>
<div class="header">
    <h2>Se connecter</h2>
</div>

<form method="post" action="login.php">

    <?php include('errors.php'); ?>

    <div class="input-group">
        <label>E-mail</label>
        <input type="text" name="email" >
    </div>
    <div class="input-group">
        <label>Mot de passe</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" class="btn"
                name="login_user">
            Connexion
        </button>
    </div>



    <p>
        Nouveau compte ?
        <a href="register.php">
            Cliquez ici pour vous inscrire !
        </a>
    </p>



</form>
</body>

</html>