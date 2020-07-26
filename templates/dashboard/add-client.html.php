<div class="container">
    <div class="box-form">
        <div class="form-add">
            <h2>Ajouter un client</h2>
        
            <form action="index.php?controller=client&task=insert" method="post">
                <div class="form-group">
                    <label for="nom">Nom du client</label>
                    <input class="form-control" type="text" name="nom" />
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom du client</label>
                    <input class="form-control" type="text" name="prenom" />
                </div>
                <div class="form-group">
                    <label for="entreprise">Nom de l'entreprise</label>
                    <input class="form-control" type="text" name="entreprise" />
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" />
                </div>
                <div class="form-group">
                    <label for="telephone">Téléphone</label>
                    <input class="form-control" type="text" name="telephone" />
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input class="form-control" type="text" name="adresse" />
                </div>
                <div class="form-group">
                    <label for="zip">Code postal</label>
                    <input class="form-control" type="text" name="zip" />
                </div>
                <div class="form-group">
                    <label for="ville">Ville</label>
                    <input class="form-control" type="text" name="ville" />
                </div>
                <input type="hidden" name="user_id" value="<?= $_SESSION['id'] ?>">
                <div class="d-flex justify-content-center">
                    <button type="submit"  name="submit">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>