<div class="form-connexion">
    
    <h1>T4Code - Inscription</h1>

    <form action="index.php?controller=user&task=insert" method="POST">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="username">Identifiant :</label>
                    <input class="form-control" type="text" name="username"  />
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input class="form-control" type="email" name="email" placeholder="ex : ...@gmail.com ...@hotmail.fr" />
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe :</label>
                    <input class="form-control" type="password" name="password"  />
                </div>
                <div class="form-group">
                    <label for="siret">N° de Siret :</label>
                    <input class="form-control" type="text" name="siret" placeholder="ex : 000 000 000 00000" />
                </div>
                <div class="form-group">
                    <label for="social">Réseau social :</label>
                    <input class="form-control" type="text" name="social" />
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="number">N° de téléphone :</label>
                    <input class="form-control" type="text" name="number" placeholder="ex : 06 00 00 00 00" />
                </div>
                <div class="form-group">
                    <label for="adresse">Adresse :</label>
                    <input class="form-control" type="text" name="adresse"  />
                </div>
                <div class="form-group">
                    <label for="zip">Code postal :</label>
                    <input class="form-control" type="text" name="zip" />
                </div>
                <div class="form-group">
                    <label for="ville">Ville :</label>
                    <input class="form-control" type="text" name="ville"  />
                </div>
                <div class="form-group">
                    <label for="site">Site web :</label>
                    <input class="form-control" type="text" name="site" />
                </div>
            </div>
        </div>
        <!-- <div class="form-group">
            <input class="form-control" type="password" name="pass2" password" />
        </div> -->
        <div class="d-flex justify-content-center mt-3">
            <button type="submit" class="btn btn-primary" name="submit">Inscription</button>
        </div>
    </form>

</div>