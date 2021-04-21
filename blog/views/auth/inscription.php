<h1>Inscription</h1>

<form action="<?= ROOT ?>inscription" method="post">
    <div class="form-group">
        <label for="login">Login</label>
        <input type="text" class="form-control" name="login" id="login">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>
    <div class="form-group">
        <label for="passwordConfirm">Confimez votre Password</label>
        <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email">
    </div>
    <button type="submit" class="btn btn-primary">Inscription</button>
</form>
