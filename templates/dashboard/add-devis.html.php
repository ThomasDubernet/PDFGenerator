<div class="container">
    <section>
        <h2 class="text-center text-primary">Nouveau devis</h2>
    </section>

    <!-- <embed 
    src="/devis/test.pdf"
    width="70%" height="500"
    type='application/pdf'/> -->

    <?php if(isset($clients)) : ?>
        <form action="index.php?controller=devis&task=insert" method="post">
            <div class="form-group">
                <input type="hidden" name="user_id" value="<?= $_SESSION['id'] ?>" />
                <label for="client">Choix du client: </label>
                <select name="client_id" class="form-control">
                    <?php foreach($clients as $client) : ?>
                        <option value="<?= $client['id'] ?>"><?= $client['entreprise'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group mb-3">
                <h4 class="d-flex"><strong>Tâches : </strong><button id="addTask" class="btn btn-success ml-auto">+</button></h4>
                <div id="groupTask"></div>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>
            </div>
        </form>
    <?php elseif(isset($client)) : ?>

        <form action="index.php?controller=devis&task=insert" method="post">
            <div class="form-group">
                <input type="hidden" name="user_id" value="<?= $_SESSION['id'] ?>" />
                <label for="client_entreprise">Client :</label>
                <input readonly class="form-control" type="text" name="client_entreprise" value="<?= $client['entreprise'] ?>" />
            </div>
            <div class="form-group mb-3">
                <h4 class="d-flex"><strong>Tâches : </strong><button id="addTask" class="btn btn-success ml-auto">+</button></h4>
                <div id="groupTask"></div>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>
            </div>
        </form>


    <?php else : ?>
        <h3 class="text-danger">Erreur sur la création d'un nouveau devis</h3>
    <?php endif;

    ?>
    
</div>