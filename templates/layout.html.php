<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>T4Code - <?= $pageTitle ?></title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <div class="content">
        <div class="navbar navbar-light bg-light">
            <?php if(!isset($_SESSION['id'])) :?>
                
                <ul class="navbar-nav list-btn">
                    <li class="nav-item my-2">
                        <form action="index.php?controller=user&task=sign" method="post">
                            <button class="btn btn-outline-info" type="submit">Inscription</button>
                        </form>
                    </li>
                    <li class="nav-item my-2">
                        <form action="index.php?controller=user&task=login" method="post">
                            <button class="btn btn-outline-success" type="submit">Connexion</button>
                        </form>
                    </li>
                </ul>
            <?php  else : ?>
                <ul class="navbar-nav list-btn h-100">
                    <li class="nav-item"><h2><?php if(isset($_SESSION['username'])){ echo(ucfirst($_SESSION['username']));} ?></h2></li>
                    <li class="nav-item"><a href="index.php?controller=dashboard&task=index&id=<?= $_SESSION['id'] ?>" class="navlink">Accueil</a></li>
                    <li class="nav-item mt-auto">
                        <form action="index.php?controller=user&task=logout" method="post">
                            <button class="btn btn-outline-danger" type="submit">Déconnexion</button>
                        </form>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
        <div id="content"><?= $pageContent ?></div>
    </div>
</body>
</html>