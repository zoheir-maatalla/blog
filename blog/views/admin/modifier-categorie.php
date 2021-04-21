<h1>Modifier une catégorie</h1>

<form action="<?= ROOT ?>admin/edit/categorie/<?= htmlspecialchars($params['tag']->id) ?>" method="post">
    <div class="form-group">
        <label for="nom">Ma catégorie</label>
        <input type="text" class="form-control" name="nom" id="nom"
        value="<?= htmlspecialchars($params['tag']->nom) ?>">
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>
