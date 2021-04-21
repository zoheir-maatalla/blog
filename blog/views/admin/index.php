<h1>Tableau de bord</h1>

<?php if(isset($_GET['success'])): ?>
  <div class="alert alert-success">Vous êtes connecté!</div>
<?php endif ?>

<h2>Articles</h2>

<a href="<?= ROOT ?>admin/creer-article" class="btn btn-success my-3">Créer un nouvel article</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Articles</th>
      <th scope="col">Publié le</th>
      <th colspan="2" class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($params['posts'] as $post): ?>
        <tr>
          <td scope="row"><?= $post->id ?></td>
          <td><?= $post->articles ?></td>
          <td><?= $post->getCreatedAt() ?></td>
          <td>
            <a href="<?= ROOT ?>admin/edit/<?= $post->id ?>" class="btn btn-warning">Modifier</a>
          </td>
          <td>
            <form action="<?= ROOT ?>admin/delete/<?= $post->id ?>" method="post" class="d-inline">
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
          </td>
        </tr>
    <?php endforeach ?>
  </tbody>
</table>

<hr>

<h2>Catégories</h2>

<a href="<?= ROOT ?>admin/creer-categorie" class="btn btn-success my-3">Créer une nouvelle catégorie</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($params['tags'] as $tag): ?>
        <tr>
          <td scope="row"><?= $tag->id ?></td>
          <td><?= $tag->nom ?></td>
          <td>
            <a href="<?= ROOT ?>admin/edit/categorie/<?= $tag->id ?>" class="btn btn-warning">Modifier</a>
            <form action="<?= ROOT ?>admin/delete/categorie/<?= $tag->id ?>" method="post" class="d-inline">
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
          </td>
        </tr>
    <?php endforeach ?>
  </tbody>
</table>

<hr>

<h2>Utilisateurs</h2>

<a href="<?= ROOT ?>inscription" class="btn btn-success my-3">Créer un nouvel utilisateur</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Login</th>
      <th scope="col">Password</th>
      <th scope="col">Email</th>
      <th scope="col">Droit</th>
      <th colspan="2" class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($params['users'] as $user): ?>
        <tr>
          <td scope="row"><?= htmlspecialchars($user->id) ?></td>
          <td><?= htmlspecialchars($user->login) ?></td>
          <td><?= htmlspecialchars($user->password) ?></td>
          <td><?= htmlspecialchars($user->email) ?></td>
          <td><?= htmlspecialchars($user->id_droits) ?></td>
          <td>
            <a href="<?= ROOT ?>admin/edit/user/<?= htmlspecialchars($user->id) ?>" class="btn btn-warning">Modifier</a>
            <form action="<?= ROOT ?>admin/delete/user/<?= htmlspecialchars($user->id) ?>" method="post" class="d-inline">
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
          </td>
        </tr>
    <?php endforeach ?>
  </tbody>
</table>
