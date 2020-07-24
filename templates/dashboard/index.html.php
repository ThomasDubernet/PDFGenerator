<?php $user = unserialize($user); ?>

<div class="container">
    <h1>Bienvenue <?= $user['username'] ?></h1>
    <p>Adresse mail : <?= $user['email'] ?></p>
</div>