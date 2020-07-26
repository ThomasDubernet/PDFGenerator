<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>T4Code - <?= $pageTitle ?></title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <div class="content">
        <div class="navbar">
            <?php if(!isset($_SESSION['id'])) :?>
                
                <ul class="list-unstyled list-btn">
                    <li class="btn-user"><a href="index.php?controller=user&task=sign">Inscrition</a></li>
                    <li class="btn-user"><a href="index.php?controller=user&task=login">Connexion</a></li>
                </ul>
            <?php  else : ?>
                <ul class="list-unstyled list-btn">
                    <li class="btn-user"><h2><?php if(isset($_SESSION['username'])){ echo($_SESSION['username']);} ?></h2></li>
                    <li class="btn-user"><a href="index.php?controller=user&task=logout">Déconnexion</a></li>
                </ul>
                <h3 class="title-navbar">Clients</h3>
                <a href="index.php?controller=client&task=add" class="btn-new">Nouveau</a>
                <h3 class="title-navbar">Devis</h3>
                <a href="" class="btn-new">Nouveau</a>
                <h3 class="title-navbar">Factures</h3>
                <a href="" class="btn-new">Nouveau</a>
            <?php endif; ?>
        </div>
        <div id="content"><?= $pageContent ?></div>
    </div>
</body>
</html>