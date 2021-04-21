<h1>Profil</h1>

<?php if(isset($_GET['success'])): ?>
  <div class="alert alert-success">Vous êtes connecté!</div>
<?php endif ?>

<form action="<?= ROOT ?>profil/<?= htmlspecialchars($_SESSION['id']) ?>" method="post">
    <div class="form-group">
        <label for="login">Login</label>
        <input type="text" class="form-control" name="login" id="login" value="<?= htmlspecialchars($_SESSION['login']) ?>">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" value="<?= htmlspecialchars($_SESSION['password']) ?>">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="<?= htmlspecialchars($_SESSION['email']) ?>">
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>
