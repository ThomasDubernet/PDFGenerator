<div class="form-connexion">
    
    <h1>T4Code - Inscription</h1>

    <form action="index.php?controller=user&task=insert" method="POST">
        <div class="form-group">
            <input type="text" name="username" placeholder="Username" />
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Email" />
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Password" />
        </div>
        <!-- <div class="form-group">
            <input type="password" name="pass2" placeholder="Confirm password" />
        </div> -->
        <div class="d-flex justify-content-center">
            <button type="submit"  name="submit">Inscription</button>
        </div>
    </form>

</div>