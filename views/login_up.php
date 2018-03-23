<article>
    <form action="index.php" method="POST">
        <legend>Inscription</legend>
        <label> Nom : </label> <input type="text" name="lname" required><br>
        <label> Prenom : </label> <input type="text" name="fname" required><br>
		<label> Pseudo : </label> <input type="text" name="username" required><br>
		<label> Mot de passe : </label> <input type="password" name="passwd1" required><br>
		<label> Mot de passe : </label> <input type="password" name="passwd2" required><br>
		<input type="submit" name="SIGNUP" value="Inscription">
    </form>
</article>
<article>
   <form action="?action=member" method="POST">

        <legend>Connexion</legend>
        <label>Pseudo : </label><input type="text" name="user" required></br>
        <label>Mot de passe : </label><input type="password" name="passwd" required></br>
        <input type="submit" name="LOGIN" value="Connexion">
    </form>
</article>

