<main>
    <h1><?= $seo_title ?? ''; ?></h1>
    <fieldset>
        <legend>Inscrivez-vous</legend>
        <form method="POST">
            <div>
                <label for="username">Pseudo</label>
                <input required id="username" name="field_username" type="text"/>
            </div>
            <div>
                <label for="email">Email</label>
                <input required id="email" name="field_email" type="email"/>
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input required id="password" name="field_password" type="password"/>
            </div>
            <button name="form_signup" value="signup">Envoyer</button>
            <!--<input type="submit" value="Envoyer"/>-->
        </form>
    </fieldset>
</main>