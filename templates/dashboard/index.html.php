<div class="container">
    <h1>Bienvenue <?= $_SESSION['username'] ?></h1>
    <p>Adresse mail : <?= $_SESSION['email'] ?></p>

    <?php if(isset($clients)): foreach ($clients as $client) : ?>

        <div class="card-client">
            <h4><?= $client['entreprise'] ?></h4>
            <a href="index.php?controller=client&task=delete&id=<?= $client['id'] ?>&user_id=<?= $_SESSION['id'] ?>">delete</a>
        </div>

    <?php endforeach; endif; ?>
</div>