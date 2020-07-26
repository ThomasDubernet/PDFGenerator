<div class="container">
    <section>
        <h1 class="text-center">Panel de gestion</h1>
    </section>

    <section>
        <div class="row py-2 bg-light">
            <div class="container d-flex align-items-center">
                <h3>Clients</h3>
                <form class="ml-auto" action="index.php?controller=client&task=add" method="post">
                    <button class="btn btn-outline-success" type="submit">New</button>
                </form>
            </div>
        </div>

        <div class="d-flex">
            <?php if(isset($clients)): foreach ($clients as $client) : ?>
        
                <div class="card-client">
                    <h4 class="text-center text-info pb-3"><?= $client['entreprise'] ?></h4>
                    <ul class="list-unstyled text-center">
                        <li class="pb-1"><?= $client['prenom'] . " " . $client['nom'] ?></li>
                        <li class="pb-1">Tél: <?= $client['telephone'] ?></li>
                        <li class="pb-1">Email: <?= $client['email'] ?></li>
                        <li class="pb-1"><?= $client['adresse'] . " - " . $client['zip'] . " " . $client['ville'] ?></li>
                    </ul>
                    <div class="d-flex">
                        <form action="index.php?controller=client&task=show&client_id=<?= $client['id'] ?>" method="post" class="ml-auto">
                            <button class="btn btn-sm btn-outline-info" type="submit">Voir</button>
                        </form>
                        <form action="index.php?controller=client&task=show&id=<?= $client['id'] ?>&user_id=<?= $_SESSION['id'] ?>" method="post" class="ml-3">
                            <button class="btn btn-sm btn-outline-danger" type="submit">Supprimer</button>
                        </form>
                    </div>
                    
                </div>
        
            <?php endforeach; endif; ?>
        </div>
    </section>

    <section>
        <div class="row py-2 bg-light">
            <div class="container d-flex align-items-center">
                <h3>Devis</h3>
                <form class="ml-auto" action="index.php?controller=devis&task=new&user_id=<?= $_SESSION['id'] ?>" method="post">
                    <button class="btn btn-outline-success" type="submit">New</button>
                </form>
            </div>
        </div>
    </section>

    <section>
        <div class="row py-2 bg-light">
            <div class="container d-flex align-items-center">
                <h3>Factures</h3>
                <form class="ml-auto" action="index.php?controller=facture&task=new&user_id=<?= $_SESSION['id'] ?>" method="post">
                    <button class="btn btn-outline-success" type="submit">New</button>
                </form>
            </div>
        </div>
    </section>
</div>
