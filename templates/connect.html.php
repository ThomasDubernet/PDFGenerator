<div class="container">
    <div class="form-connexion">
        <section>
            <h2 class="text-primary">T4Code - Connexion</h2>
        </section>
    
        <section>
            <form action="index.php?controller=user&task=verify" method="POST">
                <div class="form-group">
                    <input type="text" name="username" placeholder="Login" />
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" />
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-primary"  name="submit">Connexion</button>
                </div>
            </form>
        </section>
    </div>
</div>