<head>
    <title>Ajouter votre animal de compagnie</title>
</head>

<div class="header">
    <h2>Ajouter votre animal de compagnie</h2>
</div>
<form method="post" action="add.php">
    <link rel="stylesheet" type="text/css"
          href="style.css">
    <div class="input-group">
        <label>Nom </label>
        <input type="text" name="nomAni">
    </div>
    <div class="input-group">
        <label>Date de naissance</label>
        <input type="date" name="dateNaissAni">
    </div>
    <div class="input-group">
        <label>Date dernier vaccin</label>
        <input type="date" name="dateDerVax">
    </div>
    <div class="input-group">
        <button type="submit" class="btn"
                name="reg_ani">
            Ajouter
        </button>
    </div>
</form>