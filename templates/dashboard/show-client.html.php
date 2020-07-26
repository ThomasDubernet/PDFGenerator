<div class="container">
    <section>

        <?php if(isset($client)) :?>
        <div class="card-client">
            <h4 class="text-center text-info pb-3"><?= $client['entreprise'] ?></h4>
            <ul class="list-unstyled text-center">
                <li class="pb-1"><?= $client['prenom'] . " " . $client['nom'] ?></li>
                <li class="pb-1">Tél: <?= $client['telephone'] ?></li>
                <li class="pb-1">Email: <?= $client['email'] ?></li>
                <li class="pb-1"><?= $client['adresse'] . " - " . $client['zip'] . " " . $client['ville'] ?></li>
            </ul>
            <div class="d-flex">
                <form action="index.php?controller=client&task=delete&id=<?= $client['id'] ?>&user_id=<?= $_SESSION['id'] ?>" method="post" class="ml-auto">
                    <button class="btn btn-sm btn-outline-danger" type="submit">Supprimer</button>
                </form>
            </div>
        </div>
        <?php else : ?>
            <div class="error">
                <p class="text-warning">Ce client n'existe pas ! Veuillez revenir à l'<a href="index.php?controller=dashboard&task=index&id=<?= $_SESSION['id'] ?>" class="navlink">accueil</a></p>
                
            </div>
        <?php endif; ?>
    </section>
</div>