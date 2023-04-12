<main>
    <h1><?= $seo_title ?? ''; ?></h1>
    <fieldset>
        <legend>Vous êtes ?</legend>
        <form method="POST">
            <div>
                <label for="username">Pseudo</label>
                <input required id="username" name="field_username" type="text"/>
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input required id="password" name="field_password" type="password"/>
            </div>
            <button name="form_login" value="login">Envoyer</button>
            <!--<input type="submit" value="Envoyer"/>-->
        </form>
    </fieldset>
</main>