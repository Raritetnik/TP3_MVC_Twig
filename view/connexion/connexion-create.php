{{ include('main-menu.php', {title: 'Connexion', pageHeader: 'Connexion creation'})}}
<main>
        <span class="error-petit">{{ errors|raw }}</span>

    <form action="?url=connexion/store" method="POST" class="form-box">
        <label for="">Nom d'utilisateur:
            <input type="text" name="username" required>
        </label>
        <label for="">Mot de passe:
            <input type="password" name="password" required>
        </label>
        <label for="">Niveau d'access:
            <select name="lvlAccess">
                <option value="0">Utilisateur</option>
                <option value="1">Moderateur</option>
                <option value="2">Administrateur</option>
            </select>
        </label>
        <input type="submit" value="Creer">
    </form>
</main>