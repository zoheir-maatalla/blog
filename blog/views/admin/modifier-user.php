<h1>Modifier un profil</h1>

<?php if(isset($_GET['success'])): ?>
  <div class="alert alert-success">Vous êtes connecté!</div>
<?php endif ?>

<form action="<?= ROOT ?>admin/edit/user/<?=  htmlspecialchars($params['user']->id) ?>" method="post">
    <div class="form-group">
        <label for="login">Login</label>
        <input type="text" class="form-control" name="login" id="login" value="<?=  htmlspecialchars($params['user']->login) ?>">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" value="<?=  htmlspecialchars($params['user']->password) ?>">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="<?=  htmlspecialchars($params['user']->email) ?>">
    </div>
    <div class="form-group">
        <label for="id_droits">Droit d'utilisateur</label>
        <select multiple class="form-control" id="id_droits" name="id_droits">
            <?php foreach($params['droits'] as $droits): ?>
                <option value="<?= htmlspecialchars($droits->id) ?>"
                    <?php if($droits->id === $params['user']->id_droits): ?>
                            selected
                    <?php endif ?>
                ><?= htmlspecialchars($droits->nom) ?></option>
            <?php endforeach ?>          
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>
