<div class="container">
    <section>

        <?php if(isset($client)) :?>
            <div class="d-flex">
                <ul class="list-unstyled">
                    <li><h2 class="text-center text-info pb-3"><?= $client['entreprise'] ?></h2></li>
                    <li><form action="index.php?controller=client&task=delete&id=<?= $client['id'] ?>&user_id=<?= $_SESSION['id'] ?>" method="post" class="ml-auto">
                        <button class="btn btn-sm btn-outline-danger" type="submit">Supprimer</button>
                    </form></li>
                </ul>
                
                <div class="ml-auto d-flex">
                    <ul class="list-unstyled ml-auto">
                        <li class="pb-1"><?= $client['prenom'] . " " . $client['nom'] ?></li>
                        <li class="pb-1">Tél: <?= $client['telephone'] ?></li>
                        <li class="pb-1">Email: <?= $client['email'] ?></li>
                        <li class="pb-1"><?= $client['adresse'] . " - " . $client['zip'] . " " . $client['ville'] ?></li>
                    </ul>
                </div>
            </div>

            <section>
                <div class="row py-2 bg-light">
                <div class="container d-flex align-items-center">
                        <h3>Devis</h3>
                        <form class="ml-auto" action="index.php?controller=devis&task=new&client_id=<?= $client['id'] ?>" method="post">
                            <button class="btn btn-outline-success" type="submit">New</button>
                        </form>
                    </div>
                </div>
            </section>

            <section>
                <div class="row py-2 bg-light">
                <div class="container d-flex align-items-center">
                        <h3>Factures</h3>
                        <form class="ml-auto" action="index.php?controller=facture&task=add" method="post">
                            <button class="btn btn-outline-success" type="submit">New</button>
                        </form>
                    </div>
                </div>
            </section>

        <?php else : ?>
            <div class="error">
                <p class="text-warning">Ce client n'existe pas ! Veuillez revenir à l'<a href="index.php?controller=dashboard&task=index&id=<?= $_SESSION['id'] ?>" class="navlink">accueil</a></p>
                
            </div>
        <?php endif; ?>
    </section>
</div>